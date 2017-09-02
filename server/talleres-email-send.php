<?php
    /** Envía un email **/
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $comments = isset($_POST['comments']) ? $_POST['comments'] : null;
    $nivel = isset($_POST['nivel']) ? $_POST['nivel'] : null;
    $tecnologias = isset($_POST['tecnologias']) ? $_POST['tecnologias'] : null;
    $horario = isset($_POST['horario']) ? $_POST['horario'] : null;
    $dias = isset($_POST['dias']) ? $_POST['dias'] : null;

    if ($name === null || $email === null ||  $phone === null ||  $comments === null) {
        print_r(json_encode(array('status' => false, 'msg' => "¡Debes llenar todos los campos!" )));
    } else {
        $body = "
            Nombre: $name\r\n,
            Email: $email\r\n,
            Teléfono: $phone\r\n
            Nivel: $nivel\r\n
            Tecnologías: $tecnologias\r\n
            Horario: $horario\r\n
            Días: $dias\r\n
            Mensaje: $comments\r\n
        ";
        $body = wordwrap($body, 70, "\r\n");
        $headers = "From: contacto@softwareinsights.com.mx" . "\r\n" .
                    "CC: flor@softwareinsights.com.mx";
        mail("cesar_alonso_m_g@hotmail.com", "Contacto desde Software Insights TALLERES", utf8_decode($body), $headers); 

        print_r(json_encode(array('status' => true, 'msg' => "¡Gracias, tus datos se han enviado exitosamente, pronto entraremos en contacto contigo!" )));
    }
