<?php
    include_once "topo.html";

    //include_once 'validador.php';

    include_once('../conexao.php');

    $sql = "SELECT * FROM user ORDER BY nome";
    
    $query = mysqli_query($conexao, $sql);

?>

<div class="container">    
<div class="row">

    <div class="card col">
        <div class="card-header bg-secondary text-white">
        Upload
        </div>
        <div class="card-body">

            <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Perfil</th>
                <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    While($perfil = mysqli_fetch_array($query)){
                        $id = $perfil['id'];
             
                        echo "<td>". $perfil['nome'] ."</td>";
                        echo "<td>". $perfil['email'] ."</td>";
                        echo "<td>". $perfil['perfil'] ."</td>";                        
                        echo "<td>";
                        ?>
                        <a class="btn btn-warning" href="edita_perfil.php?id=<?php echo $id; ?>">Editar</a>
                        <a class="btn btn-danger" href="del_perfil.php?id=<?php echo $id; ?>" onclick="return confirm('Tem certeza que deseja deletar esse Usuário?');">Deletar</a></td></tr>
                        <?php
                    }
                ?>
            </tbody>
            </table>
            <a class='btn btn-success' href='administrador.php'>Cadastrar Novo Usuário</a>
        </div>
        <!-- <div class="col-2">
            <a href="home.php"><button class="btn btn-lg btn-secondary btn-block">Voltar</button></a>
        </div> -->
    </div>

</div>
</div>