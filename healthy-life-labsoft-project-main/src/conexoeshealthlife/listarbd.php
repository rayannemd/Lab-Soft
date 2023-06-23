<?php
    include 'conexoeshealthlife/conexaobd.php';

    $listardados = mysqli_query( $conexaoBD, 'SELECT * FROM users');

?>