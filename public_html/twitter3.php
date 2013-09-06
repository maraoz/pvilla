<?php
ob_start('ob_gzhandler');
$url = $_GET['url'];
$filename = 'tmp/' . md5($url);
$callback = $_GET['callback'];

if (file_exists($filename)) {
    $data = unserialize(file_get_contents($filename));
    if ($data['timestamp'] > (time() - ( 2 * 60))) {
        $twitter_result = $data['twitter_result'];
    } else {
        copy($filename, $filename.date('YmdHis'));
        //unlink($filename);
    }
}
if (!$twitter_result) { // cache doesn't exist or is older than 10 mins
    $json_url = $url;
    $ch = curl_init($json_url);
    $options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => array('Content-type: application/json'),
    );
    curl_setopt_array($ch, $options);
    $twitter_result = curl_exec($ch); // Getting jSON result string
    $data = array('twitter_result' => $twitter_result, 'timestamp' => time());
    if(is_dir('tmp')){
        mkdir('tmp', 777);
    }
    file_put_contents($filename, serialize($data));
}
header("Content-type: text/javascript");
header('Content-type: text/json');
header('Content-type: application/json');
header('Content-Encoding: gzip');
header('Accept-Encoding: gzip,deflate');

echo "$callback$twitter_result";
