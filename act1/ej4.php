<?php
    if (isset($_POST['submit'])){
        $max = 0;
        $max_item = 0;
        for($a=1; $a<=10; $a++){
            if ($_POST['item'.$a] > $max){
                $max = $_POST['item'.$a];
                $max_item = $a;
            }
        }
        echo ("el mejor valorado es: ".$max_item);

    }
?>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="ej4.php" method="post">
            <?php for($a=1; $a<=10; $a++){
                echo '
                    <label for="item'.$a.'">item'.$a.'</label>
                    <input type="radio" name="item'.$a.'" value="1">
                    <input type="radio" name="item'.$a.'" value="2">
                    <input type="radio" name="item'.$a.'" value="3" checked>
                    <input type="radio" name="item'.$a.'" value="4">
                    <input type="radio" name="item'.$a.'" value="5">
                    <br>
                ';
            }?>
            <input type="submit" value="Enviar" name="submit">
        </form>
    </body>