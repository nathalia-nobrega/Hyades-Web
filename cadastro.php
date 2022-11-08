<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hyades</title>
    <link rel="icon" href="assets/images/logo_ma_branco_tablet.png" width ="10%" height= "5%" />

     <!-- bootstrap link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <!-- lato font link -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

     <!-- quicksand font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600&display=swap" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="assets/css/cadastro.css" rel="stylesheet">
  </head>

<body class="gradient">
    
  <main class="form-signin w-100">
    <?php
    if(isset($_SESSION['usuario_existe'])):
    ?>

    <div class="notification is-info">
        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
    </div>
    <?php
 
    endif;
    unset($_SESSION['usuario_existe']);
    ?>
 
<img class="mx-auto d-block" src="assets/images/logo_ma_branco_tablet.png" alt="logo do hyades" width="250" height="250">
<div class="mask d-flex align-items-center h-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card text-white" style="border-radius: 15px;">
          <div class="card-body p-5">
            <h1 class="registro m-3 py-4">Cadastre-se, é grátis :)</h1> 

           <form action="cadastrar.php" method="post">
      
            <div class="form-outline mb-4 input1">
              <label for="floatingInput" class="form-label">Nome de usuário</label>
              <input type="text" class="form-control form-control-lg" id="nome"  placeholder="name@example.com" maxlength="50" name="nome">
            </div>

            <div class="form-outline mb-4 input1">
             <label for="floatingInput" class="form-label">Endereço de email</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com"maxlength="100" name="email">
            </div>

          <div class="form-outline mb-4 input1">
            <label for="floatingInput" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="name@example.com" maxlength="50">
          </div>

          <div class="form-outline mb-4 input1">
            <label for="floatingPassword" class="form-label">Confirmação de senha</label>
            <input type="password" class="form-control" id="senhaconfirmar" placeholder="Password" maxlength="50" name="senha">
          </div>

          <div class="form-outline mb-4 input">
            <label for="floatingDate" class="form-label">Ano de nascimento</label>
            <input type="date" class="form-control" id="nascimento" placeholder="ano de nascimento" name="nascimento">
          </div>

          <h4> Escolha alguns tópicos para começar!</h4>

          <div class="row col">
            <h4 class="fw-bold text-center mt-3"></h4>
            <form class="px-4" action="">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="valMA" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                Meio ambiente 
                </label>
              </div>

              <!-- Checked checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="valRAC" id="flexCheckDefault2" />
                <label class="form-check-label" for="flexCheckDefault2">
                Racismo e direitos humanos
                </label>
              </div>

              <!-- Checked checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="valBuLL" id="flexCheckDefault3" />
                <label class="form-check-label" for="flexCheckDefault3">
                Bullying e discriminação
                </label>
              </div>

              <!-- Checked checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="valDIR" id="flexCheckDefault3" />
                <label class="form-check-label" for="flexCheckDefault3">
                Direitos das mulheres
                </label>
              </div>
            </form>
          </div>

            <button class="button btn btn-primary btn-rounded w-50 d-block mx-auto my-3" type="submit" id="enviar">Enviar</button>
       </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      
  </main>
    <!-- <script src="assets/js/validar-cadastro.js"></script> -->
  </body>
</html>