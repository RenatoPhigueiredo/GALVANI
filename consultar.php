<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ano_lancamento=$_POST["ano_lancamento"];
    
    $bd=mysqli_connect("localhost","root","","repertorio") or die ("ERROR!");

    if(isset($_POST["$genero"]))
    {

        $genero=$_POST["$genero"];

        if($genero=="genero"){
        $consultar=mysqli_query($bd,"select * from musica where musicas= '$ano_lancamento'");
        }
    }


    else
    {
        echo "volte ao campo que fara a pesquisa de consulta";
    }
    ?>
</body>
</html>