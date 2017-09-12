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
        $body_user = "
            Gracias por registrarte para participar en los talleres.\r\n\r\n
            La dinámica es la siguiente:\r\n\r\n
            Como primer paso necesitamos conocer a los interesados en tomar los cursos, saber que horarios, nivel y tecnologías estan interesados para así poder formar grupos.\r\n\r\n
            Una vez que los grupos puedan formarse con mínimo 5 participantes es cuando entraremos en contacto contigo para proponerte cursar el taller.\r\n\r\n
            Dependiendo del nivel elegido, estos talleres estan enfocados en que aprendas las técnicas, metodologías, herramientas y lenguajes requeridos por la mayoria de empresas de desarrollo de software, especialmente en Guadalajara Jalisco, Leon, Queretaro, Monterrey y CDMX, así como empresas extranjeras.\r\n\r\n
            Te pedimos tengas paciencia en lo que se junta la cantidad de alumnos requeridos para abrir cada curso.\r\n\r\n
            ¡Esperamos pronto entrar en contacto contigo!
        ";
        $body_user = wordwrap($body_user, 70, "\r\n");
        
        mail("cesar_alonso_m_g@hotmail.com", "Contacto desde Software Insights TALLERES", utf8_decode($body), $headers); 
        mail($email, "Software Insights te agradece tu registro", utf8_decode($body_user), $headers); 

        print_r(json_encode(array('status' => true, 'msg' => "¡Gracias, tus datos se han enviado exitosamente, un correo se ha enviado a tu bandeja, pronto entraremos en contacto contigo!" )));
    }
