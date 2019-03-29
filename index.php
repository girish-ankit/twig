<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
define('DEBUG', TRUE);
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, array('cache' => './tmp/cache', 'debug' => DEBUG,));
if (DEBUG) {
    $twig->addExtension(new Twig_Extension_Debug());
}

$template = $twig->loadTemplate('hello.phtml');


$params = array(
    'name' => 'Ankit kumar',
    'family' => array(
        array(
            'firstname' => 'raj -',
            'lastname' => 'kiran'
        ),
        array(
            'firstname' => '<b>abhay</b>',
            'lastname' => 'kumar'
        ),
        array(
            'firstname' => 'Kajal',
            'lastname' => 'kumari'
        )
    ),
    'myarray' => array('name' => 'ankit', 'age' => 30, 'village' => 'Morhar', 'pincode' => '843125'),
    'user' => array('role' => 'admin')
);


$template->display($params);
?>
