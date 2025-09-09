<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit;
}

include("conexao.php");

$tipo = $_GET['tipo'];

$sql = "SELECT * FROM produtos WHERE tipo = '$tipo'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Produtos - <?php echo $tipo; ?></title>
</head>
<body>
    <h2>Produtos da categoria: <?php echo $tipo; ?></h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço Unitário</th>
        </tr>
        <?php while($linha = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $linha['id_produto']; ?></td>
            <td><?php echo $linha['produto']; ?></td>
            <td><?php echo $linha['quantidade']; ?></td>
            <td><?php echo "R$ ".number_format($linha['preco_unitario'], 2, ',', '.'); ?></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <a href="menu.php">Voltar ao Menu</a>
</body>
</html>
