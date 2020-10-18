<?php
//sessão
session_start();
//conexão

require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST ['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST ['sobrenome']);
	$documento = mysqli_escape_string($connect, $_POST ['documento']);
	$nascimento = mysqli_escape_string($connect, $_POST ['nascimento']);
	$endereco = mysqli_escape_string($connect, $_POST ['endereco']);
	$familiar = mysqli_escape_string($connect, $_POST ['familiar']);
	$emergencia = mysqli_escape_string($connect, $_POST ['emergencia']);
	$drogas = mysqli_escape_string($connect, $_POST ['drogas']);
	$enfermidade = mysqli_escape_string($connect, $_POST ['enfermidade']);

$sql = "INSERT INTO clientes (nome, sobrenome, documento, nascimento, endereco, familiar, emergencia, drogas, enfermidade) VALUES ('$nome','$sobrenome','$documento', '$nascimento','$endereco','$familiar','$emergencia', '$drogas','$enfermidade')";
if(mysqli_query($connect, $sql)):
	$_SESSION ['mensagem'] = "Cadastrado com sucesso";
	header ('Location:../index.php');
else:
	$_SESSION ['mensagem'] = "Erro ao cadastrar";
	header ('Location:../index.php');
	
	endif;
endif;

