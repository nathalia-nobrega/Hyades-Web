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
      <title>Hyades - filmes</title>
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
                     <a class="nav-link" href="#o_que_e">Conhe??a o Hyades</a>
                  </li>
                  <li class="nav-item">
                    <a href="#sugestoes" class="nav-link">Sugest??es</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#team_section">Quem Somos</a>
                  </li>
               </ul>
               <!-- adicionar quando logado -->
               <?php
                  if(isset($_SESSION['email'])):
               ?>
               
               <div class="search_icon" id="sumir1">
                  <a href="playlist.html">
                     <img src="assets/images/playlist.png">
                     <span class="padding_left_15">Playlists</span>
                  </a>
               </div>
                 
               <?php

                  endif;
               ?>
               
               <div class="search_icon" id="sumir2"><a href="movies.php"><img src="assets/images/navbar-explore.png"><span class="padding_left_15">Explorar</span></a></div>
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
         <div class="container">
            <div class="movies_menu">
               <ul class="border-bottom">
                  <li><a href="#gen-1">Racismo e Direitos Humanos</a></li>
                  <li><a href="#gen-2">Bullying e Discrimina????o</a></li>
                  <li><a href="#gen-3">Meio-ambiente</a></li>
                  <li><a href="#gen-4">Direitos das Mulheres</a></li>
               </ul>
            </div>
            <div class="movies_section_2 layout_padding">
               <h2 class="letest_text" id="gen-1">Filmes que abordam Racismo e Direitos Humanos</h2>
               <h3 class="gen-description">Acreditamos sobretudo que ?? papel das institui????es de educa????o promover o debate sobre racismo e direitos humanos muito por conta da diversidade cultural e miscigena????o presentes no Brasil.</h3>
               <div class="rol justify-content-center">
                  <div class="col-md-12 text-center">
                     <div class="movies_main">
                        <div class="iamge_movies_main">
                           <div class="iamge_movies">
                              <div class="image_3">
                                 <a href="filmes/marighella.php" class="redirecionar-filme">
                               <img src="assets/images/filmes-poster/racismo/marighella.jpg" alt="Filme, Marighella, 2021" class="image" style="width:100%">
                              <div class="middle">
                           </div>
                        </div>
                           <h1 class="code_text">Marighella</h1>
                           <p class="there_text">2021, Brasil</p>
                        </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/selma.php" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/racismo/selma.jpg" alt="Filme, Selma: Uma Luta Pela Igualdade, 2014" class="image" style="width:100%">
                        </div>
                           <h1 class="code_text">Selma: Uma Luta Pela Igualdade</h1>
                           <p class="there_text">2014, Reino Unido</p>
                         </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/menino-23.php" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/racismo/menino-23.jpg" alt="Filme, Menino 23 ??? Inf??ncias Perdidas no Brasil, 2016" class="image" style="width:100%">
                        </div>
                           <h1 class="code_text">Menino 23 ??? Inf??ncias Perdidas no Brasil</h1>
                           <p class="there_text">2016, Brasil</p>
                        </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/13-emenda.php" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/racismo/13-emenda.jpg" alt="Filme, A 13?? Emenda, 2016" class="image" style="width:100%">
                        </div>
                           <h1 class="code_text">A 13?? Emenda </h1>
                           <p class="there_text">2016, Estados Unidos</p>
                        </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/branco-sai.php" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/racismo/branco-sai-preto-fica.jpg" alt="Filme, Branco Sai Preto Fica, 2014" class="image" style="width:100%">
                        </div>
                           <h1 class="code_text">Branco Sai Preto Fica</h1>
                           <p class="there_text">2014, Brasil</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="movies_section_2 layout_padding" id="gen-2">
         <h2 class="letest_text">Filmes que abordam Bullying e Discrimina????o</h2>
         <h3 class="gen-description">A fic????o pode ser uma grande aliada na promo????o do debate sobre o bullying porque, por meio dos mecanismos da s??tima arte, ela pode criar empatia pelo pr??ximo e fisgar o p??blico em uma narrativa que procura conscientiz??-lo</h3>
         <div class="row justify-content-center">
            <div class="col-md-12 text-center">
             <div class="movies_main">
               <div class="iamge_movies_main">
                  <div class="iamge_movies">
                   <div class="image_3">
                     <a href="filmes/extraordinario.php" class="redirecionar-filme">
                     <img src="assets/images/filmes-poster/bullying/extraordinario.jpg" alt="Filme, Extra??rdinario, 2017"  class="image" alt="Wall-E,2008" style="width:100%">
                  </div>
                     <h1 class="code_text">Extra??rdinario</h1>
                     <p class="there_text">2017, Estados Unidos</p>
                  </a>
               </div>
               <div class="iamge_movies">
                  <div class="image_3">
                     <a href="filmes/vantagens-invisivel.php" class="redirecionar-filme">
                        <img src="assets/images/filmes-poster/bullying/vantagens-de-ser-invisivel.jpg" alt="Filme, As Vantagens de Ser Invis??vel,2012" class="image" style="width:100%">
                        <h1 class="code_text">As Vantagens de Ser Invis??vel</h1>
                        <p class="there_text">2012, Estados Unidos </p>
                  </a>
               </div>
            </div>
               <div class="iamge_movies">
                  <div class="image_3">
                     <a href="filmes/sete-minutos.php" class="redirecionar-filme">
                     <img src="assets/images/filmes-poster/bullying/sete-minutos-depois-da-meia-noite.jpg"alt="Filme, Sete Minutos Depois da Meia-Noite, 2016"  class="image" style="width:100%">
                  </div>
                  
                     <h1 class="code_text">Sete Minutos Depois da Meia-Noite</h1>
                     <p class="there_text">2016, Estados Unidos</p>
                  </a>
               </div>
               <div class="iamge_movies">
                  <a href="filmes/no-ritmo-coracao.php" class="redirecionar-filme">
                  <div class="image_3">
                     <img src="assets/images/filmes-poster/bullying/no-ritmo-do-coracao.jpg" alt="Filme, No Ritmo do Cora????o, 2021" class="image" style="width:100%">
                  </div>

                     <h1 class="code_text">No Ritmo do Cora????o</h1>
                     <p class="there_text">2021, Estados Unidos</p>
                  </a>
               </div>
               <div class="iamge_movies">
                  <div class="image_3">
                     <a href="filmes/lily-chou.php" class="redirecionar-filme">
                     <img src="assets/images/filmes-poster/bullying/tudo-sobre-lily.jpg" alt="Filme, Tudo sobre Lily Chou-Chou,2001" class="image" style="width:100%">
                  </div>
                     <h1 class="code_text">Tudo sobre Lily Chou-Chou</h1>
                     <p class="there_text">2001, Jap??o</p>
                  </a>
            </div>
         </div>
      </div>
   </div>
</div>
</div>

            <div class="movies_section_2 layout_padding" id="gen-3">
               <div class="container">
                  <h2 class="letest_text">Meio-ambiente</h2>
                  <h3 class="gen-description">Promover o debate sobre o meio-ambiente e enriquecer a educa????o ambiental ?? essencial para desenvolver uma atitude mais cr??tica por parte da comunidade escolar no quesito da preserva????o e para cultivar pr??ticas sustent??veis</h3>
                  <div class="row justify-content-center">
                     <div class="col-lg-12 text-center">
                        <div class="movies_main">
                         <div class="iamge_movies_main">
                           <div class="iamge_movies">
                              <div class="image_3">
                                 <a href="filmes/walle.php" class="redirecionar-filme">
                                 <img src="assets/images/filmes-poster/meio-ambiente/walle.jpg" alt="Filme, Wall-E,2008" class="image" style="width:100%">
                               </div>
                        <h1 class="code_text">Wall-E</h1>
                        <p class="there_text">2008, Estados Unidos</p>
                     </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/mononoke.php" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/meio-ambiente/princesa-mononoke.jpg" alt="Filme, Princesa Mononoke,1997" class="image" style="width:100%">
                        </div>
                        <h1 class="code_text">Princesa Mononoke</h1>
                        <p class="there_text">1997, Jap??o</p>
                     </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/home.php" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/meio-ambiente/home.jpg" alt="Filme, Home - Nosso Planeta, Nossa Casa,2009" class="image" style="width:100%">
                        </div>
                        <h1 class="code_text">Home - Nosso Planeta, Nossa Casa</h1>
                        <p class="there_text">2009, Fran??a</p>
                     </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/perseguindo-o-gelo.php" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/meio-ambiente/perseguindo-gelo.jpg" alt="Filme, Perseguindo o Gelo,2012" class="image" style="width:100%">
                        </div>
                        <h1 class="code_text">Perseguindo o Gelo</h1>
                        <p class="there_text">2012, Estados Unidos</p>
                     </a>
                        <!--A classe star_icon existe-->
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/Koyaanisqatsi.php" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/meio-ambiente/koyaanisqatsi.jpg" alt="Filme, Koyaanisqatsi,1992" class="image" style="width:100%">
                        </div>
                        <h1 class="code_text">Koyaanisqatsi</h1>
                        <p class="there_text">1992, Estados Unidos</p>
                     </a>
                        <!--A classe star_icon existe-->
                   </div>
               </div>
             </div>
          </div>
        </div>
      </div>
         </div>
            <div class="movies_section_2 layout_padding" id="gen-4">
               <h2 class="letest_text">Direitos das Mulheres</h2>
               <h3 class="gen-description">O movimento feminista ganhou muita for??a nas ??ltimas d??cadas. Mas apesar dos avan??os, sempre ser?? importante entender e refletir sobre a luta das mulheres.</h3>
               <div class="row justify-content-center">
               <div class="col-md-12 text-center">
                  <div class="movies_main">
                     <div class="iamge_movies_main">
                        <div class="iamge_movies">
                           <div class="image_3">
                              <a href="filmes/persepolis.php" class="redirecionar-filme">
                              <img src="assets/images/filmes-poster/mulheres/persepolis.jpg" alt="Filme, Pers??polis,2007" class="image img-fluid" style="width:100%">
                        </div>
                        <h1 class="code_text">Pers??polis</h1>
                        <p class="there_text">2007, Fran??a</p>
                     </a>
                        <!--A classe star_icon existe-->
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/preciosa.php" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/mulheres/preciosa.jpg" alt="Filme, Preciosa,2009" class="image" style="width:100%">
                        </div>
                        <h1 class="code_text">Preciosa</h1>
                        <p class="there_text">2009, Estados Unidos</p>
                     </a>
                        <!--A classe star_icon existe-->
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/adoraveis-mulheres.php" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/mulheres/adoraveis-mulheres.jpg" alt="Filme, Ador??veis Mulheres,2019" class="image" style="width:100%">
                        </div>
                        <h1 class="code_text">Ador??veis Mulheres</h1>
                        <p class="there_text">2019, Estados Unidos</p>
                     </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/nunca-raramente.php" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/mulheres/nunca-raramente.jpg" alt="Filme, Nunca Raramente ??s vezes Sempre, 2020" class="image" style="width:100%">
                        </div>
                        <h1 class="code_text">Nunca Raramente ??s vezes Sempre</h1>
                        <p class="there_text">2020, Estados Unidos</p>
                     </a>
                        <!--A classe star_icon existe-->
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/que-horas-ela-volta.php" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/mulheres/que-horas-ela-volta.jpg" alt="Filme, Que horas ela volta?, 2015" class="image" style="width:100%">
                        </div>
                        <h1 class="code_text">Que horas ela volta?</h1>
                        <p class="there_text">2015, Brasil</p>
                     </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
                     <a href="#">CONFIGURA????ES</a>
                     <a href="lgpd.html">LGPD</a>
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
