<?php
//include 'fonctions.php';
require 'routes.php';

//$page = isset($_GET['page']) ? $_GET['page'] : 'home';
//$page = $_GET['page'] ?? 'home';
$pageFiltre = filter_input(INPUT_GET, 'page' , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$page = $pageFiltre ?? 'home';

if (!array_key_exists($page,$routes)) {
    redirect('404.php');
}

//redirect($routes[$page]);
require $routes[$page];
die();

/*
!!! http://localhost/php-routes/?page=../../ 
http://localhost/php-routes/ => home.php
http://localhost/php-routes/?page=about => about.php
http://localhost/php-routes/?page=contact => contact.php
http://localhost/php-routes/?page=prix => 404.php
http://localhost/php-routes/?page=edit&id=45 => edit.php?id=45
*/

