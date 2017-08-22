<?php
print_r($_POST);
echo (count($_POST) > 0);

if($_POST['name'] === '' || $_POST['email'] === '' ||  $_POST['message'] === '') {
    echo "Por favor, llene todos los campos";
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $body = "
        Nombre: $name,
        Email: $email,
        Mensaje: $messsage
    ";
    if (mail("cesar_alonso_m_g@hotmail.com", "Contacto desde Software Insights Webpage",utf8_encode($body))) {
        echo "¡Mensaje enviado correctamente, pronto nos pondrémos en contacto con usted!";
    }
}
