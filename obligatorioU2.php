<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Actividad Practica Obligatoria Unidad 2 PHP</h2>
</body>
</html>


<?php
    $persona=array(
        "nombre"=> "Dominique",
        "apellido" => "Bonnefil",
        "edad" => "61",
        "hobbie" => "Caminar, manualidades y pasteleria",
        "editor" => "Visual Studio Code",
        "sistema" => "Windows 10");

    echo "Nombre: ", $persona ["nombre"], "<br>";
    echo "Apellido: ", $persona ["apellido"], "<br>";
    echo "Edad: ", $persona ["edad"], "<br>";
    echo "Hobbies: ", $persona ["hobbie"], "<br>";
    echo "Editor preferido: ", $persona ["editor"], "<br>";
    echo "Sistema que usa: ", $persona ["sistema"], "<br>";

    echo "<pre>";
    var_dump($persona);
    echo "</pre>";
?>