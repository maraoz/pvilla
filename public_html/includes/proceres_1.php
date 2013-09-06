<?php

define("IMG", '/img/proceres/');
define("TWITTER", 'http://www.twitter.com/#/');
$proceres = array(
    0 => array(
        'name' => 'Martín de Azcuénaga',
        'description' => '',
        'img' => IMG . 'procer3.png',
        'twitter' => TWITTER . 'MdeAzcuenaga',
        'div.attributes'=>'style="width:1080px; height:447px; z-index:14;"',
        'a.attributes' => 'style="position:absolute; bottom:0px; left:20px;"',
    ),
    2 => array(
        'name' => 'N. Rodriguez Peña',
        'description' => '',
        'img' => IMG . 'procer4.png',
        'twitter' => TWITTER . 'nico_rp',
        'div.attributes'=>'style="width:1080px; height:447px; z-index:2;"',
        'a.attributes' => 'style="position:absolute; bottom:20px; left:120px;"',
    ),
    4 => array(
        'name' => 'Cornelio Saavedra',
        'description' => '',
        'img' => IMG . 'procer5.png',
        'twitter' => TWITTER . 'CorneSaave',
        'div.attributes'=>'style="width:1080px; height:447px; z-index:14;"',
        'a.attributes' => 'style="position:absolute; bottom:-10px; left:190px;"',
    ),
    8 => array(
        'name' => 'Domingo French',
        'description' => '',
        'img' => IMG . 'procer9.png',
        'twitter' => TWITTER . 'MingoyToni',
        'div.attributes'=>'style="width:1080px; height:447px; z-index:14;"',
        'a.attributes' => 'style="position:absolute; bottom:-10px; left:430px;"',
    ),
    9 => array(
        'name' => 'JJ Castelli',
        'description' => '',
        'img' => IMG . 'procer10.png',
        'twitter' => TWITTER . 'CastelliJJ',
        'div.attributes'=>'style="width:1040px; height:447px; z-index:15;"',
        'a.attributes' => 'style="position:absolute; bottom:-10px; left:470px;"',
    ),
    11 => array(
        'name' => 'Domingo Matheu',
        'description' => '',
        'img' => IMG . 'procer12.png',
        'twitter' => TWITTER . 'MingoMatheu',
        'div.attributes'=>'style="width:1040px; height:447px; z-index:14;"',
        'a.attributes' => 'style="position:absolute; bottom:0px; left:600px;"',
    ),
    13 => array(
        'name' => 'Baltasar Hidalgo de Cisneros',
        'description' => '',
        'img' => IMG . 'procer14.png',
        'twitter' => TWITTER . '',
        'div.attributes'=>'style="width:1080px; height:447px; z-index:14;"',
        'a.attributes' => 'style="position:absolute; bottom:0px; left:770px;"',
    ),
    6 => array(
        'name' => 'Antonio Beruti',
        'description' => 'MingoyToni',
        'img' => IMG . 'procer7.png',
        'twitter' => TWITTER . '',
        'div.attributes'=>'style="width:1080px; height:447px; z-index:14;"',
        'a.attributes' => 'style="position:absolute; bottom:0px; left:330px;"',
    ),
    3 => array(
        'name' => 'Mariano Moreno',
        'description' => '',
        'img' => IMG . 'procer6.png',
        'twitter' => TWITTER . 'Moreno1778',
        'div.attributes'=>'style="width:1040px; height:447px; z-index:15;"',
        'a.attributes' => 'style="position:absolute; bottom:-20px; left:120px;"',
    ),
    5 => array(
        'name' => 'JJ Paso',
        'description' => '',
        'img' => IMG . 'procer1.png',
        'twitter' => TWITTER . 'JJ_Paso',
        'div.attributes'=>'style="width:1040px; height:447px; z-index:15;"',
        'a.attributes' => 'style="position:absolute; bottom:-20px; left:225px;"',
    ),
    1 => array(
        'name' => 'Juan Larrea',
        'description' => '',
        'img' => IMG . 'procer2.png',
        'twitter' => TWITTER . '',
        'div.attributes'=>'style="width:1040px; height:447px; z-index:15;"',
        'a.attributes' => 'style="position:absolute; bottom:-30px; left:50px;"',
    ),
    7 => array(
        'name' => 'Manuel Belgrano',
        'description' => 'MingoyToni',
        'img' => IMG . 'procer8.png',
        'twitter' => TWITTER . 'ManuBelg',
        'div.attributes'=>'style="width:1040px; height:447px; z-index:15;"',
        'a.attributes' => 'style="position:absolute; bottom:-15px; left:360px;"',
    ),
    10 => array(
        'name' => 'J. Hipólito Vieytes',
        'description' => '',
        'img' => IMG . 'procer11.png',
        'twitter' => TWITTER . 'JHVieytes',
        'div.attributes'=>'style="width:1080px; height:447px; z-index:14;"',
        'a.attributes' => 'style="position:absolute; bottom:20px; left:550px;"',
    ),
    12 => array(
        'name' => 'Manuel Alberti',
        'description' => '',
        'img' => IMG . 'procer13.png',
        'twitter' => TWITTER . 'PadreAlberti',
        'div.attributes'=>'style="width:1040px; height:447px; z-index:15;"',
        'a.attributes' => 'style="position:absolute; bottom:-10px; left:700px;"',
    ),
    14 => array(
        'name' => 'J. J. de Lezica',
        'description' => '',
        'img' => IMG . 'procer15.png',
        'twitter' => TWITTER . '',
        'div.attributes'=>'style="width:1040px; height:447px; z-index:15;"',
        'a.attributes' => 'style="position:absolute; bottom:-10px; left:850px;"',
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
