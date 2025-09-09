<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menu - Sistema Loja</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
    <h3>Escolha uma categoria de produto:</h3>
    <ul>
        <li><a href="produtos.php?tipo=Moda">Moda</a></li>
        <li><a href="produtos.php?tipo=Acessórios">Acessórios</a></li>
        <li><a href="produtos.php?tipo=Informática">Informática</a></li>
        <li><a href="produtos.php?tipo=Artigos Esportivos">Artigos Esportivos</a></li>
    </ul>
    <br>
    <a href="logout.php">Sair</a>
</body>
</html>
