<?php
require_once "config.inc.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "SELECT * FROM menu WHERE Valor = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $dados = mysqli_fetch_assoc($resultado);
    } else {
        echo "<h2> Comida não encontrada!</h2>";
        echo "<a href='index.php'>Voltar</a>";
        exit;
    }
} else {
    echo "<h2> Nenhum ID informado.</h2>";
    echo "<a href='index.php'>Voltar</a>";
    exit;
}
?>

<h2>Alterar Comida</h2>

<form method="post" action="altera_menu.php">
    <input type="hidden" name="Valor" value="<?php echo $dados['Valor']; ?>">

    Nome: <input type="text" name="Nome" value="<?php echo $dados['Nome']; ?>" required><br><br>
    Gramas: <input type="text" name="Gramas" value="<?php echo $dados['Gramas']; ?>" required><br><br>

    <input type="submit" value="Salvar Alterações">
</form>

<br>
<a href="index.php">Voltar</a>
