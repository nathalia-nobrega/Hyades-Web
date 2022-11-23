<?php

include("conexao.php");

 $pesquisa = mysqli_real_escape_string($conn,trim($_POST['pesq']));

strtoupper($pesquisa);

//pesquisa por palavra-chave

    $sql = "SELECT * FROM filme WHERE titulo LIKE '%$pesquisa%' OR pais_origem LIKE '%$pesquisa%' ";
    $result = $conn->query($sql) or die("Falha na execução do código sql: ");

    

?>

<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pesquisa</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="assets/images/logo_ma_branco_tablet.png" width ="10%" height= "5%" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
      
      <!--Script da pesquisa-->
      <script defer src="assets/js/sumir.js"></script>
      
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="logo" href="index.php">
               <img src="assets/images/HYADES.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="index.php#o_que_e">Conheça o Hyades</a>
                  </li>

               </ul>
               <!-- adicionar quando logado -->
               <?php
                  if(isset($_SESSION['email'])):
               ?>
               
               <div class="search_icon" id="sumir1"><a href="playlist.html"><img src="assets/images/playlist.png"><span class="padding_left_15">Playlists</span></a></div>
                 
               <?php

                  endif;
               ?>
               
               <div class="search_icon" id="sumir2"><a href="movies.html"><img src="assets/images/navbar-explore.png"><span class="padding_left_15">Explorar</span></a></div>
               <?php
                  if(isset($_SESSION['email'])){
               ?>
               
               <div class="search_icon" id="sumir3"><a href="perfil.php"><img src="assets/images/user-icon.png"><span class="padding_left_15">Meu Perfil</span></a></div>
                 
               <?php

                  }else{
                      
                  
               ?>
               
               
            <div class="search_icon" id="sumir3"><a href="Login.php"><img src="assets/images/user-icon.png"><span class="padding_left_15">Login</span></a></div>
            <?php
                  }
            ?>
               <!-- barra de pesquisa start-->
                  <form action="pesquisar.php" method="POST" name="form"  class="form">
                     <input type="search" class="search-text" name="pesq" placeholder="Pesquisar..." >
                     <a class="search-btn">
                        <img class = "loupe" src="assets/images/search-icon.png" alt="">
                     
                  </form>
               <!-- barra de pesquisa end -->

                  <span class="search_icon" id="pesqtxt" class="padding_left_15" >Pesquisar</span></a>
            </div>
         </nav>
      </div>
      <!-- header section end -->
      <!-- movies section start -->
<div class="movies_section layout_padding">
            <div class="container-fluid">
               <!-- start código php -->
               <?php

                  if ($result->num_rows == 0) {
                        
                     echo "<h1>Nenhum resultado encotrado</h1>";
               
                  }else{
                     // output data of each row
                     echo "<h1 class='text-white'>$result->num_rows resultado(s) para a sua pesquisa: $pesquisa</h1>";
                     
                     
                     
                ?>

                <!-- end código php -->
               <div class="movies_section_2 layout_padding">
                  <div class="rol justify-content-center">
                     <div class="col-lg-6 text-center">
                        <div class="movies_main">
                           <div class="iamge_movies_main">
                               <?php
                               while($dados = $result->fetch_assoc()) {
                                   ?>
                               
                              <div class="iamge_movies">
                                    <a href="<?php echo$dados['link_filme']?>" class="redirecionar-filme">
                                       <img src="<?php echo$dados['imagem']?>" class="image-fluid" style="width:55%">
                                       <h1 class="code_text"><?php echo$dados['titulo']?></h1>
                                       <p class="there_text"><?php echo$dados['pais_origem']?></p> 
                                    </a>
                              </div>
                              <?php
                   
               }
               ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            <?php
            }
            ?>
            </div>
         </div>
      
      <!-- movies section end -->
      <!-- footer  section start -->
      <footer class="footer arrival_section">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-12 text-center">
                  <h2 class="footer-heading">
                     <a href="#">HYADES</a>
                  </h2>
                  <p class="menu">
                     <a href="#">INICIO</a>
                     <a href="#">CONFIGURAÇÕES</a>
                     <a href="#">LGPD</a>
                  </p>
                  <div class="social-icons">
                        <a href="https://github.com/nathalia-nobrega/Hyades-Web" data-toggle="tooltip" data-placement="top" title="github" target="_blank">
                           <img src="assets/images/github-social.png" alt="GitHub">
                        </a>

                        <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter">
                          <img src="assets/images/twitter-social.png" alt="twitter">
                        </a>

                        <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram">
                           <img src="assets/images/instagram-social.png" alt="instagram">
                        </a>
                     </div>
               </div>
            </div>

            <div class="row mt-5">
               <div class="col-md-12 text-center">
                  <p class="copyright">
                  Copyright ©2022 Todos os direitos reservados | Este footer foi feito com 
                     by &hearts; <a href="https://colorlib.com/" target="_blank">Colorlib.com</a>
                  </p>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer  section end -->
      
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="copyright_text">Copyright 2022 Todos os direitos reservador por Hyades <a href="https://html.design">Free html Templates</a></div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="assets/js/custom.js"></script>
      <!-- javascript --> 
      <script src="assets/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         $('#datepicker').datepicker({
             uiLibrary: 'bootstrap4'
         });
      </script>
   </body>
</html>
