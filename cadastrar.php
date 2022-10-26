<?php

    //Inicia sessão
    session_start();
    //Faz a conxeão com o BD
    include("conexao.php");

    //Pegando os dados do cadastro
    //Aplico trim para eliminar espaçoes no inicio e final da string

    $senha =  mysqli_real_escape_string($conn,trim(md5($_POST['senha'])));
    $nome =  mysqli_real_escape_string($conn,trim($_POST['nome']));
    $email =  mysqli_real_escape_string($conn,trim($_POST['email']));
    $nascimento = $_POST['nascimento'];

    /*
    //Parte que converte a data digitada pelo usuário para date
    //Agora fica no modelo aceitro pelo banco de dados
    $explode = explode('/',$nascimento);
    $dia = $explode[0];
    $mes = $explode[2];
    $ano = $explode[4];

    //Atribui a data convertida para a variavel nascimento
    $nascimento = $ano.'-'.$mes.'-'.$dia;
*/
    //Consulta que ve se o usuario ja é cadastrado
    $sql = "select count(*) as total from usuario where email = '$email'";
   
    //executa a consulta
    $result = mysqli_query($conn, $sql);

    //Se o usuario já existir retorna o numero de linhas afetadas
    $row = mysqli_fetch_assoc($result);

    
//Verifica se o usuario já existe no BD
if($row['total'] == 1) {

	$_SESSION['usuario_existe'] = true;
    //echo "Usuario já existente";
    //Manda para a tela de cadastro denovo
	header('Location: cadastro.php');
	exit();
}


//comando para inserir dados no bd
$sql = "INSERT INTO usuario (senha, nome, email,nascimento) VALUES ('$senha', '$nome', '$email','$nascimento')";

//Se for inserido retorna sucesso para a session
if($conn->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
    //echo "Usuario cadastrado com sucesso!";
}

//fecha a conexão
$conn->close();

//Manda para a tela de login  depois de cadastrar
header('Location: login.php');
exit();
    



?>

