<?php
    //include_once 'validador.php';

    include_once('conexao.php');

    $sql = "SELECT id FROM user ORDER BY id DESC";
    $query = mysqli_query($conexao, $sql);
    
    $res = mysqli_num_rows($query);

    if($res > 0){
        $result = mysqli_fetch_array($query,MYSQLI_NUM);
        $id = $result[0] + 1;
    } else {
        $id = 1;
    }

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
   

  

    $sql = "INSERT INTO user (nome, email, senha) VALUES ('$nome', '
    $email', '$senha')";
    
    $query = mysqli_query($conexao, $sql);

    header("location:usuarios.php");

?>
