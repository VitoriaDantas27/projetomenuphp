<p>
    <a href="form_menu.php">Cadastrar novo Alimento</a>
</p>

<h2>Lista de Comidas</h2>

<?php
require_once "config.inc.php";

$sql = "SELECT * FROM menu";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($dados = mysqli_fetch_assoc($resultado)) {
        echo "<br>===============<br>";
        echo "Valor: {$dados['Valor']} | ";
        echo "Gramas de porção: {$dados['Gramas']} | ";
        echo "Nome da comida: {$dados['Nome']} | ";
        echo " | <a href='form_menu_alterar.php?id={$dados['Valor']}'>Alterar</a>";
        echo " | <a href='excluir_menu.php?id={$dados['Valor']}'>Excluir</a>";
        echo "<br>============= <br>";
    }
} else {
    echo "<br><h2>Nenhuma comida encontrada!</h2><br>";
}
?>
