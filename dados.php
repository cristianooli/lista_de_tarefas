<?php

   
    $email = $_GET["email"];
    $password = $_GET["password"];
    $nome = $_GET["nome"];
    $sobrenome = $_GET["sobrenome"];
    $idade = $_GET["idade"];
    
    $full_name = "$nome $sobrenome";
    var_dump($full_name);
    


?>

<html>
    <head>
        <title>Dados</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <p>Usuário Logado: <?php  echo $nome; ?> - <?php  echo $email; ?></p>
        <h1>Recebendo dados</h1>
        <p>
            E-mail:  <?php  echo $email; ?>
        </p>
        <p>
            Senha:  <?php  echo $password; ?>
        </p>
        <p>
            Nome:  <?php  echo $nome; ?>
        </p>
        
        <p>
            Sobrenome:  <?php  echo $sobrenome; ?>
        </p>
        
         <p>
            Nome Completo:  <?php  echo $full_name; ?>
        </p>
        
        <p>
            Idade:  <?php  echo $idade; ?>
        </p>
        <hr>
        <?php 
          $email = "hacked@hacked.com"; 
          
          
        ?>
        <p>
            E-mail:  <?php  echo $email; ?>
            
        </p>
         
    </body>
    
</html>

