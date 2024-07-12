<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Registro</title>
</head>
<body>
    <form id="registration-form" method="post" action="registrar.php"> 
        <h1 id="form-title">¡Regístrate!</h1>
        <div class="form-group">
            <label for="name" id="name-label">Nombre completo</label>
            <input type="text" id="name" name="name" placeholder="Nombre Completo" required>
        </div>
        <div class="form-group">
            <label for="email" id="email-label">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="contact" id="contact-label">Número de contacto</label>
            <input type="text" id="contact" name="contact" placeholder="Número de teléfono" required>
        </div>
        <div class="form-group">
            <label for="location" id="location-label">Dirección</label>
            <input type="text" id="location" name="location" placeholder="Barrio, municipio, departamento" required>
        </div>

        <div class="Conten">
        <div><input type="checkbox" name="terminos" value="yes" id="terminos" required/><label for="terminos">Acepto los terminos y condiciones</label></div>
        <div class="register"><input type="submit" id="submit-button" name="register" value="Registrarse"></div>
        </div>
            
        
        
    </form>
    <?php
    include("registrar.php");
    ?>
</body>
</html>