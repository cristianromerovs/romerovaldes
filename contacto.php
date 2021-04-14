<?php
    if (isset($_POST['enviar'])){
        $name = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $consulta = $_POST['consulta'];

        $mailTo= "contacto@romerovaldes.cl";
        $body = "Correo: ".$correo."\n"."Telefono: ".$telefono."\n"."Consulta: ".$consulta;
        $txt = "Recibiste una consulta de: ".$name;

        mail($mailTo, $txt, $body);
        header("Location: index.html?mailsend");
    }
?>