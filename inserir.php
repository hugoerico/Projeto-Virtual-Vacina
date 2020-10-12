<?php

session_start();

require_once "bd.php";

$diretorio='imagens/fotos/';
$foto1 = $_FILES['foto']['name'];

echo $foto1;

$objCadastro = $objBanco->prepare('	INSERT INTO Cadastro ( nome, cpf,senha,sus,foto,mdEscuro)VALUES ( :nome, :cpf, :senha,:sus,:foto,:mdEscuro)');


$objCadastro->bindParam(':nome', $_POST['nome']);			
$objCadastro->bindParam(':cpf', $_POST['cpf']);
$objCadastro->bindParam(':senha', $_POST['senha']);
$objCadastro->bindParam(':sus', $_POST['sus']);	
$objCadastro->bindParam(':foto', $foto1);
$objCadastro->bindParam(':mdEscuro', $_POST['mdEscuro']);

if ( $objCadastro->execute() ) {

	$diretorio='imagens/fotos/';
	move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$foto1);
	echo 'Contato gravado com sucesso!';

} else {

	echo' :-( deu erro, tente novamente! ';
}
$id = $objBanco->lastInsertId();
echo $id ;

$objEndereco = $objBanco->prepare('	INSERT INTO Endereco ( cep, rua,numero,complemento,bairro,estado,cidade,idCadastro)VALUES ( :cep, :rua,:numero,:complemento,:bairro,:estado,:cidade, :idCadastro)');


$objEndereco->bindParam(':cep', $_POST['cep']);		
$objEndereco->bindParam(':rua', $_POST['rua']);
$objEndereco->bindParam(':numero', $_POST['numero']);
$objEndereco->bindParam(':complemento', $_POST['complemento']);	
$objEndereco->bindParam(':bairro', $_POST['bairro']);
$objEndereco->bindParam(':estado', $_POST['estado']);
$objEndereco->bindParam(':cidade', $_POST['cidade']);
$objEndereco->bindParam(':idCadastro', $id);

if ( $objEndereco->execute() ) {
	echo 'Contato gravado com sucesso!';
} else {

	echo' :-( deu erro, tente novamente! ';
}



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