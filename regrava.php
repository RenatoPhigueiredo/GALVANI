<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regravar</title>
</head>
<body>
    <?php
    $titulo                 =$_POST["titulo"];         
    $artista                =$_POST["artista"];
    $album                  =$_POST["album"];
    $genero                 =$_POST["genero"];
    $ano_lancamento         =$_POST["ano_lancamento"];
    $duracao_segundo        =$_POST["duracao_segundo"];
    $gravadora              =$_POST["gravadora"];
    $compositor             =$_POST["compositor"];
    $letra                  =$_POST["letra"];
    $caminho_arquivo        =$_POST["caminho_arquivo"];
    $data_cadastro          =$_POST["data_cadastro"];

    $es=mysqli_connect("localhost","root","","repertorio") or die ("ERROR!");

    $sp=mysqli_query($es,"update musica set musicas    ( null,
                                    '$titulo',
                                    '$artista',
                                    '$album',
                                    '$genero',
                                    '$ano_lancamento',
                                    '$duracao_segundo',
                                    '$gravadora     ',
                                    '$compositor    ',
                                    '$letra',
                                    '$caminho_arquivo',
                                    '$data_cadastro ')");
                    
if(sp == 1)
{
    echo"
    titulo                  $titulo <br>       
    artista                 $artista <br>    
    album                   $album   <br>    
    genero                  $genero  <br>    
    ano_lancamento          $ano_lancamento<br> 
    duracao_segundo         $duracao_segundo<br>
    gravadora               $gravadora<br>      
    compositor              $compositor   <br>  
    letra                   $letra        <br>  
    caminho_arquivo         $caminho_arquivo<br>
    data_cadastro           $data_cadastro  
    ";

}
else{
    echo"ALGO ESTA ERRADO";
}
    ?>
</body>
</html>