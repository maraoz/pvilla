<?php

define("IMG", '/img/proceres/');
define("TWITTER", 'http://www.twitter.com/#/');
$first_x_range = 15;
$second_x_range = 25;
$proceres = array(
    array(
        'name' => 'Pancho Villa',
        'description' => '',
        'img' => IMG . 'pancho-villa.png',
        'img_over' => IMG . 'pancho-villa.png',
        'twitter' => TWITTER . 'ManuBelg',
        'img.attributes' => 'width="700" height="550" data-xrange="'.$second_x_range.'" data-yrange="0" style="position:absolute;bottom:-5px; left:140px;z-index:3;"',
    ),
);
ksort($proceres);
$config['twitter'] = array(
    'username' => "NinjaArroyo", // el usuario vwargentina - mg54digital
    'list' => "revolucionarios", // lista
    'avatar_size' => 48, // Ponle 0 si no quieres avatares
    'count' => 9, // Numero de tweets
    'loading_text' => "Cargando...",
    'first_procer' => $proceres[rand(0, 14)],
);