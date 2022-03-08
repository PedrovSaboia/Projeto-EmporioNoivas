<?php
 include "conexao.php";
//iniciando uma sessao
 session_start();
//permite somente o acesso da pagina caso houver logado
 if(!isset($_SESSION['user'])==true)
	{
		unset($_SESSION['user']);
		header("Location: index.php");
	}

//recuperando dados
$login=$_POST["txtLogin"];
$senha=$_POST["txtSenha"];

$sql="SELECT * FROM tbUsuario where login='$login' AND senha='$senha'";
$rs=mysql_query($sql, $conexao);

if(mysql_num_rows($rs)<=0)
{
	echo "Usuário não cadastro";
	echo "<br><a href='index.php'>Home</a>";
	unset($_SESSION['user']); //sessao vazia
}
else
{
	$_SESSION['user']=$login; //cria uma sessao
	header("Location: perfil.php");
}

mysql_free_result($rs);
mysql_close($conexao);
?>