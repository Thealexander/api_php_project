<?php

$array = explode("/", $_SERVER['REQUEST_URI']);

//echo  $_SERVER['REQUEST_URI'];
// echo "<pre>";
// print_r($arrayRutas);
// echo "<pre>";
if (count(array_filter($arrayRutas)) == 2) {

    $json = array(
        "detalle" => "no encontrado"
    );

    echo json_encode($json, true);
}
