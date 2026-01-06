<?php
define("PATH_PROJET", $_SERVER['DOCUMENT_ROOT']  . "/php-routes");
define("WEB_ROOT", "/php-routes");


function dg($data) {
    echo '<pre style="background-color:black; color:white;padding: 1rem;">';
    var_dump($data);
    echo '</pre>';
}

function dd($data) {
    echo '<pre style="background-color:black; color:white;padding: 1rem;">';
    var_dump($data);
    echo '</pre>';
    die();
}

function redirect($url) {
    header("Location: " . WEB_ROOT . "/" . $url);
    exit;
}