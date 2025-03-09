<?php

require 'MyPDO.class.php';
require 'Planet.class.php';

try {
    $mypdo = new MyPDO('mysql:host=db;dbname=universe;charset=utf8', 'root');
} 
catch(Exception $e) {
    //echo $e->getMessage();
    throw new Exception("Check your DB crendentials");
}

$planet = new Planet($mypdo);

$planet->find(1);
//var_dump($planet->data);

$planet->all();
foreach ($planet->data as $planet) {
    echo '<h2>'.$planet['name'] . '</h2>';
    echo $planet['description'] . '</br>';;
}