<?php 




$controller = 'index';

if($uri = str_replace("/BookWise/", '', $_SERVER['REQUEST_URI'])){
    $view = $uri;
};


require "controllers/{$controller}.controller.php";

?>

