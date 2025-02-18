<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
<?php
    //superclasse
    class Animal{
 
        public function fazersom(){
            return "O animal faz um som <br>";
        }
    }
    //subclasse
    class Cachorro extends Animal{
        public function fazerSom(){
            return "AU AU AU AU<br>";
        }
    }  
 
    //outra subclasse
    class gato extends Animal{
        public function fazerSom(){
            return " MAUUUU MIAUUU <br>";
        }
   
    }
 
    //funcão para utilizar o polimorfismo
    function emitirSomAnimal(Animal $animal){
        echo $animal->fazerSom() . "<br>";
    }
 
    //cria objetos
    $cachorro1 = new Cachorro(NULL);
    $gato1 = new Gato(NULL);
    emitirSomAnimal($cachorro1);
    echo "<br>";
    emitirSomAnimal($gato1);






    ?>
</body>
</html>