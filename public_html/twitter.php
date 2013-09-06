<?php

ob_start('ob_gzhandler');
$url = $_GET['url'];
$dir_tmp = dirname(__FILE__).'/cache/';
if(!is_dir($dir_tmp)){
  mkdir($dir_tmp,777);
}
$filename = substr(md5($url), 0, 14).'.tmp';
$callback = $_GET['callback'];
if (file_exists($dir_tmp.$filename)) {
    $data = unserialize(file_get_contents($dir_tmp.$filename));
    if ($data['timestamp'] > (time() - ( 10 * 60))) {
        $twitter_result = $data['twitter_result'];
    } else {
        copy($dir_tmp.$filename, $dir_tmp.$filename . '_' . date('YmdHis'));
        unlink($dir_tmp.$filename);
    }
}
if (!$twitter_result) { // cache doesn't exist or is older than 10 mins
    $ch = curl_init('http://api.twitter.com/1/account/rate_limit_status.json');
    $options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => array('Content-type: application/json'),
    );
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch); // Getting jSON result string
    $response = json_decode($response);
    if ($response->remaining_hits <=0) {
        $dir = "tmp";
        $newstamp = 0;
        $newname = "";
        $dc = opendir($dir);
        while ($fn = readdir($dc)) {
            if ($fn == '.' || $fn == '..') {
                continue;
            }
            $timedat = filemtime("$dir/$fn");
            if ($timedat > $newstamp) {
                $newstamp = $timedat;
                $newname = "$dir/$fn";
            }
        }
        $data = unserialize(file_get_contents($newname));
	echo $newname;exit;
        echo $twitter_result = $data['twitter_result'];exit;
	$data['timestamp'] = $response->reset_time_in_seconds;
	save($dir_tmp.$filename, serialize($data));
    } else {
        $json_url = $url;
        $ch = curl_init($json_url);
        $options = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array('Content-type: application/json'),
        );
        curl_setopt_array($ch, $options);
        $twitter_result = curl_exec($ch); // Getting jSON result string
        $data = array('twitter_result' => $twitter_result, 'timestamp' => time());
 	$data = serialize($data);
        save($dir_tmp.$filename, $data);
    }
}
header("Content-type: text/javascript");
header('Content-type: text/json');
header('Content-type: application/json');
header('Content-Encoding: gzip');
header('Accept-Encoding: gzip,deflate');

echo "$callback$twitter_result";

function save($filename, $data){
    $handle = fopen($filename, 'w+');
    fwrite($handle, $data);
    fclose($handle);
}