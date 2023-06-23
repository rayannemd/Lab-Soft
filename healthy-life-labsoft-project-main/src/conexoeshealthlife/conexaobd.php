<?php

$servidor = "localhost"; //pode ser 127.0.0.1 também
$usuario = "root";
$senha = "";
$nbd = "health_life";

$conexaoBD = mysqli_connect($servidor, $usuario, $senha, $nbd);

if (!$conexaoBD) {
    die("ERROR: Não pode conectar ao banco. " . mysqli_connect_error());
} else {
    /* echo "Conectado ao banco."; */
}

?>