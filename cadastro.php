
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
    
    <!-- Custom styles for this template -->
    <link href="assets/css/cadastro.css" rel="stylesheet">
  </head>

  <body class="text-center">
    
    <main class="form-signin w-100 m-auto">
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

          <form action="cadastrar.php" method="post">
        <img class="mb-4" src="assets/images/logo_ma_branco_tablet.png" alt="" width="195" height="195">
        <h1 class="registro">Cadastre-se, é grátis :)</h1> 

        <div class="form-floating input1"><!--id="floatingInput"-->
          <input type="text" class="form-control" id="nome"  placeholder="name@example.com" maxlength="50" name="nome">
          <label for="floatingInput">Nome de usuário</label>
        </div>

        <div class="form-floating input1">
          <input type="email" class="form-control" id="email" placeholder="name@example.com"maxlength="100" name="email">
          <label for="floatingInput">Endereço de email</label>
        </div>

        <div class="form-floating input1">
          <input type="password" class="form-control" id="senha" placeholder="name@example.com" maxlength="50">
          <label for="floatingInput">Senha</label>
        </div>

        <div class="form-floating input1">
          <input type="password" class="form-control" id="senhaconfirmar" placeholder="Password" maxlength="50" name="senha">
          <label for="floatingPassword">Confirmação de senha</label>
        </div>

        <div class="form-floating input">
          <input type="date" class="form-control" id="nascimento" placeholder="ano de nascimento" name="nascimento">
          <label for="floatingDate">Ano de nascimento</label>
        </div>

        <div>
        </div>

        <h4 class="agaquatro"> Escolha alguns tópicos para começar!</h4>

        <div class="checkbox">
          <label class="box1">
            <input type="checkbox" value="valMA"> Meio ambiente                 
            <input type="checkbox" value="valRAC"> Racismo e direitos humanos<br>
            <input type="checkbox" value="valBuLL"> Bullying e discriminação
            <input type="checkbox" value="valDIR"> Direitos das mulheres
          </label>
        </div>

        <button class="button" type="submit" id="enviar">Enviar</button>
      </form>
    </main>
    <script src="assets/js/validar-cadastro.js"></script>
  </body>
</html>