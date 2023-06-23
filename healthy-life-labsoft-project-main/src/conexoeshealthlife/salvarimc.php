<?php 
include 'conexaobd.php';

$id = $_GET['id'];
$username = $_POST['username'];
$imc = $_POST['imc'];

$salvar = mysqli_query($conexaoBD, "INSERT INTO users(username, imc) VALUES ('$username', '$imc')");

if ($salvar) {
    header ('location: ../indiceIMC.php');
}

?>