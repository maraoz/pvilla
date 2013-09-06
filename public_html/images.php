<?php

$dir_path = '/home/www/www-revolucion-mayo.com.ar/public_html/img/proceres/';
$dir_handle = opendir($dir_path);
while ($file = readdir($dir_handle)) {
    if ($file != '.' && $file != '..' && $file != '.svn') {
        if (!strpos($file, '_over')) {
            $size = (getimagesize($dir_path . $file));
            echo "$file ";
            echo "{$size[3]} data-xrange=\"25\" data-yrange=\"0\" style=\"position:absolute;top:-20px;left:70px;z-index:1;\"";
            echo "<br/>";
            /*echo "array(
        'name' => 'JJ Paso',
        'description' => '',
        'img' => IMG . '$file',
        'img_over' => IMG . '" . (str_replace('.png', '_over.png', $file)) . "',
        'twitter' => TWITTER . 'JJ_Paso',
        'img.attributes'=>'width=\"200\" height=\"210\" data-xrange=\"15\" data-yrange=\"0\" style=\"position: absolute;top: 45px;left: 0;z-index: 3;\"',
    )";*/
        }
    }
}
closedir($dir_handle);