<?php
   session_start();
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
      <title>Princesa Mononoke</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../assets/images/logo_hyades.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../assets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
      <script defer src="../assets/js/sumir.js"></script>
   </head>
   <body>
 <!-- header section start -->
     <div class="header_section" id="header">
      <nav class="navbar navbar-expand-xl navbar-light bg-light">
         <a class="logo" href="../index.php"><img src="../assets/images/HYADES.png" class="img-fluid logo-hyades"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                  <a class="nav-link" href="../index.php#o_que_e">Conhe??a o Hyades</a>
               </li>
            </ul>
            <!-- adicionar quando logado -->
            <?php
               if(isset($_SESSION['email'])):
            ?>
            
            <div class="search_icon" id="sumir1">
               <a href="../playlist.html">
                  <img src="../assets/images/playlist.png">
                  <span class="padding_left_15">Playlists</span>
               </a>
            </div>
              
            <?php

               endif;
            ?>
            
            <div class="search_icon" id="sumir2"><a href="../movies.php"><img src="../assets/images/navbar-explore.png"><span class="padding_left_15">Explorar</span></a></div>
            <?php
               if(isset($_SESSION['email'])){
            ?>
            
            <div class="search_icon" id="sumir3"><a href="../perfil.php"><img src="../assets/images/user-icon.png"><span class="padding_left_15">Meu Perfil</span></a></div>
              
            <?php

               }else{    
            
            ?>
            
            
         <div class="search_icon" id="sumir3"><a href="../Login.php"><img src="../assets/images/user-icon.png"><span class="padding_left_15">Login</span></a></div>
         <?php
               }
         ?>
            <!-- barra de pesquisa start-->
               <form action="../pesquisar.php" method="POST" name="form"  class="form">
                  <input type="search" class="search-text" name="pesq" placeholder="Pesquisar..." >
                  <a class="search-btn">
                     <img class = "loupe" src="../assets/images/search-icon.png" alt="??cone de pesquisar">
                  
               </form>
            <!-- barra de pesquisa end -->

               <span class="search_icon" id="pesqtxt" class="padding_left_15" >Pesquisar</span></a>
         </div>
      </nav>
   </div>
   <!-- header section end -->
      <!-- arrival section start -->
      <div class="arrival_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-7 col-md-4">
                  <iframe width="100%" height="480" src="https://www.youtube.com/embed/4OiMOHRDs14" title="Princess Mononoke - Official Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
               <div class="col-md-5 col-md-4">
                  <h1 class="arrival_text">Princesa Mononoke</h1>

                  <p class="long_text">25 de dezembro de 1999</p>
                  
                  <p class="long_text">Numa viagem para descobrir a cura contra a maldi????o de Tatarigami, Ashitaka, se encontra uma guerra entre os deuses da foresta e Tatara, uma col??nia mineira.</p>
                  <div>
                     <div class="w-auto px-2">
                        <div class="row">
                           <div class="col-md-6 col-sm-4">
                           <!-- #96861E -->
                           <h2><img src="../assets/images/estrela-icon.png" alt="??cone de estrela" width="20" height="20"> Avalia????o: 8.4 no IMDB</h2>
                           <h2><img src="../assets/images/genero-icon.png" alt="??cone de lista" width="20" height="20"> G??nero: Anima????o, A????o</h2>
                        </div>
                        <div class="col-md-6 col-sm-4">
                           <h2><img src="../assets/images/duracao-icon.png" alt="??cone de rel??gio" width="20" height="20"> Dura????o: 2h14m</h2>
                           <h2><img src="../assets/images/classificacao-icon.png" alt="??cone de classifica????o" width="24" height="24"> Classifica????o: 12</h2>
                           </div>
                        </div>
                           <div class="text-center align-items-center">
                                 <div class="row py-5">
                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M5 0v24l7-6 7 6v-24h-14zm1 1h12v20.827l-6-5.144-6 5.144v-20.827z"/></svg>
                                    <h3 class="font-weight-bold px-3">Salvar</h3>
                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 21.593c-5.63-5.539-11-10.297-11-14.402 0-3.791 3.068-5.191 5.281-5.191 1.312 0 4.151.501 5.719 4.457 1.59-3.968 4.464-4.447 5.726-4.447 2.54 0 5.274 1.621 5.274 5.181 0 4.069-5.136 8.625-11 14.402m5.726-20.583c-2.203 0-4.446 1.042-5.726 3.238-1.285-2.206-3.522-3.248-5.719-3.248-3.183 0-6.281 2.187-6.281 6.191 0 4.661 5.571 9.429 12 15.809 6.43-6.38 12-11.148 12-15.809 0-4.011-3.095-6.181-6.274-6.181"/></svg>
                                    <h3 class="font-weight-bold px-3">Favoritar</h3>
                                 </div>
                              </div>
                                
                           
                     </div>
               </div>
            </div>

               </div>
            </div>
         </div>
      </div>
      <!-- arrival section end -->
      <!-- footer  section start -->
      <footer class="footer arrival_section">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-12 text-center">
                  <h2 class="footer-heading">
                     <a href="#">HYADES</a>
                  </h2>
                  <p class="menu">
                     <a href="index.php">INICIO</a>
                     <a href="#">CONFIGURA????ES</a>
                     <a href="../lgpd.html">LGPD</a>
                  </p>
                  <div class="social-icons">
                     <a href="https://github.com/nathalia-nobrega/Hyades-Web" data-toggle="tooltip" data-placement="top" title="github" target="_blank">
                        <img src="../assets/images/github-social.png" alt="GitHub">
                     </a>

                     <a href="https://twitter.com/VHSBLOND" data-toggle="tooltip" data-placement="top" title="Twitter">
                       <img src="../assets/images/twitter-social.png" alt="twitter">
                     </a>

                     <a href="https://instagram.com/dunordgr" data-toggle="tooltip" data-placement="top" title="Instagram">
                        <img src="../assets/images/instagram-social.png" alt="instagram">
                     </a>
                  </div>
               </div>
            </div>

            <div class="row mt-5">
               <div class="col-md-12 text-center">
                  <p class="copyright">
                  Copyright ??2022 Todos os direitos reservados | Este footer foi feito com 
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
            <div class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Free html Templates</a></div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/popper.min.js"></script>
      <script src="../assets/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../assets/js/custom.js"></script>
      <!-- javascri/pt --> 
      <script src="../assets/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         $('#datepicker').datepicker({
             uiLibrary: 'bootstrap4'
         });
      </script>
   </body>
</html>