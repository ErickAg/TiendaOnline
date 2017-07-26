<!DOCTYPE html>
<html lang="esp-mx">
<head>
    <meta charset="UTF-8">
    <title>Softcaribe | Contáctenos</title>
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<header>
    <div class="contenedor">
        <img src="img/SoftCaribe.png" alt="Softcaribe" id="logo">
        <input type="checkbox" id="menu-bar">
        <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="http://stepsmexico.com/softcaribe/">Tienda Online</a>
                </nav>
            </div>
</header>
<body id="body-contacto">
    <form id="form-contacto" action="actions/enviar.php" method="post">
        <h2 id="h2-contacto">Contacto</h2>
        <input type="text" name="nombre" placeholder="Nombre" id="input-contacto" required>
        <input type="email" name="correo" placeholder="Correo" id="input-contacto" required>
        <input type="text" name="telefono" placeholder="Teléfono" id="input-contacto" required>
        <textarea name="mensaje" id="txtarea" cols="30" rows="10" id="input-contacto" placeholder="Escriba aquí su mensaje" required></textarea>
        <input type="submit" value="ENVIAR" id="boton">
    </form>
</body>
</html>