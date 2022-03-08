<?php
//inicializa a sessão
session_start();



//receber os dados do form
$nome = $_POST ['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//consultar banco de dados

//inserindo o arquivo de configuração da conexão
include_once('conexao.php');
//string de seleção
//todos os campos
//$sql = "SELECT * FROM cadastro";
//select com where
$sql = "INSERT INTO user (nome,email,senha);"

// executa a consulta com base na string
//$query = mysqli_query($conexao, $sql);
// verifica se a consulta
//$user = mysqli_fetch_array($query, MYSQLI_ASSOC);

    if ($cadastro > 0) {

      

        header("location:registrar.php");

    } else {
echo "erro";
     // header("location:index.php");
        
   

mysqli_close($conexao);

//include_once "comum/rodape.html";
?>