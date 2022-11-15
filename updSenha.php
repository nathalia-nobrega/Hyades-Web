<?php
include("conexao.php");
session_start();
$email  = $_SESSION['email'];

if (isset($_POST['confNova'])) {
        $senha_atual = $_POST['senhaAtual'];
        $senha_nova = $_POST['senhaNova'];
        $conf_nova = $_POST['confNova'];
        $password_query = mysqli_query($conn, "select * from users where email='{$email}'");
        $password_row = mysqli_fetch_array($password_query);
        $database_password = $password_row['senha'];

        if ($database_password == $senha_atual) {
            if ($senha_nova == $conf_nova) {
                $update_pwd = mysqli_query($conn, "update usuario set senha='$senha_nova' where email='{$email}'");
                echo "<script>alert('Senha redefinida com sucesso'); window.location='index.php'</script>";
                }
            else {
                echo "<script>alert('Sua senha nova e a confirmação não são as mesmas'); window.location='index.php'</script>";
                }
            }
        else {
            echo "<script>alert('Sua senha antiga está errada!'); window.location='index.php'</script>";
            }
        }
?>