<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Switch</title>
</head>
<body>
    <?php 
    //Condicional switch
    $fruta = "banana";

    switch ($fruta){
      case "banana":
              echo "a fruta é uma banana!";
        break;
        case "maça":
              echo "a fruta é uma maça!";
        break;
        case "laranja";
              echo "a fruta é uma laranja!";
        break;
        default:
              echo "fruta desconhecida!";
        break;

    }
    
    echo "<br>";
    $cor = "verde";

    switch ($cor){
            case "vermelho":
            case "laranja":
                  echo "A cor é quente!";
            break;
            case "azul":
            case "verde":
                 echo "A cor é fria!";
            break;
            default:
                 echo "Cor desconhecida!";
            break;
    }

    echo "<br>";

    $numero = 3;

           switch (true){
           case  (is_numeric($numero) && $numero < 5):
           echo " o numero é menor  que 5.";
           break;

           
           case  (is_numeric($numero) && $numero == 5):
           echo " o numero é igual que 5.";
           break;

           case  (is_numeric($numero) && $numero > 5):
           echo " o numero é maior que 5.";
           break;

           default:
           echo "numero não identificado";
           break;

    }
    
    ?>
</body>
</html>