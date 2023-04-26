<?php
include 'conf.php';
session_start();
if(isset($_POST["submit"] )&& $_POST["submit"]=="Enviar"){
    if($_SESSION["piezas1"]==$_SESSION["piezas2"]){
        echo "Has ganado";
    }else{
        echo "Has perdido";
    }
    echo"<br>";
}
if(!isset($_SESSION["piezas1"])){
    $_SESSION["piezas1"]=rand(0, count($piezas)-1);
    $_SESSION["piezas2"]=rand(0, count($piezas)-1);
}
if(isset($_GET["f"])){
    if($_GET["f"]==1){
        $_SESSION["piezas1"]=rand(0, count($piezas)-1);
    }
    if($_GET["f"]==2){
        $_SESSION["piezas2"]=rand(0, count($piezas)-1);
    }
}
echo ('
    <a href="?f=1">
        <img src="'.$piezas[$_SESSION["piezas1"]]["img1"].'">
    </a>
    <br/>
    <a href="?f=2">
        <img src="'.$piezas[$_SESSION["piezas2"]]["img2"].'">
    </a>
');
echo '
    <form method="post">
        <input type="submit" value="Enviar" name="submit">
    </form>
';
?>