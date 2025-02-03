<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <?php 
    //criação de array indexado
    $array = [10, 20, 30 , 40];

    //exibindo o array

    echo "array original: ";
    print_r ($array); //print_r () exibe o array de forma legível

    echo "<br>";
    //adicionando um valor ao final array
    $array [] = 50;

    //exibindo o array atualizado
    echo "array apos adicionar 50:";

    print_r($array);

    echo "<br>";
    //alterando o valor na posição 1 para 25 
    $array [1] = 25;

    echo "array após alterar o valor na posição 1 para 25: ";
    print_r ($array);

    echo "<br>";
    //removendo o valor no index 2 
    unset ($array [2]);

    print_r ($array); 
    echo "<br>";
    //reorganizar os indices  do meu array
    $array = array_values($array);
    
    //Exibindo o  array após remover o valor no indice 
    echo "array após remover o valor no indice 2";
    print_r($array);

    echo "<br>";
$array[] = 19;

//ordenando o array
sort($array);

//exibindo o array ordenado 
echo "array após ordenar os valores";

print_r ($array);


    ?>
</body>
</html>