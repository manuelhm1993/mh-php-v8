<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <!-- Para enviar archivos es obligatorio el uso de POST y usar enctype -->
    <form action="procesar.php" method="POST" enctype="multipart/form-data">
        <label>
            Nombre:
            <input type="text" name="name" placeholder="Nombre">
        </label>

        <br>

        <label>
            Edad:
            <input type="number" name="edad" min="1" max="120" placeholder="Edad">
        </label>

        <br>

        <p>Género:</p>

        <div>
            <label>
                <input type="radio" name="genero" value="masculino" checked>
                Masculino
            </label>

            <label>
                <input type="radio" name="genero" value="femenino">
                Femenino
            </label>
        </div>

        <br>

        <p>Roles:</p>

        <div>
            <label>
                <!-- Se debe especificar que es un array -->
                <input type="checkbox" name="roles[]" value="administrador">
                Administrador
            </label>
            
            <label>
                <input type="checkbox" name="roles[]" value="editor">
                Editor
            </label>

            <label>
                <input type="checkbox" name="roles[]" value="moderador">
                Moderador
            </label>
        </div>

        <br>

        <label>
            Imagen:
            <br>
            <input type="file" name="image">
        </label>

        <br><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
