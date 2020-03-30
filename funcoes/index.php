<?php 
        
        echo "<h1>Funções</h1><br>";


        // invocando a palavra dentro de funções
        function comprimentar(){

            echo "olá mundo!<br>";
        }

        echo "Antes<br>";
        comprimentar();  // primeiro echo "antes" depois executa a função e depois echo "depois"
        echo "Depois<br>";
?>


<hr>


<?php
        function prova(){

            return "estudar<br>";

            echo "teste depois do return"; //echo  não irá funcionar,  pois qualquer  coisa depois do return não ira funcionar
        }

        prova();

        $palavra = prova();

        echo $palavra;

?>

<hr>

        <?php 

            echo "<h3>Funções com parametro</h3><br>";

            function nome ($nome, $sobrenome){
            echo "olá $nome $sobrenome";

            }

            nome("Kaique","Alves");
                   
        
        ?>



        <?php 
            // mesmo que o de cima só que usando o RETURN

          //  function nome ($nome, $sobrenome){
          //  return "olá $nome $sobrenome";

        //    }

        //    $var = nome("Kaique","Alves");
        //   echo $var;


        ?>

    <hr>


        <?php 
        
            function id ($name, $apelido = 'Não tem apelido '){ // se não colocar apelido irá aparecer "não tem apelido"
                echo "olá $name $apelido";    
            }

            id("kaique");
            
        
        
        ?>

    <hr>


    <?php 
    
           // Não irá redenrizar pois variavel $nome está em um contexto global dentro da function é um contexto local
           // logo vemos que dentro da function tem um contexto e fora da function tem outro contexto  

           //$nome = "Kaique";

           // function quemE(){
           //     echo $nome
        //    }

          //  quemE()
    
    ?>


        <?php 

            echo "<h3>Função 2</h3><br>";

        // Tomando exemplo do código de cima o certo seria fazer isso ....
        function quemE(){
        $nome = "Kaique";
        echo $nome;
        }

        quemE();
    ?>

    <hr>

    <?php 
    

    // com a palavra global conseguimos dentro de uma function pegar uma variavel global
    // NÃO É INDICADO FAZER ISSO POIS SEU CÓDIGO PODE FICAR CONFUSO
    $nome = "Kaique Alves";

     function nombre(){
         global $nome; 

         echo $nome;
     }

    nombre();
    
    ?>

<hr>

     <?php 


       // Tomando exemplo do código de cima o certo seria fazer isso ....
        function pessoa($id){
            echo $id;
        }

        pessoa($id);
        
     
     
     ?>

 <hr>

        <?php  
       
       echo  "<h1>Include e Require</h1><br>;"
       
       
       
       
       ?>




