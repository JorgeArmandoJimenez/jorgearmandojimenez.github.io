<?php
include("con_db.php");

if (isset($_POST['register'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['location'])) {
        $name = mysqli_real_escape_string($conex, trim($_POST['name']));
        $email = mysqli_real_escape_string($conex, trim($_POST['email']));
        $contact = mysqli_real_escape_string($conex, trim($_POST['contact']));
        $location = mysqli_real_escape_string($conex, trim($_POST['location']));
        $fechareg = date('Y-m-d H:i:s');
        
        $consulta = "INSERT INTO datos (nombre, email, contacto, ubicacion, fecha_reg) VALUES ('$name', '$email', '$contact', '$location', '$fechareg')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            ?>
            <h3 class="ok">¡Tus datos han sido guardados correctamente!</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">¡Tus datos no han sido guardados!</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="bad">¡Por favor complete todos los campos!</h3>
        <?php
    }
}



?>