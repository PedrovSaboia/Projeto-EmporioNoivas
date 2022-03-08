<?php
	$host="localhost";
	$user="root";
	$pass="usbw";
	$banco="BDAula";

	$conexao=mysql_connect($host, $user, $pass);
	$banco=mysql_select_db($banco, $conexao);

/*

	if($conexao)
	{
		echo ("Conexao realizada com sucesso");
	}
	else
	{
		die ("Falha na conexao:->" .mysql_error());
	}

*/
?>