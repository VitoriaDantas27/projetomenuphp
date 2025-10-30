<?php
require_once "config.inc.php";

// Pegando dados do formulário com segurança
$valor  = $_POST['Valor'] ?? null;
$gramas = $_POST['Gramas'] ?? null;
$nome   = $_POST['Nome'] ?? null;

// Verificando se os campos foram preenchidos
if ($valor && $gramas && $nome) {
    $sql = "INSERT INTO menu (Valor, Gramas, Nome) VALUES ('$valor', '$gramas', '$nome')";
    $execute = mysqli_query($conexao, $sql);

    if ($execute) {
        echo "<br><h2>Comida cadastrada com sucesso!</h2><br>";
        echo "<a href='index.php'>Voltar à lista</a>";
    } else {
        echo "<h2> Erro ao cadastrar a comida!</h2>";
        echo mysqli_error($conexao);
    }
} else {
    echo "<h2> Preencha todos os campos!</h2>";
}
?>
