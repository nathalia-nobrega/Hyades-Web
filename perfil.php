<?php
    session_start();
    include("conexao.php"); 
    
     $email  = $_SESSION['email'];
     $sql_code = "SELECT nome,nascimento,topicos FROM usuario WHERE email = '{$email}' ";
     $sql_query = mysqli_query($conn,$sql_code) or die ("Falha na execução do código sql: ".$mysqli->error);
    
    $dados  = $sql_query->fetch_assoc();
    $nome = $dados['nome'];
    $nascimento = $dados['nascimento'];
    $topicos = $dados['topicos'];

    //formatando a forma com que os tópicos vão aparecer no perfil
    if ($topicos == "valMA") {
       $topicos = "Meio Ambiente";
    } elseif ($topicos == "valRAC") {
      $topicos = "Racismo e Direitos Humanos";
    } elseif ($topicos == "valBuLL") {
      $topicos = "Bullying e Discriminação";
    } else {
      $topicos = "Direitos das Mulheres";
    }
    
    
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/perfil.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="assets/images/logo_ma_branco_tablet.png" width ="10%" height= "5%" />

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script defer src="assets/js/sumir.js"></script>
</head>
<body>
    <!-- header section start -->
    <div class="header_section" id="header">
        <nav class="navbar navbar-expand-xl navbar-light bg-light">
           <a class="logo" href="index.php"><img src="assets/images/HYADES.png" class="img-fluid logo-hyades"></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="index.php#o_que_e">Conheça o Hyades</a>
                  </li>
               
              </ul>
              <div class="search_icon" id="sumir1"><a href="playlist.html"><img src="assets/images/playlist.png"><span class="padding_left_15">Playlists</span></a></div>
              <div class="search_icon" id="sumir2"><a href="movies.php"><img src="assets/images/navbar-explore.png"><span class="padding_left_15">Explorar</span></a></div>
              

              <!-- barra de pesquisa start-->
                 <form action="pesquisar.php" 
                 method="POST" name="form"  class="form">
                    <input type="search" class="search-text" name="pesq" placeholder="Pesquisar..." >
                    <a class="search-btn">
                       <img class = "loupe" src="assets/images/search-icon.png" alt="">
                    </a>
                 </form>
              <!-- barra de pesquisa end -->

                 <span class="search_icon" id="pesqtxt" class="padding_left_15" >Pesquisar</span>
           </div>
        </nav>
     </div>
     <!-- header section end -->

    <!-- perfil section start -->
    <section class="vh-100">
        <div class="container py-5 h-100">
        <h2 class="text-center text-white">Minhas informações</h2>
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-4">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body text-center">
                  <div class="mt-3 mb-4">
                  <h3 class="mb-2 heading">Meu nome</h3>
                  <p><?php echo $nome;?></p>
                  <h3 class="mb-2 heading">Meu e-mail</h3> 
                  <p><?php echo $_SESSION['email'];?></p>
                  <h3 class="mb-2 heading">Minha data de nascimento</h3> 
                  <p><?php echo date("d/m/Y",strtotime($nascimento));?></p>
                  <br>
                  <h3 class="mb-2 heading">Meus tópicos de preferencia</h3>
                  <!-- os tópicos vão aparecer aqui, abaixo desse heading -->
                  <p><?php echo $topicos;?></p>
                  <br>
                  <a href="updSenha.html" id="logout">Redefinir minha senha</a>
                  <br>
                  <a href="logout.php" id="logout">Sair</a>
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </section>
    <!-- perfil section end -->
     
</body>
</html>