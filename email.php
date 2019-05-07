<?php
	include("cabecalho.php");
?>

<div class="container" style="margin-top:30px">
  <div class="row">
  <div class="col-sm-7">
<?php
$nome=filter_input(INPUT_POST, "nome");
$email=filter_input(INPUT_POST, "email");
$descricao=filter_input(INPUT_POST,"descrição");
$fone=filter_input(INPUT_POST,"fone");
echo "Nome: " . $nome;
echo "<br>E-mail: " . $nome;
echo "<br>Descrição: " . $nome;
echo "<br>Fone: " . $nome;
?>
</div>
</div>
</div>
<?php
	include("rodape.php");	
?>