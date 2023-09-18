<?php
// Verificar por qué método se envió la petición
if(isset($_GET['name'])) {
    $request = [
        'name' => $_GET['name'],
    ];
}
else {
    $request = [
        'name' => $_POST['name'],
    ];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar</title>
</head>
<body>
    <h1>El nombre del usuario es: <?php echo $request['name'] ?></h1>
</body>
</html>
