<?php 


session_start();

if (isset($_SESSION['usuariolog'])) {
	$_SESSION['a'];
	
}

include "cabecalho.php"; 
?>

<section id="sobre">
<h2>Sobre a Vacina Virtual</h2>
<div id="tudo">
<div>
<img src="imagens/vacinao.png" alt="" >
</div>
<div>

<p>
Lorem ipsum dolor sit, amet consectetur adipisicing elit. A facere magnam, autem nihil doloribus officiis tenetur esse! Minima optio, eveniet nesciunt incidunt neque possimus quasi unde ut aut dolorem culpa?
Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti voluptatibus culpa blanditiis quasi voluptas veniam recusandae dolores unde earum mollitia, possimus perferendis accusamus doloremque nam quo eaque omnis ea quam.
</p>
<p>
Lorem ipsum dolor sit, amet consectetur adipisicing elit. A facere magnam, autem nihil doloribus officiis tenetur esse! Minima optio, eveniet nesciunt incidunt neque possimus quasi unde ut aut dolorem culpa?
Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti voluptatibus culpa blanditiis quasi voluptas veniam recusandae dolores unde earum mollitia, possimus perferendis accusamus doloremque nam quo eaque omnis ea quam.
</p>
</div>
</div>
</section>

<?php 
include "rodape.php"; 
?>