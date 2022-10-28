<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- mobile metas -->
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Hyades</title>
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
                     <a class="nav-link" href="#o_que_e">Conheça o Hyades</a>
                  </li>
                  <li class="nav-item">
                    <a href="#sugestoes" class="nav-link">Sugestões</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#team_section">Quem Somos</a>
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
               <div class="search_icon" id="sumir3"><a href="Login.php"><img src="assets/images/user-icon.png"><span class="padding_left_15">Login</span></a></div>

               <!-- barra de pesquisa start-->
                  <form action="" name="form"  class="form">
                     <input type="search" class="search-text" name="q" placeholder="Search..." >
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
      
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="banner_taital">Utilizando o cinema como ferramenta de aprendizado.</div>
                  <p class="banner_text">Aplicando filmes no contexto educativo de forma fácil e divertida.</p>
                  <div class="see_bt">
                     <a href="cadastro.html">Comece agora!</a>
                  </div>
               </div>
            </div>
            <figcaption id="moonlight-banner-caption" class="text-white-50 text-md-center replace-text">Moonlight: Sob a Luz do Luar (2016)
            </figcaption>
         </div>
      </div>
      <!-- banner section end -->

      <!-- o que é hyades section start -->
      <section class="arrival_section" id="sobre_section">
         <div class="container-fluid">
            <div class="row" id="o_que_e">
               <div class="col-md-6 text-center align-self-center">
                  <img src="assets/images/tablet.png" alt="" width ="80%" class="img-fluid">
               </div>
               <div class="col-md-6 align-self-center">

                  <h2 class="title_sobre">O que é o Hyades?</h2>

                  <h4 class="subtitle_sobre">O Hyades é, principalmente, um projeto que tem como proposta a utilização da sétima arte como estratégia de ensino.</h4>

                  <p class="description_sobre lead"> É também uma ferramenta que, através da sugestão de filmes e documentários que abordam temas sociais importantes, auxilia educadores a introduzir o debate destes temas em sala de aula, e assim, formar uma geração de estudantes conscientes dos problemas que os envolvem no cotidiano.</p>
               </div>
            </div>   

            <div class="row border-top" id="objetivos">
               <div class="col-md-6 align-self-center">
                  <h2 class="title_sobre">Por que acessá-lo? </h2>

                  <h4 class="subtitle_sobre">Hyades é uma ferramenta para auxílio educacional dinâmica e simples.  </h4>

                  <p class="description_sobre lead">Além de ser uma ótima alternativa de dinâmica em sala de aula, o Hyades nos apresenta aquilo que mais esperamos de um site que trata da sétima arte: um ambiente de conforto e sofisticação. Superior a isso, o Hyades também disponibiliza sistemas funcionais, pertinentes e de fácil acesso para todo tipo de usuário. :)   </p>
               </div>

               <div class="col-md-6 text-center align-self-center">
                  <img src="assets/images/education.png" alt="" class="img-fluid sobre-img">
               </div>
            </div>  
         </div>
      </section>
      <!-- o que é hyades section end -->

      <!-- movies section start -->
      <section class="movies_section layout_padding" id="sugestoes">
         <div class="container">
            <h2 class="text-center text-white font-weight-bold my-4">Conheça alguns dos filmes que foram selecionados :)</h2>
            <div class="movies_menu">
               <ul class="border-bottom">
                  <li><a href="#gen-1">Racismo e Direitos Humanos</a></li>
                  <li><a href="#gen-2">Bullying e Discriminação</a></li>
               </ul>
            </div>
            <div class="movies_section_2 layout_padding">
               <h2 class="letest_text" id="gen-1">Filmes que abordam Racismo e Direitos Humanos</h2>
               <h3 class="gen-description">Acreditamos sobretudo que é papel das instituições de educação promover o debate sobre racismo e direitos humanos muito por conta da diversidade cultural e miscigenação presentes no Brasil.</h3>
               <div class="rol justify-content-center">
                  <div class="col-md-12 text-center">
                     <div class="movies_main">
                        <div class="iamge_movies_main">
                           <div class="iamge_movies">
                              <div class="image_3">
                                 <a href="filmes/marighella.html" class="redirecionar-filme">
                               <img src="assets/images/filmes-poster/racismo/marighella.jpg" class="image" style="width:100%">
                              <div class="middle">
                           </div>
                        </div>
                           <h1 class="code_text">Marighella</h1>
                           <p class="there_text">2021, Brasil</p>
                        </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/selma.html" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/racismo/selma.jpg" class="image" style="width:100%">
                        </div>
                           <h1 class="code_text">Selma: Uma Luta Pela Igualdade</h1>
                           <p class="there_text">2014, Reino Unido</p>
                         </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/menino-23.html" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/racismo/menino-23.jpg" class="image" style="width:100%">
                        </div>
                           <h1 class="code_text">Menino 23 – Infâncias Perdidas no Brasil</h1>
                           <p class="there_text">2016, Brasil</p>
                        </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/13-emenda.html" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/racismo/13-emenda.jpg" class="image" style="width:100%">
                        </div>
                           <h1 class="code_text">A 13ª Emenda </h1>
                           <p class="there_text">2016, Estados Unidos</p>
                        </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/branco-sai.html" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/racismo/branco-sai-preto-fica.jpg" class="image" style="width:100%">
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
               <h2 class="letest_text">Filmes que abordam Bullying e Discriminação</h2>
               <h3 class="gen-description">A ficção pode ser uma grande aliada na promoção do debate sobre o bullying porque, por meio dos mecanismos da sétima arte, ela pode criar empatia pelo próximo e fisgar o público em uma narrativa que procura conscientizá-lo</h3>
               <div class="row justify-content-center">
                  <div class="col-md-12 text-center">
                   <div class="movies_main">
                     <div class="iamge_movies_main">
                        <div class="iamge_movies">
                         <div class="image_3">
                           <a href="filmes/extraordinario.html" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/bullying/extraordinario.jpg" class="image" style="width:100%">
                        </div>
                           <h1 class="code_text">Extraórdinario</h1>
                           <p class="there_text">2017, Estados Unidos</p>
                        </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/vantagens-invisivel.html" class="redirecionar-filme">
                              <img src="assets/images/filmes-poster/bullying/vantagens-de-ser-invisivel.jpg" class="image" style="width:100%">
                              <h1 class="code_text">As Vantagens de Ser Invisível</h1>
                              <p class="there_text">2012, Estados Unidos </p>
                        </a>
                     </div>
                  </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/sete-minutos.html" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/bullying/sete-minutos-depois-da-meia-noite.jpg" class="image" style="width:100%">
                        </div>
                        
                           <h1 class="code_text">Sete Minutos Depois da Meia-Noite</h1>
                           <p class="there_text">2016, Estados Unidos</p>
                        </a>
                     </div>
                     <div class="iamge_movies">
                        <a href="filmes/no-ritmo-coracao.html" class="redirecionar-filme">
                        <div class="image_3">
                           <img src="assets/images/filmes-poster/bullying/no-ritmo-do-coracao.jpg" class="image" style="width:100%">
                        </div>

                           <h1 class="code_text">No Ritmo do Coração</h1>
                           <p class="there_text">2021, Estados Unidos</p>
                        </a>
                     </div>
                     <div class="iamge_movies">
                        <div class="image_3">
                           <a href="filmes/lily-chou.html" class="redirecionar-filme">
                           <img src="assets/images/filmes-poster/bullying/tudo-sobre-lily.jpg" class="image" style="width:100%">
                        </div>
                           <h1 class="code_text">Tudo sobre Lily Chou-Chou</h1>
                           <p class="there_text">2001, Japão</p>
                        </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="seebt_1"><a href="movies.html">Mais filmes</a></div>
      </div>
 </section>
      <!-- movies section end -->

      <!-- quem somos section start -->
         <section class="team-grid arrival_section layout_padding" id="team_section">
            <div class="container">
               <div class="intro">
                  <h2 class="text-center">Conheça nosso time</h2>
               </div>

               <div class="row mb-5 people d-flex justify-content-center" id="quem_somos_section">
                  <div class="col-md-4 col-lg-3 item">
                     <div class="box" style="background-image:url(assets/images/julio.png);">
                     <div class="cover">
                        <h3 class="text-center container-fluid name_member">Júlio Matheus</h3>
                        <p class="title_member">Estudante de programação Front-end</p>
                        <div class="social">
                           <a href="https://github.com/julionice" target="_blank"><img src="assets/images/github-social.png" alt="github do júlio"></a>
                           <a href="https://twitter.com/niceeejm" target="_blank"><img src="assets/images/twitter-social.png" alt="twitter do júlio"></a>
                        </div>
                     </div>
                  </div>
               </div>
                  <div class="col-md-4 col-lg-3 item">
                     <div class="box" style="background-image:url(assets/images/joao.png)">
                     <div class="cover">
                        <h3 class="name_member text-center container-fluid">João Vitor</h3>
                        <p class="title_member">Estudante de programação Back-end</p>
                        <div class="social">
                           <a href="https://github.com/wakerwind" target="_blank"><img src="assets/images/github-social.png" alt="github do joão"></a>
                           <a href="https://twitter.com/Ja1Raposo" target="_blank"><img src="assets/images/twitter-social.png" alt="twitter do joão"></a>
                        </div>
                     </div>
                  </div>
               </div>
            
               <div class="col-md-4 col-lg-3 item">
                  <div class="box" style="background-image:url(assets/images/nathalia.png);">
                  <div class="cover">
                     <h3 class="text-center container-fluid name_member">Nathalia Nóbrega</h3>
                     <p class="title_member">Estudante de programação Front-end</p>
                     <div class="social d-flex justify-content-center">
                        <a href="https://github.com/nathalia-nobrega" target="_blank"><img src="assets/images/github-social.png" alt="github da nathalia"></a>
                           <a href="https://twitter.com/VHSBLOND" target="_blank"><img src="assets/images/twitter-social.png" alt="twitter da nathalia"></a>
                     </div>
                  </div>
               </div>
            </div>
          </div>
      </div>
   </section>
      <!-- quem somos  section end -->

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
            <div class="copyright_text">Copyright 2022 Todos os direitos reservador por Hyades, Corp <a href="https://html.design">Free html Templates</a></div>
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