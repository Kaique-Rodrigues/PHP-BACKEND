<?php

//exibir na tela utiliza o echo, . para concatenar

echo '<h1>Variaveis</h1>';

$nome = "Kaique Alves";
$idade = 20;
$tamanho = 21.5;
$maior = false;
$xVariavel = null;




echo $nome . " "."tem a idade de : " . $idade ."<br>";

// var_dump imprimi variaveis para os desenvolvedores

    var_dump($nome)."<br>"; // string = texto
    var_dump($idade)."<br>"; // int = número inteiro
    var_dump($tamanho)."<br>"; // float = número decimal
    var_dump($maior)."<br>"; // bool = valor boleano = poder ser apenas true ou false 
    var_dump($xVariavel)."<br>"; // NULL = para trabalhar com valor Nulo , NÃO COLOQUE ""



?>

<hr>

<?php
        echo "<h1>Arrays </h1>";

    $lista = ["Kaique", "Alves", 20.9, true , false]; // posição inicial sempre será 0
    $lista[] = "milan"; // incluido um valor dentro do array sendo esse valor o ultimo

    echo "<pre>";
    //var_dump($lista);

    echo $lista[2];


?>

<hr>

<?php
    echo "<h1>Arrays Associativos</h1>";

    $dados = ["nome"=>"Kaique", "Sobrenome"=>"Alves", "idade"=> 20,"Maior"=> true,"cores"=> ["võ"=>"Azul", "pai"=>"Vermelho", "filho"=>"Preto", "Branco"]];

        var_dump($dados);


?>

<hr>

<?php

    echo "<h1>Opeadores</h1>";

   $numero1 = 10;
   $numero2 = 20;

   
echo $resultado1 =  $numero1 + $numero2. "<br>"; //Adição
 echo  $resultado2 = $numero1 - $numero2. "<br>";; //Subtração   
echo $resultado3 = $numero1 * $numero2. "<br>"; // Multiplicação
echo $resultado4 = $numero1 / $numero2. "<br>"; // Divisão
echo $resultado5 = $numero1 % $numero2. "<br>"; // Resto da Divisão
echo  $resultado6 = $numero1 ** $numero2. "<br>"; // Potenciação
?>

<hr>
<?php
     echo "<h1>Condicionais</h1>". "<br>";

echo "<h3>IF e Else</h3><br>"; // A condição deve ser True ou Flase 

    $diaEnsolarado = true;

    if($diaEnsolarado == true){
        echo "Bora pra praia !!!" . "<br>";
    }else{
        echo "Cuidado com a chuva :(". "<br>";
    
}
    echo "<h3>Else if</h3>". "<br>";
    $idade = 72;

    if($idade < 16){
        echo "Não pode votar". "<br>";
    } else if ($idade == 16 && $idade == 17 || $idade > 70){
        echo "Voto opcional" . "<br>";
    }else if ($idade > 18 || $idade < 70){
        echo "Voto Obrigatório". "<br>";
    }

    echo "<h3>If ternário</h3>". "<br>"; // O if ternário é um operador que retorna um valor

    $numeroA = 32;
    $numeroB = 58;

    $Maior = $numeroA > $numeroB ? $numeroA : $numeroB;
    echo $Maior. "<br>";


    echo "<h3>Switch</h3>". "<br>";

    $numero = 0;

    switch ($numero){
        case 1:
        echo "O Número é igual a 1". "<br>";
    break;
    case 2:
    echo "O Número é igual a 2". "<br>";
break;
    default:
    echo "O Número é diferente de 1 e 2". "<br>";
    break;
    }

?>

