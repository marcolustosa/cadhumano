<?php
//conexão com banco
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "crud";



$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()):
	echo "Erro na conexão: ".mysqli_connect_error();
endif;





