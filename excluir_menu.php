<?php
require_once "config.inc.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM menu WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo "<h2> Comida excluída com sucesso!</h2>";
    } else {
        echo "<h2> Erro ao excluir a comida!</h2>";
        echo mysqli_error($conexao);
    }

    echo "<br><a href='menu.php'>Voltar à lista</a>";
} else {
    echo "<h2> Nenhuma comida selecionada para exclusão.</h2>";
    echo "<br><a href='menu.php'>Voltar à lista</a>";
}
?>
