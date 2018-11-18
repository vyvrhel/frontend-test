<?php

require_once '../vendor/autoload.php';
require_once '../src/Resources/data/Data.php';

$loader = new Twig_Loader_Filesystem('../src/Resources/views');
$twig = new Twig_Environment($loader, array(
    'debug' => true,
));
$twig->addExtension(new Twig_Extension_Debug());

$data = new Data;

echo $twig->render('Homepage/index.html.twig', array(
    'data' => $data->getData(),
));

?>
