<?php
include "cabecalho.php";
?>

<section id="cadastro">

<form action="" method="post">

<fieldset>

<h3>Preencha com suas informações abaixo.</h3>
<div>
<label for="" >
Nome Completo:
</label>
<input type="text" name="nome" id="" style="width: 25em" >

<label for="" >
Foto:
</label>
<input type="file" name="foto" id="" >
</div>

<div>
<label for="">
CPF:
</label>
<input type="text" name="cpf" id="">
</div>

<div>
<label for="">
SUS:
</label>
<input type="text" name="sus" id="">
</div>

<div>
<label for="">
Senha:
</label>
<input type="text" name="senha" id="">

<label for="" >
Confirmar Senha:
</label>
<input type="text" name="Csenha" id="">
</div>

</fieldset>

<fieldset>

<h3>Endereço</h3>

<div>
<label >
Cep:
</label>
<input  type="text" name="cep" id="" >
</div>

<div>
<label >
Rua:
</label>
<input type="text" name="rua"  id="" style="width: 20em">

<label >
Nº:
</label>
<input type="text" name="rua"  id="" style="width: 5em" >

<label >
Complemento:
</label>
<input  type="text" name="complemento" id="" >
</div>

<div>
<label>
Bairro:
</label>
<input type="text" name="bairro" id="">

<label >
Estado:
</label>
<input  type="text" name="estado" id="" style="width: 3em">

<label >
Cidade:
</label>
<input type="text"name="cidade"  id="">
</div>

</fieldset>

</form>
</section>

<?php
include "rodape.php";
?>