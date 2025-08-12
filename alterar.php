<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $titulo=trim($_GET['titulo']);

    $sp=mysqli_connect("localhost","root","","gravadora") or die ("ERROR!");

    $sql= "SELECT * FROM musicas WHERE genero='$titulo'";

    $consulta=mysqli_query($sp,$sql);

    $reg=mysqli_fetch_array($consulta);

    if($reg == 0){
        echo "ERROR-Registro nao encontrado";
        exit;
    }
    else{
        $titulo = $reg['titulo'];
        $artista = $reg['artista'];
        $album = $reg['album'];
        $genero = $reg['genero'];
        $ano_lancamento = $reg['ano_lancamento'];
        $duracao_segundos   = $reg['duracao_segundos'];
        $gravadora = $reg['gravadora'];
        $compositor = $reg['compositor'];
        $letra = $reg['letra'];
        $caminho_arquivo = $reg['caminho_arquivo']; 
    }
    ?>

    <?php echo "TITULO: $titulo <br> <br>";?>
 
    <form action="regrava.php" method="POST">
                    <input type="hidden" name="id">
        titulo      <input type="hidden" name="titulo"                value=<?php echo"$titulo";?>><br>
        artista     <input type="text" name="artista"               value=<?php echo "$artista";?>><br>
        album       <input type="text" name="album"                 value=<?php echo "$album";?>><br>
        genero      <input type="text" name="genero"              value=<?php echo"$genero";?>><br>
        ano_lancamento  <input type="text" name="ano_lancamento"    value=<?php echo "$ano_lancamento";?>><br>
        duracao_segundo <input type="text" name="duracao_segundos"  value=<?php echo "$duracao_segundos";?>><br>
        gravadora       <input type="text" name="gravadora"         value=<?php echo "$gravadora";?>><br>
        compositor      <input type="text" name="compositor"        value=<?php echo "$compositor";?>><br>
        letra           <input type="text" name="letra"             value=<?php echo "$letra";?>><br>
        caminho_arquivo <input type="text" name="caminho_arquivo"   value=<?php  echo"$caminho_arquivo";?>><br>
        data_cadastro   <input type="text" name="data_cadastro"     value=<?php echo"$data_cadastro";?>><br>
        <input type="submit" value="regravar"><br>
    </form>

</body>
</html>