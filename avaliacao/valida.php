<?php
session_start();


$usuarioCorreto = "admin"; //usuario
$senhaCorreta = "123"; //senha

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
    $_SESSION['usuario'] = $usuario;
    header("Location: menu.php");
} else {
    echo "Usuário ou senha inválidos! <a href='login.php'>Tente novamente</a>";
}
?>
