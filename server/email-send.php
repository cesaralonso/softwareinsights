<?php
if(count($_REQUEST) > 0) {
    if($_REQUEST['name'] === '' || $_REQUEST['email'] === '' ||  $_REQUEST['message'] === '') {
        echo "Por favor, llene todos los campos";
    } else {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
        $body = "
            Nombre: $name,
            Email: $email,
            Mensaje: $messsage
        ";
        if (mail("cesar_alonso_m_g@hotmail.com", "Contacto desde Software Insights Webpage",utf8_encode($body))) {
            echo "¡Mensaje enviado correctamente, pronto nos pondrémos en contacto con usted!";
        }
    }
}
