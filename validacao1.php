<?php 

session_start();

require_once "bd.php";

$senha= $_POST['senha'];
$cpf= $_POST['cpf'];


$statement = $objBanco->prepare("SELECT cpf, senha FROM Admini WHERE senha = '$senha' AND cpf = '$cpf';");

$statement-> execute();

$count = $statement->rowCount();


if ($count==0){
    
    var_dump($_POST);
    echo "não deu";
    
  die();
}else{
    $_SESSION['adminlog'] = true;
    
  header("Location: post.php");
}