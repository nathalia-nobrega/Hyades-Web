<?php
//Aqui
    session_start();
    include("conexao.php");

    if(empty($_POST['email']) || empty($_POST['senha'])) {
        //Manda para a tela de login se o usuario não tiver digitado nada nos campos
        header('Location: Login.php');
        echo"Erro";
        
        exit();
    }
    
       
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $senha = mysqli_real_escape_string($conn,$_POST['senha']);

            //ERRo usuário deve poder entrar com usuario ou email
            $sql_code = "SELECT senha,email FROM usuario WHERE senha = md5('{$senha}')  AND email = '{$email}' ";
            $sql_query = mysqli_query($conn,$sql_code) or die ("Falha na execução do código sql: ");
            
            $quantidade = mysqli_num_rows($sql_query);

             //Se retornar uma linha quer dizer que o usuario existe no bd e pode logar
            if($quantidade == 1){
                                            
                $_SESSION['nome'] = $email;
                //Redireciona para a tela após o login
                header('Location: index.html');
                //echo "Login efetuado com sucesso!";
	            exit();
            }else{
                $_SESSION['nao_autenticado'] = true;
                header('Location: login.php');
                echo "Falha ao logar email ou senha incorretos";
	            exit();
                
            }
        
    





?>