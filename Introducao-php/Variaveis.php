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

?>