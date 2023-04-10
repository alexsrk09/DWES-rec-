<?php
// Array con comunidades autónomas y provincias
$comunidades = array(
    "Andalucía" => array("Almería", "Cádiz", "Córdoba", "Granada", "Huelva", "Jaén", "Málaga", "Sevilla"),
    "Aragón" => array("Huesca", "Teruel", "Zaragoza"),
    "Asturias" => array("Asturias"),
    "Baleares" => array("Baleares"),
    "Canarias" => array("Las Palmas", "Santa Cruz de Tenerife"),
    "Cantabria" => array("Cantabria"),
    "Castilla-La Mancha" => array("Albacete", "Ciudad Real", "Cuenca", "Guadalajara", "Toledo"),
    "Castilla y León" => array("Ávila", "Burgos", "León", "Palencia", "Salamanca", "Segovia", "Soria", "Valladolid", "Zamora"),
    "Cataluña" => array("Barcelona", "Girona", "Lleida", "Tarragona"),
    "Comunidad Valenciana" => array("Alicante", "Castellón", "Valencia"),
    "Extremadura" => array("Badajoz", "Cáceres"),
    "Galicia" => array("A Coruña", "Lugo", "Ourense", "Pontevedra"),
    "La Rioja" => array("La Rioja"),
    "Madrid" => array("Madrid"),
    "Murcia" => array("Murcia"),
    "Navarra" => array("Navarra"),
    "País Vasco" => array("Álava", "Guipúzcoa", "Vizcaya")
);

// Obtener una comunidad aleatoria
$comunidad_aleatoria = array_rand($comunidades);
$provincias = $comunidades[$comunidad_aleatoria];

// Verificar si se ha enviado el formulario
if (isset($_POST['submit'])) {
    $aciertos = 0;
    $fallos = 0;
    foreach ($provincias as $provincia) {
        // Verificar si la provincia fue seleccionada
        if (isset($_POST[$provincia])) {
            $aciertos++;
        } else {
            $fallos++;
        }
    }
    // Mostrar resultados
    echo "Aciertos: " . $aciertos . "<br>";
    echo "Fallos: " . $fallos . "<br>";
} else {
    // Mostrar formulario
    echo "<h3>Selecciona las provincias que pertenecen a " . $comunidad_aleatoria . "</h3>";
    echo "<form method='post'>";
    foreach ($provincias as $provincia) {
        echo "<input type='checkbox' name='" . $provincia . "' value='" . $provincia . "'> " . $provincia . "<br>";
    }
    echo "<br><input type='submit' name='submit' value='Enviar'>";
    echo "</form>";
}

// Mostrar opciones correctas
echo "<br><a href='?opciones_correctas=true'>Ver opciones correctas</a>";
if (isset($_GET['opciones_correctas'])) {
    echo "<br><h3>Opciones correctas:</h3>";
    foreach ($provincias as $provincia) {
        echo $provincia . "<br>";
    }
}
?>