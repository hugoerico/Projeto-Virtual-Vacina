<?php

require_once 'bd.php';


$id = preg_replace('/\D/', '', $_GET['id']);

if ( $objBanco->exec("DELETE FROM Post WHERE id = $id") !== false ) {

	header("Location: post1.php");

} else {

	echo "não deu";
}

$id1 = preg_replace('/\D/', '', $_GET['id']);

if ( $objBanco->exec("DELETE FROM Carrousel WHERE id = $id1") !== false ) {

	header("Location: imagem_home.php");

} else {

	echo "não deu";
}
