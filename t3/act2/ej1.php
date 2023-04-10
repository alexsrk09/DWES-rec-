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
    $items = ["item1","item2","item3","item4","item5","item6","item7","item8","item9","item10"];
?>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="ej1.php" method="post">
            <?php foreach($items as $item){
                echo '
                    <label for="'.$item.'">'.$item.'</label>
                    <input type="radio" name="'.$item.'" value="1">
                    <input type="radio" name="'.$item.'" value="2">
                    <input type="radio" name="'.$item.'" value="3" checked>
                    <input type="radio" name="'.$item.'" value="4">
                    <input type="radio" name="'.$item.'" value="5">
                    <br>
                ';
            }?>
            <input type="submit" value="Enviar" name="submit">
        </form>
    </body>