<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
define('DEBUG', TRUE);
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, array('cache' => './tmp/cache', 'debug' => DEBUG,));
if(DEBUG){
$twig->addExtension(new Twig_Extension_Debug());
}

$template = $twig->loadTemplate('extend.html');
$params = array();
$template->display($params);


?>