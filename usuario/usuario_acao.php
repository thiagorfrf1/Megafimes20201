<?php

if(isset($_REQUEST["acao"])){
	$acao = $_REQUEST["acao"];
}else{
	$acao = "";
}


if($acao == ""){
	include("usuario_lista.php");
}

if($acao == "inserir"){
	include("usuario_formulario.php");
}

if($acao == "alterar"){
	include("usuario_formulario.php");
}

if($acao == "excluir"){
	echo("Em desenvolvimento!");
}

?>