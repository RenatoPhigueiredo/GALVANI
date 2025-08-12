<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $id=$_GET['id'];
        $bd=mysqli_connect("localhost","root","","repertorio") or die ("ERROR!");
        $deletar=mysqli_query($bd, "DELETE FROM musicas WHERE id='$id'");
        if($deletar ==1){
            echo "Registro deletado com sucesso!";
        } else {
            echo "Erro ao deletar o registro.";
        }
        echo "<br><a href='consultar.html'>Voltar a consulta</a>";
    ?>
</body>
</html>