<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_String();
$twig = new Twig_Environment($loader);
echo $twig->render('Hello {{ name }}!', array('name' => 'Fabien'));



?>
