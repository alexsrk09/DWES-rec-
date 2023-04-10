<?php
if(isset ($_POST["forma"]) &&  $_POST["forma"]){
    switch ($_POST["forma"]){
        case "circulo":
            echo "<div style='width:100px; height:100px; border-radius:50px; background-color:".$_POST["color"]."'></div>";
            break;
        case "rectangulo":
            echo "<div style='width:100px; height:100px; background-color:".$_POST["color"]."'></div>";
            break;
        case "cuadrado":
            echo "<div style='width:100px; height:100px; background-color:".$_POST["color"]."'></div>";
            break;
    }
}
?>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="ej5.php" method="post">
            <label for="circulo">circulo</label>
            <input type="radio" name="forma" value="circulo">
            <label for="rectangulo">rectangulo</label>
            <input type="radio" name="forma" value="rectangulo">
            <label for="cuadrado">cuadrado</label>
            <input type="radio" name="forma" value="cuadrado">
            <br>
            <label for="color">color</label>
            <input type="text" name="color">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>