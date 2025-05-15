<?php

require 'dados.php';

$id = $_REQUEST['id'];



$filtrado = array_filter($livros, function ($l) use ($id) {
    return $l['id'] == $id;
});

$livro = array_pop($filtrado);



/*
views

M => daods

V => HTML

C => Fornecer dados a view e manupular os models
*/


$view = "livro";




require 'views/templates/app.php';
?>





