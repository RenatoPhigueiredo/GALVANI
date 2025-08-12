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
    $data_cadastro= $_POST['data_cadastro'];

    $con = mysqli_connect('localhost', 'root', '', 'repertorio');

    $titulo = mysqli_real_escape_string($con, $titulo);
    $artista = mysqli_real_escape_string($con, $artista);
    $album = mysqli_real_escape_string($con, $album);
    $genero = mysqli_real_escape_string($con, $genero);
    $ano_lancamento = mysqli_real_escape_string($con, $ano_lancamento);
    $duracao_segundos = mysqli_real_escape_string($con, $duracao_segundos);
    $gravadora = mysqli_real_escape_string($con, $gravadora);
    $compositor = mysqli_real_escape_string($con, $compositor);
    $letra = mysqli_real_escape_string($con, $letra);
    $caminho_arquivo = mysqli_real_escape_string($con, $caminho_arquivo);
    $data_cadastro = mysqli_real_escape_string($con, $data_cadastro);

    $in = "INSERT INTO musicas 
        (titulo, artista, album, genero, ano_lancamento, duracao_segundos, gravadora, compositor, letra, caminho_arquivo, data_cadastro) 
        VALUES 
        ('$titulo', '$artista', '$album', '$genero', '$ano_lancamento', '$duracao_segundos', '$gravadora', '$compositor', '$letra', '$caminho_arquivo', '$data_cadastro')";

    $incluir=mysqli_query($con, $in);

    if ($incluir) {
        echo "<center><h1>Registro inserido com sucesso!</h1></center>";
        echo"Titulo: $titulo <br>       
           Artista: $artista  <br>     
           Album: $album       <br>  
           Genero: $genero        <br>
           Ano do Lançamento: $ano_lancamento <br>
           Duracao: $duracao_segundos<br>
           Gravadora: $gravadora   <br>  
           Compositor: $compositor  <br>  
           Letra:    $letra       <br>  
           Caminho: $caminho_arquivo <br>
           Data de Cadastro: $data_cadastro <hr>";

           echo "<br><a href='a.html'>Voltar</a>";
           echo "<br><a href='consultar.html'>Consultar</a>";
    } else {
        echo "Erro ao inserir registro: ";
    }
?>
