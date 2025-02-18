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
    //destrutor:chamado quando o objeto é destruido
    public function __destruct(){
        echo "Produto '$this->nome' destruido! <br>";
    }

  //Método para exibir os detalhes do produto 
    public function exibirDetalhes(){
    echo "nome: $this->nome, preço: $this->preco <br>";
    }

    }

   //criando um objeto
   $produto1 = new Produto("Camisa", 39.90); //contrutor é chamado aqui
   $produto2 = new Produto("Tenis", 279.90); //contrutor é chamado aqui
   $produto1-> exibirDetalhes();
   $produto2-> exibirDetalhes();

   //quando o script termina, ou o objeto sai de escopo, o destrutor é chamado
   unset($produto1);

   //mais uma classe construct e destruct

   class ConexaoBanco{
   private $conexao;

   //coonstrutor:simula abrir a conexão com o banco
   public function __construct(){
   $this->conexao = "Conexão com o banco de dados aberta!";
   echo $this->conexao . "<br>";
   }

   //destrutor: simula fechar a conexão com o banco
   public function __destruct(){
    echo "Conexão com o banco de dados fechada! <br>";
   }
   }

   //criando um objeto de conexão
   $conectado = new ConexaoBanco(); //Construtor é chamado aqui

  unset($conexão); //Destrutor é chamado aqui


?> 
</body>
</html>