<?php 

$router = new AltoRouter;

$router->map('GET','/about','','about_us');

$match = $router->match();

var_dump($match);

?>