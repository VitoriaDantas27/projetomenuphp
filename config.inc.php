<?php
$conexao = mysqli_connect("localhost", "root", "", "projeto1", 3310);

if (!$conexao) {
    die(" Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
