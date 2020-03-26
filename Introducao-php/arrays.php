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