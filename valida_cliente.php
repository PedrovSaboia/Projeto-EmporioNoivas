<?php

include_once 'conexao.php';



$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$sql =  "INSERT INTO user (nome,email, senha) VALUES ('$nome', '$email', '$senha')";

// executa a consulta com base na string
$query = mysqli_query($conexao, $sql);
// verifica se a consulta
if ($query) {
    header('location:registrar.php');
} else {
    echo "erro";
}

mysqli_close($conexao);

?>