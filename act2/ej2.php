<?php
    $items = [['pais'=>"España",
    'capital'=>"Madrid"],
    ['pais'=>"Francia",
    'capital'=>"Paris"],
    ['pais'=>"Italia",
    'capital'=>"Roma"],
    ['pais'=>"Alemania",
    'capital'=>"Berlin"],
    ['pais'=>"Portugal",
    'capital'=>"Lisboa"],
    ['pais'=>"Grecia",
    'capital'=>"Atenas"],
    ['pais'=>"Holanda",
    'capital'=>"Amsterdam"],
    ['pais'=>"Belgica",
    'capital'=>"Bruselas"]];
    if (isset($_POST['submit'])){
        $aciertos=0;
        foreach($items as $item){
            if ($_POST[$item['pais']] == $item['capital']){
                $aciertos++;
            }
        }
        echo "Has acertado ".$aciertos." capitales ";
        $fallos=0;
        foreach($items as $item){
            if ($_POST[$item['pais']] != $item['capital']){
                $fallos++;
            }
        }
        echo "Has fallado ".$fallos." capitales ";
    }
    ?>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="ej2.php" method="post">
            <?php foreach($items as $item){
                echo "<label for='".$item['pais']."'>".$item['pais']."</label>";
                echo "<input type='text' name='".$item['pais']."'>";
                echo "<br>";
            }?>
            <input type="submit" value="Enviar" name="submit">
        </form>
    </body>