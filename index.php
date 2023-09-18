<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <form action="procesar.php" method="get">
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
                Masculino:
            </label>
            
            <label>
                <input type="radio" name="genero" value="femenino">
                Femenino:
            </label>
        </div>

        <br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
