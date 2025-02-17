<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>
    <?php 
    class Moto {
          //Propriedades
        public $marca;
        public $modelo;
        public $ano;

        //Método (função dentro da classe)
        public function exibirDetalhes(){
             echo "marca: " . $this -> marca . "<br>";
             echo "modelo: " . $this -> modelo . "<br>";
             echo "ano: " . $this -> ano . "<br>";
        }

    }
    
    //Instanciando 
    $minhaMoto = new Moto();
    $minhaMoto -> marca = "Honda";
    $minhaMoto -> modelo = "CB 500";
    $minhaMoto -> ano = 2018;
    
    $minhaMoto->exibirDetalhes(); //exibe os valores

echo "<br>";

//nova classe
Class pessoa {
    public $nome;
    public $idade;

    public function saudacao(){
        echo "Ola, meu nome é " . $this -> nome . "e tenho " . $this -> idade . " anos";
        
    }
}
$joao = new pessoa();
$joao -> nome = "João ";
$joao -> idade = 30;

$joao -> saudacao(); //exibe a saudação com os dados do joão


    ?>
</body>
</html>