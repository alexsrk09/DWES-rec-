<?php
    if(isset($_POST["result"]) && $_POST["result"]){
        switch($_POST["operacion"]){
            case "+":
                $resultado=$_POST["num1"]+$_POST["num2"];
                break;
            case "-":
                $resultado=$_POST["num1"]-$_POST["num2"];
                break;
            case "*":
                $resultado=$_POST["num1"]*$_POST["num2"];
                break;
            case "/":
                $resultado=$_POST["num1"]/$_POST["num2"];
                break;
        }
        if($resultado==$_POST["result"]){
            echo "Correcto";
        }
        else{
            echo "Incorrecto";
        }
    }
    else{
        $num1= rand(0,9);
        $num2= rand(0,9);
        $operaciones=["+","-","*","/"];
        $operacion=$operaciones[rand(0,3)];
    }
?>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Calculadora</h1>
        <?php if(!isset($_POST["result"]) || !$_POST["result"]){ ?>
        <h2><?php echo $num1.$operacion.$num2 ?></h2>
        <form action="ej3.php" method="post">
            <input type="number" name="result">
            <input type="hidden" name="num1" value="<?php echo $num1 ?>">
            <input type="hidden" name="num2" value="<?php echo $num2 ?>">
            <input type="hidden" name="operacion" value="<?php echo $operacion ?>">
            <input type="submit" value="Enviar">
        </form>
        <?php } ?>
    </body>