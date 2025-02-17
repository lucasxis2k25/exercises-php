<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrutor e Destrutor</title>
</head>
<body>
   <?php 
    class Produto{
    //atributos
    public $nome;
    public $preco;

     //contrutor: chamado quando o objeto é criada
    public function __construct($nome, $preco){
        $this -> nome = $nome;
        $this -> preco = $preco;
        echo "Produto '$this->nome'  criado com sucesso! <br>";
    }
    }

//criando um objeto
$produto1 = new Produto("Camisa", 39.90); //contrutor é chamado aqui
$produto2 = new Produto("Tenis", 279.90); //contrutor é chamado aqui


?> 
</body>
</html>