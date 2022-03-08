 <?php


require_once 'validador.php';
?>



<!DOCTYPE html>

<html lang="pt=br">
  <head>
    <title>Emporio Noivas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Emporio Noivas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> home
        </button>

         <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="sobrenos.php" class="nav-link">Sobre Nós</a></li>
           
        
            
            <li class="nav-item"><a href="login.php" class="nav-link">login/Cadastro</a></li>
            <li class="nav-item"><a href="contato.php" class="nav-link">Contado</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html"> login <i class="ion-ios-arrow-forward"></i></a></span> <span> Pagina do Cliente<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Pagina do Administrador</h1>
          </div>
        </div>
      </div>


 <section class="ftco-section goto-here">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Administrador</span>
            <h2 class="mb-2"> tabela de Clientes</h2>
          </div>
        </div>
        
          </section>
        
         



<div class="container">    
  <div class="row">

    <div class="card col-8">
      <div class="card-header bg-secondary text-white">
        Novo Usuário
      </div>
      <div class="card-body">
        <form action="ins_cliente.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nome</label>
            <input name="nome" type="text" class="form-control" placeholder="Nome" required>
          </div>

          <div class="form-group">
            <label>E-mail</label>
            <input name="email" type="email" class="form-control" placeholder="E-mail" required>
          </div>

          <div class="form-group">
            <label>Senha</label>
            <input name="senha" type="password" class="form-control" placeholder="******" required>
          </div>

          <div class="form-group">
            <label>Perfil</label>
            <select name="perfil" class="form-control">
             
              <option value="2">Usuário</option>
            </select>
          </div>

         

          <div class="row mt-5">
            <div class="col-6">
              <a href="usuarios.php"><button class="btn btn-lg btn-warning btn-block">Voltar</button></a>
            </div>

            <div class="col-6">
            <button class="btn btn-lg btn-info btn-block" type="submit">Salvar</button>


            </div>
          </div>

        </form>
        <br>
        <br>
         <a href="editar_cli.php"  class="btn btn-lg btn-info btn-block" role="button" aria-pressed="true">Editar Cliente</a>
         <br>
         <br>
      </div>
    </div>
  </div>
</div>
 
      </div>



          </div>
        </div>
      </div>
    </footer>
           <section class="ftco-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">...</span>
          
  
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
| Site produzido por: <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="Pedro & Cleo" target="_blank">Pedro V. & Cleo</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>