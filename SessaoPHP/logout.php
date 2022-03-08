<html>
<head>
	<title>Trabalhando com sessão</title>
	
</head>
<body>
	<?php
		session_start();
		if(session_destroy())
		{
			header("Location: index.php");
		}
	?>
</body>
</html>