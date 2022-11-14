<?php 

    $usuario = 'id19776474_root';
    $senha = 'Jubinha@5002_20_21';
    $database = 'id19776474_hyades';
    //pode ser que dê erro sem a porta
    $host = 'localhost';

    $conn = new mysqli($host, $usuario,$senha,$database);

    if($conn->error){
        die("Falha ao conectar com o banco: ".$mysqli->error);
    }

?>