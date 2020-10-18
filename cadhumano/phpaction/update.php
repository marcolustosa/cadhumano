<?php
//sessão
session_start();
//conexão

require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST ['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST ['sobrenome']);
	$documento = mysqli_escape_string($connect, $_POST ['documento']);
	$nascimento = mysqli_escape_string($connect, $_POST ['nascimento']);
	$endereco = mysqli_escape_string($connect, $_POST ['endereco']);
	$familiar = mysqli_escape_string($connect, $_POST ['familiar']);
	$emergencia = mysqli_escape_string($connect, $_POST ['emergencia']);
	$drogas = mysqli_escape_string($connect, $_POST ['drogas']);
	$enfermidade = mysqli_escape_string($connect, $_POST ['enfermidade']);
	$id = mysqli_escape_string($connect, $_POST ['id']);

$sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', documento = '$documento', nascimento = '$nascimento', endereco = '$endereco', familiar = '$familiar', emergencia = '$emergencia', drogas = '$drogas', enfermidade = '$enfermidade' WHERE id = '$id'";

if(mysqli_query($connect, $sql)):
	$_SESSION ['mensagem'] = "Atualizado com sucesso";
	header ('Location:../index.php');
else:
	$_SESSION ['mensagem'] = "Erro ao atualizar";
	header ('Location:../index.php');
	
	endif;
endif;
