<?php
require_once "config.inc.php";

if (isset($_POST['Valor'])) {
    $valor  = $_POST['Valor'];
    $gramas = $_POST['Gramas'];
    $nome   = $_POST['Nome'];

    // Atualiza os dados no banco
    $sql = "UPDATE menu SET Nome = '$nome', Gramas = '$gramas' WHERE Valor = '$valor'";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo "<h2> Comida alterada com sucesso!</h2>";
    } else {
        echo "<h2> Erro ao alterar comida!</h2>";
        echo mysqli_error($conexao);
    }

    echo "<br><a href='index.php'>Voltar à lista</a>";
} else {
    echo "<h2> Nenhum dado recebido!</h2>";
    echo "<br><a href='index.php'>Voltar</a>";
}
?>
