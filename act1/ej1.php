<?php
    if(isset($_POST)){
        $numMin = $_POST['numMin'];
        $numMax = $_POST['numMax'];
        $num = rand($numMin, $numMax);
        echo $num;
    }
?>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="ej1.php" method="post">
            <input type="number" name="numMin">
            <input type="number" name="numMax">
            <input type="submit" value="Enviar">
        </form>
    </body>