<?php
include 'conexaobd.php';

$id = $_GET["id"];

if (isset($_GET['id'])) {
    $consulta = mysqli_query($conexaoBD, "DELETE FROM users WHERE id = {$id}");

    header('location: listarbd.html');
}

?>