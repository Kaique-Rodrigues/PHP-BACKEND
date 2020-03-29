

<?php
        echo "<h1>For</h1><br>";
    
?>

<hr>


<?php
    echo "<h3>For encremento</h3><br> "; 
    // FOR de encremento 
for ($i=0; $i<=5; $i++){ 
    echo "tabuada do :" . $i ."<br>";
}

?>

<hr>

<?php
     echo "<h3>For decremento</h3><br>";
    // For de decremento
for ($i=5; $i >=0; $i--){
    echo "Contagem regressiva: ". $i . "<br>";
}
?>

<hr>

<?php       
        // count diz a quantidade de itens dentro do nosso array
$Lista = ["Pão", "Leite", "Carne", "Arroz"];
$Lista[] = "Feijão";
    echo "Lista de Compras <br>";

    for ($i=0; $i<count($Lista); $i++){
        echo $Lista[$i]."<br>";
    }
?>
<hr>

<?php

    echo "<h1>WHILE E DO WHILE</h1><br>";


echo"<h3>While utilizando incremento</h3><br>";    
    //While utilizando incremento
    
        $i = 1;
        while ($i <= 10) {
            echo $i . "<br>";
            $i++;
        }

?>

<hr>

    <?php
    echo"<h3>While utilizando decremento</h3><br>";    
    //While utilizando decremento
    
        $i = 10;
        while ($i >= 1) {
            echo $i . "<br>";
            $i--;
        }


    ?>

<hr>

    <?php
    echo"<h3>DO While utilizando incremento</h3><br>";    
    //Do While utilizando incremento//
    
        $i = 1;
        do {
            echo $i . "<br>";
            $i++;
        } while ($i <= 10);
?>

<hr>


<?php
    
    echo"<h3>DO While utilizando decremento</h3><br>";    
    //Do While utilizando decremento

        $i = 10;
        do {
            echo $i . "<br>";
            $i--;
        } while ($i >= 1);

        ?>

        <hr>

        <?php
        

            echo "<h1>Keywords</h1><br>";

          ?>

          <hr>

          <?php

            echo "<h3>break</h3><br>";

            // break corta o loop
            for ($i=0; $i<5; $i++ ){

                if($i == 3){
                break;
                }
                echo "valor do i :" . $i . "<br>";
            }

        ?>

<hr>

            <?php

            echo "<h3>Continue</h3><br>";

            // Continue pula uma condição
            for ($i=0; $i<5; $i++ ){

                if($i == 3){
                Continue;
                }
                echo "valor do i :" . $i . "<br>";
            }

            ?>




           <?php

            //echo "<h3>Return</h3><br>";
            
            // RETURN , retorna um valor ou sai da execusão
           // for ($i=0; $i<5; $i++ ){
                
             //   if($i == 3){
               //     Return;
                //}
                // echo "valor do i :" . $i . "<br>";
            // }
            
            ?>

<hr>

            <?php
            
            //echo "<h3>Exit</h3><br>";
            
            // Exit corta a execusão do código
            //for ($i=0; $i<5; $i++ ){
            
            //    if($i == 3){
              //  Exit;
              //  }
                //echo "valor do i :" . $i . "<br>";
            //}
            
            //echo "NÃO Vai aparecer na tela pois o exit corta a execusão";
            
           ?>


            <?php
            
               echo  "<h1>foreach</h1><br>";


                $Pessoas = ["Nome"=>"Kaique", "Sobrenome"=>"Alves", "Idade"=> 20];


                foreach ($Pessoas as $key=> $Pessoa){

                    echo $key. " = " . $Pessoa . "<br>";

                }

    ?>

<hr>

        