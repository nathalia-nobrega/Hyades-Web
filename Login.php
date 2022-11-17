<?php
//Iniciando a sessão pra exibir se o usuário ou a senha é inválido lá embaixo
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
    <link href="assets/css/login.css" rel="stylesheet">
  </head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
    <?php
            if(isset($_SESSION['nao_autenticado'])):
         ?>

        <div class="notification is-danger">
            <p>ERRO: Usuário ou senha incorretos.</p>
         </div>
        <?php
             endif;
             unset($_SESSION['nao_autenticado']);
        ?>
      <form  action="logar.php" method="post" id="form">
        <img class="mb-4" src="assets/images/logo_ma_branco_tablet.png" alt="logo Hyades" width="195" height="195">
        <h1 class="registro">Iniciar Sessão</h1>
        

        <div class="form-floating"><!--id="floatingInput"-->
          <input type="email" class="form-control"  placeholder="name@example.com" id="email" name="email">
          <label for="floatingInput">Nome de usuário ou email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" placeholder="name@example.com" id="senha" name="senha">
          <label for="floatingInput">Senha</label>
        </div>

        <div class="login_footer">
            <div class="login_footer">
                <div class="login_cadastro">
                    <span>Não tem conta?  <a href="cadastro.php">Registre-se.</a></span>
                </div>

            <div class="sign_up">

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Lembre-se de mim.
          </label>
        </div>
        <button class="button" type="submit" id="entrar">Entrar</button>
        <p class="mt-5 mb-3 text-muted">© 2021–2022</p>
      </form>
    </main>
    <script src="assets/js/validar-login.js"></script>
  </body>
</html>