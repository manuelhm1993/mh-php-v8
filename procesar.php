<?php
// Usando $_REQUEST no importa el verbo utilizado, se podrá acceder usando los name de los inputs
$request = [
    'name'   => $_REQUEST['name'],
    'edad'   => $_REQUEST['edad'],
    'genero' => $_REQUEST['genero'],
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar</title>
</head>
<body>
    <h1>Datos del usuario</h1>
    <ul>
        <li>Nombre: <?php echo $request['name'] ?></li>
        <li>Edad: <?php echo $request['edad'] ?></li>
        <li>Género: <?php echo $request['genero'] ?></li>
    </ul>
</body>
</html>
