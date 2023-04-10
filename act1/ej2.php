<?php
    if(isset($_POST)){
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        if($pass1 == $pass2){
            echo "Las contraseñas coinciden";
        }else{
            echo "Las contraseñas no coinciden";
        }
    }
?>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="ej2.php" method="post">
            <input type="text" name="pass1">
            <input type="text" name="pass2">
            <input type="submit" value="Enviar">
        </form>
    </body>