<?php
// Usando $_REQUEST no importa el verbo utilizado, se podrá acceder usando los name de los inputs
$request = [
    'name'    => $_REQUEST['name'],
    'edad'    => $_REQUEST['edad'],
    'genero'  => $_REQUEST['genero'],
    'roles'   => $_REQUEST['roles'],
    'mensaje' => $_REQUEST['mensaje'],
];

if(isset($_FILES['image'])) {
    $image = $_FILES['image']; // Recuperar el archivo
    $patch  = __DIR__."/assets/img/{$image['name']}"; // Definir el directorio donde se guardará

    move_uploaded_file($image['tmp_name'], $patch); // Mover el archivo del directorio temporal a la ruta deseada

    $avatar = "assets/img/{$image['name']}"; // Ruta del avatar
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
    <h1>Datos del usuario</h1>
    <ul>
        <li>Nombre: <?php echo $request['name'] ?></li>
        <li>Edad: <?php echo $request['edad'] ?></li>
        <li>Género: <?php echo ucwords($request['genero']) ?></li>
        <li>Roles: 
            <ol>
                <?php 
                    foreach ($request['roles'] as $rol) {
                ?>
                <li><?php echo ucwords($rol) ?></li>
                <?php } ?>
            </ol>
        </li>
        <li>
            Avatar: 
            <img src="<?php echo (isset($avatar)) ? $avatar : '' ?>" alt="Avatar del usuario">
        </li>
        <li>Mensaje: <?php echo $request['mensaje'] ?></li>
    </ul>
</body>
</html>
