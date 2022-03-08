<?php

include_once 'topo.html';
//require_once 'validador.php';
include_once '../conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM user WHERE id = $id ";

$query = mysqli_query($conexao, $sql);

if ($query) {
    $user = mysqli_fetch_array($query);
?>

<div class="container">    
  <div class="row">

    <div class="card col-8">
      <div class="card-header bg-secondary text-white">
        Editar Usurário
      </div>
      <div class="card-body">
        <form action="atualiza_perfil.php" method="post"  enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="form-group">
            <label>Nome</label>
            <input name="nome" type="text" class="form-control" placeholder="Nome" value="<?php echo $user['nome']; ?>" required>
          </div>

          <div class="form-group">
            <label>E-mail</label>
            <input name="email" type="email" class="form-control" placeholder="E-mail" value="<?php echo $user['email']; ?>" required>
          </div>

          <div class="form-group">
            <label>Senha</label>
            <input name="senha" type="password" class="form-control" placeholder="******"  value="<?php echo $user['senha']; ?>" required>
          </div>

          <div class="form-group">
            <label>Perfil</label>
            <select name="perfil" class="form-control">
                <option value="1" <?php if($user['perfil'] == 1) echo 'selected="selected"'; ?>>Administrador</option>
                <option value="2" <?php if($user['perfil'] == 2) echo 'selected="selected"'; ?>>Usuário</option>
            </select>
          </div>

          <div class="form-group">
            <label>Foto</label><br>
                <img src="img/<?php echo $user['imagem']; ?>" width="30">
                <input type="hidden" name="imgId" value="<?php echo $user['imagem']; ?>">
            <input type="file" name="imagem" class="form-control-file">
          </div>

          <div class="row mt-5">
            <div class="col-6">
              <a href="usuarios.php"><button class="btn btn-lg btn-secondary btn-block">Voltar</button></a>
            </div>

            <div class="col-6">
            <button class="btn btn-lg btn-info btn-block" type="submit">Atualizar</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>