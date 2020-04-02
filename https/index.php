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

    echo "<p>" . $_GET['nome'] . " " . $_GET['sobrenome'];

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
    
    <hr>
    
    <?php 

        echo "<h1>Persistência</h1><br>";

    
    ?>
    
   <?php 


            // Persistência atribuir o que o usuario digitou pelo value,para qualquer erro suas informções
            // volte automaticamente

            if($_GET != null){
                $nome = $_GET["nome"];
                $sobrenome = $_GET["sobrenome"];
                $idade = $_GET["idade"];
                $prof = $_GET["profissao"];
            }else{
                $nome = " ";
                $sobrenome = " ";
                $idade = " ";
                $prof = " ";
            }
        
                $a_prof = ["professor", "programador", "analista"];
   
   ?>



        <form action="index.php" method="GET">
        <input type="text" name="nome" value="<?=$nome?>">
        <input type="text" name="sobrenome" value="<?=$sobrenome?>">
        <input type="number" name="idade" value="<?=$idade?>">
        

        <select name="profissao">
        <option default  value="Escolha uma profissao">
        Escolha uma Profissão
        </option>
        <?php 
        foreach($a_prof as $valor):?>
        <?php if($prof == $valor){ ?>
            <option selected value="<?=$valor?>"><?php=$valor?></option>
        <?php }else{ ?>
            <option  value="<?=$valor?>"><?php=$valor?></option>
        <?php } endforeach; ?>
        
        
        
        
        
        </select>
        
        
        <button type="submit" name="Enviar">Enviar</button>
        
        </form>

<hr> -->



    <?php 


            echo "<h1>Validação</h1><br>";




    ?>
    <?php  

            
            if ($_POST != null) {
        
            if (strlen($_POST['nomeCompleto']) <=7) {
                echo "Sua Senha precisa ter no minímo 8 caracteres<br>";
            }
            
            
            if (strlen($_POST['usuario']) < 8) {
                echo "Sua Senha precisa ter no minímo 8 caracteres<br>";
            }
          
            if (is_numeric($_POST['senha']) == false) {
                    echo "Sua Senha deverá ser preenchido por apenas números<br>";
            }
         
             if (filter_var($_POST['senha'],FILTER_VALIDATE_EMAIL) == FALSE) {
                echo "Verifique o formato do seu email<br>";
             }    
             
            }
    

        echo "<br>";
    ?>


            <?php 
            
                $nomeCompleto = $_POST['nomeCompleto'];
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];
                $email = $_POST['senha'];
            
            
            
            
            
            ?>


   
    
    
    
            <form action="index.php" method="POST">
            <label for="nomeCompleto">Nome</label><br>
            <input type="text" name="nomeCompleto" value="<?=$nomeCompleto?>"><br>
            <label for="usuario">usuario</label><br>
            <input type="text" name="usuario" value="<?=$usuario?>"><br>
            <label for="senha">Senha</label><br>
            <input type="password" name="senha" value="<?=$senha?>"><br>
            <label for="email">Email</label><br>
            <input type="text" name="email" value="<?=$email?>"><br>

            <button type="submit" name="enviar">Enviar</button>
            </form>
    
    
    
    

