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
    $Idpropriedade=$_POST["Idpropriedade"];
    $Endereco=$_POST["Endereco"];
    $Cidade=$_POST["Cidade"];
    $Estado=$_POST["Estado"];
    $CEP=$_POST["CEP"];
    $Tipo=$_POST["Tipo"];
    $Valor=$_POST["Valor"];

    $con=mysqli_connect("localhost","root","","imobiliaria") or die ("erro!");

    $in= "insert into propriedades values ('$Idpropriedade',
                                            '$Endereco',
                                            '$Cidade',
                                            '$Estado',
                                            '$CEP',
                                            '$Tipo',
                                            '$Valor')";
    
    $incluir=mysqli_query($con,$in);
    if ($incluir==1)
    {
        echo "
        IDpropriedade:	$Idpropriedade<BR>
        Endereço:		$Endereco<BR>
        Cidade:		    $Cidade<BR>
        Cor:			$Estado<BR>
        CEP:			$CEP<BR>
        Tipo:           $Tipo<BR>
        Valor:		    $Valor<BR>";
   
        echo "Registro incluído com sucesso!<BR>";
    }
    else
    {
        echo "Registro NÃO incluído!<BR>";
    }
    

    ?>
</body>