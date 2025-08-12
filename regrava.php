<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $titulo =       $_POST['titulo'] ;
    $artista =      $_POST['artista'] ;
    $album =        $_POST['album'] ;
    $genero =       $_POST['genero'] ;
    $ano_lancamento = $_POST['ano_lancamento'] ;
    $duracao_segundos = $_POST['duracao_segundos'] ;
    $gravadora =        $_POST['gravadora'] ;
    $compositor =       $_POST['compositor'] ;
    $letra =            $_POST['letra'];
    $caminho_arquivo =  $_POST['caminho_arquivo'];

    $bd=mysqli_connect("localhost","root","","repertorio");
    
    $rd=mysqli_query($bd,"UPDATE musicas SET titulo='$titulo', 
                                            artista='$artista', 
                                            album='$album', 
                                            genero='$genero', 
                                            ano_lancamento='$ano_lancamento', 
                                            duracao_segundos='$duracao_segundos', 
                                            gravadora='$gravadora', 
                                            compositor='$compositor', 
                                            letra='$letra', 
                                            caminho_arquivo='$caminho_arquivo'");
        
      if($rd == 1){
        echo"Registro alterado com sucesso!<br>";
        echo "<br><a href='consultar.html'>Consultar</a>";
      }                          

      else{
        echo"Algo esta errado, tente novamente!";
      }            

    ?>
</body>
</html>