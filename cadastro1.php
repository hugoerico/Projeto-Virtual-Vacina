<?php

session_start();

if (!isset($_SESSION['usuariolog'])) {
	header("Location: index.php");
	session_destroy();
}


require_once "bd.php"; 

$n1 = $_SESSION['a'];

$statement = $objBanco->prepare("SELECT * FROM Cadastro WHERE cpf = '$n1';");
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
$cadastro=$users[0];

$n2 =$cadastro['id'];

$statement1 = $objBanco->prepare("SELECT * FROM Endereco WHERE idCadastro = '$n2';");
$statement1->execute();
$users1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
$endereco=$users1[0];




include "cabecalho.php";

?>

<section id="cadastro">

<form enctype="multipart/form-data" action="inserir.php" method="post">

<fieldset>

<h3>Preencha com suas informações abaixo.</h3>
<div>
<label for="" >
Nome Completo:
</label>
<input type="text" name="nome" id="" style="width: 25em" required="required" value="<?php echo $cadastro['nome'] ?>">

<label for="" >
Foto:
</label>
<input type="file" name="foto" id="" >

<input type="radio" id="claro" name="mdEscuro" value="claro" onclick="modoEscuro()">
  Claro
  <input type="radio" id="escuro" name="mdEscuro" value="escuro" onclick="modoEscuro(this.id)">
  Escuro
</div>

<div class="well" style="width:10em;height:10em;" id="foto">

<img src="imagens/fotos/<?php echo $cadastro['foto'] ?>"  style="width:8em;height:7em;" >

</div>

<div>
<label for="">
CPF:
</label>
<input type="text" name="cpf" id="cpf" onkeypress="soNumero(this.id)" maxlength="14" required="required" value="<?php echo $cadastro['cpf'] ?>">
</div>

<div>
<label for="">
SUS:
</label>
<input type="text" name="sus" id="sus" onkeypress="soNumero(this.id);" required="required" value="<?php echo $cadastro['sus'] ?>">
</div>

</fieldset>

<fieldset>

<h3>Endereço</h3>

<div>
<label >
Cep:
</label>
<input  type="text" name="cep" id="cep" onblur="cadastro.cep.pesquisacep(this.value);" value="<?php echo $endereco['cep'] ?>" maxlength="9" onkeypress="soNumero(this.id)" required="required">
<span >
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
</svg>
</span>
</div>

<div>
<label >
Rua:
</label>
<input type="text" name="rua"  id="rua" style="width: 20em" value="<?php echo $endereco['rua'] ?>">

<label >
Nº:
</label>
<input type="text" name="numero"  id="numero" style="width: 5em" required="required" value="<?php echo $endereco['numero'] ?>">

<label >
Complemento:
</label>
<input  type="text" name="complemento" id="complemento" value="<?php echo $endereco['complemento'] ?>" >
</div>

<div>
<label>
Bairro:
</label>
<input type="text" name="bairro" id="bairro" value="<?php echo $endereco['bairro'] ?>">

<label >
Estado:
</label>
<input  type="text" name="estado" id="estado" style="width: 3em" value="<?php echo $endereco['estado'] ?>">

<label >
Cidade:
</label>
<input type="text"name="cidade"  id="cidade" value="<?php echo $endereco['cidade'] ?>">
</div>

</fieldset>

<h4 class="centro">Carteira de Vacina</h4>

<div id="menuEscolha">
  <a class="btn btn-primary" data-toggle="collapse" href="#mostrar" role="button" aria-expanded="false" >
    Criança
  </a>

  <a class="btn btn-primary" data-toggle="collapse" href="#mostrar1" role="button" aria-expanded="false" >
    Adolecente
  </a>

  <a class="btn btn-primary" data-toggle="collapse" href="#mostrar2" role="button" aria-expanded="false" >
    adulto
  </a>

  <a class="btn btn-primary" data-toggle="collapse" href="#mostrar3" role="button" aria-expanded="false" >
    Gestante
  </a>

  <a class="btn btn-primary" data-toggle="collapse" href="#mostrar4" role="button" aria-expanded="false" >
    Idoso
  </a>

</div>

<div class="collapse" id="mostrar">
  <div class="card card-body">
    <h3 class="centro">criança</h3>
    <table>
<tr>
<th>Idade</th>
<th>BCG</th>
<th>hepatite B</th>
<th>Penta/DTP</th>
<th>VIP/VOP</th>
<th>Pneumocócica 10V (Conjugada)</th>
<th>Rotavírus Humano</th>
<th>Meningocócica C (Conjugada)</th>
<th>Febre Amarela</th>
<th>Hepatite A¹</th>
<th>Tríplice Viral</th>
<th>Tetra Viral</th>
<th>Varicela</th>
<th>HPV</th>
<th>Pneumocócica 23V</th>
<th>Dupla Adulto</th>
<th>DTPA</th>
<th>Influenza</th>
</tr>
</table>
  </div>
</div>

<div class="collapse" id="mostrar1">
  <div class="card card-body">
    <h3 class="centro">adolecente</h3>
    <table>
<tr>
<th>Idade</th>
<th>BCG</th>
<th>hepatite B</th>
<th>Penta/DTP</th>
<th>VIP/VOP</th>
<th>Pneumocócica 10V (Conjugada)</th>
<th>Rotavírus Humano</th>
<th>Meningocócica C (Conjugada)</th>
<th>Febre Amarela</th>
<th>Hepatite A¹</th>
<th>Tríplice Viral</th>
<th>Tetra Viral</th>
<th>Varicela</th>
<th>HPV</th>
<th>Pneumocócica 23V</th>
<th>Dupla Adulto</th>
<th>DTPA</th>
<th>Influenza</th>
</tr>
</table>
  </div>
</div>

<div class="collapse" id="mostrar2">
  <div class="card card-body">
    <h3 class="centro">adulto</h3>
    <table>
<tr>
<th>Idade</th>
<th>BCG</th>
<th>hepatite B</th>
<th>Penta/DTP</th>
<th>VIP/VOP</th>
<th>Pneumocócica 10V (Conjugada)</th>
<th>Rotavírus Humano</th>
<th>Meningocócica C (Conjugada)</th>
<th>Febre Amarela</th>
<th>Hepatite A¹</th>
<th>Tríplice Viral</th>
<th>Tetra Viral</th>
<th>Varicela</th>
<th>HPV</th>
<th>Pneumocócica 23V</th>
<th>Dupla Adulto</th>
<th>DTPA</th>
<th>Influenza</th>
</tr>
</table>
  </div>
</div>

<div class="collapse" id="mostrar3">
  <div class="card card-body">
    <h3 class="centro">gestante</h3>
    <table>
<tr>
<th>Idade</th>
<th>BCG</th>
<th>hepatite B</th>
<th>Penta/DTP</th>
<th>VIP/VOP</th>
<th>Pneumocócica 10V (Conjugada)</th>
<th>Rotavírus Humano</th>
<th>Meningocócica C (Conjugada)</th>
<th>Febre Amarela</th>
<th>Hepatite A¹</th>
<th>Tríplice Viral</th>
<th>Tetra Viral</th>
<th>Varicela</th>
<th>HPV</th>
<th>Pneumocócica 23V</th>
<th>Dupla Adulto</th>
<th>DTPA</th>
<th>Influenza</th>
</tr>
</table>
  </div>
</div>

<div class="collapse" id="mostrar4">
  <div class="card card-body">
    <h3 class="centro">idoso</h3>
    <table>
<tr>
<th>Idade</th>
<th>BCG</th>
<th>hepatite B</th>
<th>Penta/DTP</th>
<th>VIP/VOP</th>
<th>Pneumocócica 10V (Conjugada)</th>
<th>Rotavírus Humano</th>
<th>Meningocócica C (Conjugada)</th>
<th>Febre Amarela</th>
<th>Hepatite A¹</th>
<th>Tríplice Viral</th>
<th>Tetra Viral</th>
<th>Varicela</th>
<th>HPV</th>
<th>Pneumocócica 23V</th>
<th>Dupla Adulto</th>
<th>DTPA</th>
<th>Influenza</th>
</tr>
</table>
  </div>
</div>


<fieldset>


</fieldset>

<button type="submit">ENVIAR</button>
</form>
</section>

<?php
include "rodape.php";
?>