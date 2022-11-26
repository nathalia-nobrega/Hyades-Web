<?php
    session_start();
    include("conexao.php");


    $email = $_SESSION['email'];
    $sql = "SELECT nascimento FROM usuario where email = '$email'";

    $sql_query = mysqli_query($conn,$sql) or die ("Falha na execução do código sql: ");

    $dados = $sql_query->fetch_assoc();

    $nascimento = $dados['nascimento'];

    $data = new DateTime($nascimento );
    $resultado = $data->diff( new DateTime( date('Y-m-d') ) );
    echo $resultado->format( '%Y anos' );
    $idade = intval($resultado->format( '%Y anos' ));

    $sql = "SELECT * from filme where ";

?>