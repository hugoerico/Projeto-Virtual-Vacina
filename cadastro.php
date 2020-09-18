<?php
include "cabecalho.php";
?>

<section id="cadastro">

<form action="" method="post">

<div class="col-md-12">

<h3>Preencha com suas informações abaixo.</h3>

<label for="" class="col-md-7">
Nome Completo:
<input type="text" name="nome" id="" >
</label>

<label for="" class="col-md-4">
Foto:
<input type="file" name="foto" id="" >
</label>

<label for=""class="col-md-12">
CPF:
<input type="text" name="cpf" id="">
</label>

<label for=""class="col-md-12">
SUS:
<input type="text" name="sus" id="">
</label>

<label for=""class="col-md-12">
Senha:
<input type="text" name="senha" id="">
</label>

<label for="" class="col-md-12">
Confirmar Senha:
<input type="text" name="Csenha" id="">
</label>

</div>

<div class="col-md-12">

<h3>Endereço</h3>


<label class="col-md-12">
Cep:
<input  type="text" name="cep" id="" >
</label>

<label class="col-md-3">
Rua:
<input type="text" name="rua"  id="" >
</label>

<label class="col-md-2">
Rua:
<input type="text" name="rua"  id="" >
</label>


<label class="col-md-5">
Complemento:
<input  type="text" name="complemento" id="" >
</label>

<label class="col-md-4">
Bairro:
<input type="text" name="bairro" id="">
</label>

<label class="col-md-2">
Estado:
<input  type="text" name="estado" id="">
</label>

<label class="col-md-4">
Cidade:
<input type="text"name="cidade"  id="">
</label>

</div>



</form>
</section>

<?php
include "rodape.php";
?>