<?php
include("conexao.php");
session_start();
$email  = $_SESSION['email'];

if (isset($_POST['confNova'])) {
        $senha_atual = md5($_POST['senhaAtual']);
        $senha_nova = ($_POST['senhaNova']);
        $conf_nova = $_POST['confNova'];
        $sql = "select * from usuario where email='{$email}'";
        $query = mysqli_query($conn, $sql);
        $row = $query->fetch_assoc();
        $database_password = $row['senha'];

        if ($database_password == $senha_atual) {
            if ($senha_nova == $conf_nova) {
                $update_pwd = mysqli_query($conn, "update usuario set senha= md5('$senha_nova') where email='{$email}'");
                echo "<script>alert('Senha redefinida com sucesso'); window.location='index.php'</script>";
                }
            else {
                 echo "<script>alert('Sua senha nova e a confirmação não são as mesmas');'</script>";
                }
            }
        else {
              echo "<script>alert('Sua senha antiga está errada!'); window.location='index.php'</script>";
            }
        }
?>