<?php 

echo "<h1>HTTPS</h1><br>";

?>

<hr>

<?php  


    echo "<h1>GET</h1><br>";

    // NO metódo get suas informações estarão aparecendo na url
    
    
    var_dump($_GET);


?>

    <form action="index.php"  method="GET">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <input type="number" name="idade">
    <button type="submit" name="button">Enviar</button>
    </form>

<?php 

    echo "<h1>" . $_GET['nome'] . " " . $_GET['sobrenome'];

?>

<hr>

<?php 
        // método POST não aparece na url as informações
    echo "<h1>POST</h1><br>";

    var_dump($_POST). "<br>";
    
    ?>

<form action="index.php"  method="POST">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <input type="number" name="idade">
    <button type="submit" name="button">Enviar</button>
    </form>

    <?php 
    



        if($_POST != null){
            echo $_POST['idade'];
        }else{
            echo "nada<br>";
        }
    
    ?>
