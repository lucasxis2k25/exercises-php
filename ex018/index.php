<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificadores de acesso</title>
</head>
<body>
    <?php 
    class Funcionario{
    //propriedade com diferentes modificadores de acessso
    public $nome;//pode ser acessado de qualquer lugar
    protected $salario; // pode ser acessado apenas dentro da superclasse e das subclasses
    private $cpf; //pode ser acessado apenas dentro da classe


    //contrutor para inicializar os valores
    public function __construct($nome, $salario, $cpf){
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cpf = $cpf;

    }
    
    //método para exibir os nome do funcionário
    public function exibirnome(){
                   echo "Nome:  $this->nome  <br>";
    }

    //Método protegido para exibir o salário (somente para subclasses)
    protected function exibirSalario(){
                      echo "Salário: . $this->salario . <br>";
        }

    //Método privado para exibir o CPF (somente para a classe  Funcionario)

    private function exibirCpf(){
                   echo "CPF: . $this->cpf . <br>";


    }

    //Método público para chamar o metedo privado e protegido na propria classe

    public function exibirDetalhes(){
        $this->exibirnome();
        $this->exibirSalario();
        $this->exibirCpf();
    }

    }

   //Criando um instância da classe Funcionario
   $funcionario1 = new Funcionario ("Carlos silva", 7000, "123.456.789-00");

   //criando uma instância da classe Funcionario
   $funcionario1 = new Funcionario("Carlos Silva", 7000, "123.456.789-00");

   //acessando o nome diretamente (publico)
   $funcionario1 -> exibirnome();

   //acessando o salário diretamente (protegido)
   //$funcionario1 -> exibirSalario(); 

   //acessando o cpf diretamente (privado)

   //$funcionario1 -> exibirCpf(); //comentado porque gera erro

   //chamando o método publico que acesso todos os dados
   $funcionario1 -> exibirdetalhes();

   
    ?>
</body>
</html>