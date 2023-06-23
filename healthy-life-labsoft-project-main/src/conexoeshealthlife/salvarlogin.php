<?php 
include 'conexaobd.php';

$username = $_POST['username'];
/* $email = $_POST['email']; */
$pasword = $_POST['pasword'];
/* $peso = $_POST['peso'];
$quadril = $_POST['quadril'];
$resultado = $_POST['resultado']; */
/* $imc = $_POST['imc'];
$iac = $_POST['iac']; */

$salvar = mysqli_query($conexaoBD, "INSERT INTO users(username, pasword) VALUES ('$username', '$pasword')");

if ($salvar) {
    header ('location: ../login.php');
}

?>