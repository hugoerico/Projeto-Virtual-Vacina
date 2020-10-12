<?php 

session_start();

require_once "bd.php";

$senha= $_POST['senha'];
$cpf= $_POST['cpf'];


$statement = $objBanco->prepare("SELECT cpf, senha FROM Cadastro WHERE senha = '$senha' AND cpf = '$cpf';");

$statement-> execute();

$count = $statement->rowCount();


if ($count==0){
    
    header("Location: login.php");
    
  die();
}else{
    $_SESSION['a'] = $cpf;
    $_SESSION['usuariolog'] = true;
  header("Location: cadastro1.php");
}