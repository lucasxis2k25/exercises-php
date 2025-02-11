<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções</title>
</head>
<body>
   <?php 
 function saudacao(){
        echo "seja bem-vindo ao php!<br>";

 }  
   
 saudacao(); //chama A Função 
   
   echo "<br>";
   function somar ($a, $b){
       return $a + $b;
   }
    
$resultado = somar(5, 3); //chamando a função e passando os argumentos


echo "<br>";

$resultado1 = somar(8, -2); //imprime o resultado da função
echo "resultado da soma: " . $resultado1; //saída

echo "<br>";

function saudacaopersonalizada($nome = "visitante"){
    echo "Olá, $nome! bem=vindo ao PHP<br>";
}

saudacaopersonalizada(); //chamada sem argumento, usa o valor 
echo "<br>";
saudacaopersonalizada ("Carlos"); //chamada com argumento
   
   ?> 
</body>
</html>