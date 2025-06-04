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

    $con=mysqli_connect("localhost","root","","imobiliaria");

    $in="insert value imobiliaria(null,
                                    '$Endereco',
                                    '$Cidade',
                                    '$Estado',
                                    '$CEP',
                                    '$Tipo',
                                    '$Valor')";
                            
    $incluir=mysli_query($con,$in);
    if($)
    ?>
</body>
</html>