<html>
<head>
	<title>Trabalhando com sessão</title>
	<style type="text/css">
	img
	{
		width: 100px; height: 150px;
	}
	</style>
</head>
<body>
	<?php session_start(); 
	//permite somente o acesso da pagina caso houver logado
	if(!isset($_SESSION['user'])==true)
	{
		unset($_SESSION['user']);
		header("Location: index.php");
	}

	?>
	<h1>Perfil</h1>
	<img src="perfil.jpg">
	<p>Usuario: <?php echo $_SESSION['user']; ?></p>

	<a href="index.php">Home</a> |
	<a href="logout.php">Sair</a>
</body>
</html>