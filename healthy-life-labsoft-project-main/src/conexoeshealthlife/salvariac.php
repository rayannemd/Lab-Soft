<?php 
include 'conexaobd.php';

$id = $_GET['id'];
$username = $_POST['username'];
$iac = $_POST['iac'];

$salvar = mysqli_query($conexaoBD, "INSERT INTO users(username, iac) VALUES ('$username', '$iac')");

if ($salvar) {
    header ('location: ../indiceIAC.php');
}

?>