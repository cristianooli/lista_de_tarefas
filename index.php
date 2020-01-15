<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Tarefas</title>
    </head>
    <body>
        <h1>Lista de Tarefas</h1>
        <form action="dados.php">
            
            <p>
                <label>Nome:</label>
                <input type="text" name="nome"/>
            </p>
            
            <p>
                <label>Sobrenome:</label>
                <input type="text" name="sobrenome"/>
            </p>
            
            <p>
                <label>E-mail:</label>
                <input type="email" name="email"/>
            </p>
            
            <p>
                <label>Idade:</label>
                <input type="number" name="idade"/>
            </p>
                        
            <p>
                <label>Senha:</label>
                <input type="password" name="password"/>
            </p>
            
            
            <input type="submit" value="Entrar"/>  
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
