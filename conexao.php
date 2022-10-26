<?php 

$usuario = 'root';
$senha = '';
$database = 'hyades';
//pode ser que dê erro sem a porta
$host = 'localhost';

$conn = new mysqli($host, $usuario,$senha,$database);

if($conn->error){
    die("Falha ao conectar com o banco: ".$mysqli->error);
}

?>