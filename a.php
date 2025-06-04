<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $IdPropriedade=$_POST["IdPropriedade"];
    $Endereco=$_POST["Endereco"];
    $Cidade=$_POST["Cidade"];
    $Estado=$_POST["Estado"];
    $CEP=$_POST["CEP"];
    $Tipo=$_POST["Tipo"];
    $Valor=$_POST["Valor"];

    $con=mysqli_connect("localhost","root","","imobiliaria") or die("erro!");

    $in= "insert into propriedades values (null,
                                        '$Endereco',
                                        '$Cidade',
                                        '$Estado',
                                        '$CEP',
                                        '$Tipo',
                                        '$Valor')";
                            
    $incluir=mysqli_query($con, $in);

    if($incluir == 1)
    {
        echo"
        Endereço:$Endereco<br>
        Cidade: $Cidade<Br>
        Estado: $Estado<br>
        CEP: $CEP<br>
        Tipo: $Tipo<br>
        Valor: $Valor<br>
        ";
        echo "foi incluido com sucesso";
    }
    else
    {
        echo "Nao foi possivel concluir esta ação <br>";

        echo "aaaaaaaaaaaaaaaaaa vo curinga";
    }
    ?>
</body>
</html>