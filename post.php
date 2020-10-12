<?php

session_start();

if (!isset($_SESSION['adminlog'])) {
	header("Location: admin.php");
	session_destroy();
}

include "cabecalho_admin.php";

?>

<section id="post">

<form enctype="multipart/form-data" action="inserirpost.php" method="post">

<fieldset>

<h3>Preencha o post com informações que ira para a pagina Noticias.</h3>
<div>
<label for="" >
Texto:
</label>
<textarea type="text" name="texto" id="" cols="70" rows="5"></textarea>
</div>

<div>
<label for="" >
Foto:
</label>
<input type="file" name="imagem" id="" >
</div>

<div>
<label for="" >
Link:
</label>
<input type="text" name="link" id="" style="width: 25em" >
</div>

</fieldset>
<div id="p2">
<button type="submit">ENVIAR</button>
</div>
</form>
</section>

<?php
include "rodape.php";

?>