<?php
if($_POST['name'] === '' || $_POST['email'] === '' ||  $_POST['message'] === '') {
    echo "Por favor, llene todos los campos";
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $body = "
        Nombre: $name\r\n,
        Email: $email\r\n,
        Mensaje: $messsage\r\n
    ";
    $body = wordwrap($body, 70, "\r\n");
    $headers = "From: contacto@softwareinsights.com" . "\r\n" .
                "CC: funeralelectrico@hotmail.com";
    mail("cesar_alonso_m_g@hotmail.com", "Contacto desde Software Insights Webpage", utf8_encode($body), $headers); 
    echo "¡Mensaje enviado correctamente, pronto nos pondrémos en contacto con usted!";
}
