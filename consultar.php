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
    $expressao=$_POST['expressao'];
    $bd=mysqli_connect("localhost","root","","gravadora") or die ("ERROR!");
    $op=$_POST['op'];

    if($op ==  "ano_lancamento"){
        $consulta=mysqli_query($bd, "SELECT * FROM musicas WHERE ano_lancamento= '$expressao'");
    }

    else if ($op == "genero"){
        $consulta=mysqli_query($bd, "SELECT * FROM musicas WHERE genero= '$expressao'");
    }

    else if($op == "compositor"){
        $consulta=mysqli_query($bd, "SELECT * FROM musicas WHERE compositor ='$expressao'");
    }

    else if($op == "titulo"){
        $consulta=mysqli_query($bd, "SELECT * FROM   musicas WHERE titulo LIKE '%$expressao%'");
    }

    else{
        echo "volte e selecione novamente,registro nao encontrado";
        echo "<a href='consultar.html'>Voltar a consulta</a>";  
        exit;
    }

    

    while($reg=mysqli_fetch_array($consulta)){
        
   echo" titulo: " . $reg['titulo']."<br>";
   echo" artista: " .$reg['artista']."<br>";
   echo" album: ". $reg['album']."<br>";
   echo" genero: ". $reg['genero']."<br>";
   echo" ano_lancamento: " . $reg['ano_lancamento']."<br>";
   echo" duracao_segundos: ". $reg['duracao_segundos']."<br>"; 
   echo" gravadora: " . $reg ['gravadora']."<br>";
   echo" compositor: ".  $reg ['compositor']."<br>";
   echo" letra: " . $reg ['letra']."<br>";
   echo" caminho_arquivo: " . $reg ['caminho_arquivo']."<br>";
}

    echo "<br><a href='regrava.php'>Regrava</a><br>";

    echo "<a href='deletar.php'>Deletar</a><br>";

    echo "<a href='consultar.html'>Voltar a consulta</a>";    

    ?>

    <?php 
    $reg=mysqli_fetch_array($consulta);
    ?>

</body>
</html>