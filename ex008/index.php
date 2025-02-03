<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>condicional if, else e elseif</title>
</head>

<body>
    <?php
    //condicional if
    if (1 < 2) {

        echo "o numero 1 é menor que 2 <br>";
    }
    $idade = 18;
    if ($idade >= 18) {
        echo "Você é maior de idade. <br> ";
    }

    //condicional else
    $a = 10;
    $b = 14;

    if ($a == $b) {
        echo "as variaveis sao iguais. "; // se
    } else {
        echo "as variaveis são diferentes.<br>"; // se não

    }


    //condicional elseif
    $idadepessoa = 25;

    if($idadepessoa < 13){
        echo "você é uma criança.";
    } else if ($idadepessoa >= 13 && $idadepessoa <= 19) {
        echo "você é um adolescente.";
    } else if ($idadepessoa >= 20 && $idadepessoa <= 59){
        echo "você é um adulto.";
    } else { 
        echo "você é um idoso.";
    }
    ?>
</body>

</html>