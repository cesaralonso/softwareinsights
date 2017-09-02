<?php
    /** Envía un email **/
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;

    if ($phone === null) {
        print_r(json_encode(array('status' => false, 'msg' => "¡Debes dar un teléfono real!" )));
    } else {
        $body = "
            Teléfono: $phone\r\n
        ";
        $body = wordwrap($body, 70, "\r\n");
        $headers = "From: contacto@softwareinsights.com.mx" . "\r\n" .
                    "CC: flor@softwareinsights.com.mx";
        mail("cesar_alonso_m_g@hotmail.com", utf8_decode("Contacto desde Software Insights CONTÁCTAME"), utf8_decode($body), $headers); 

        print_r(json_encode(array('status' => true, 'msg' => "¡Pronto nos pondremos en contacto contigo!" )));
    }
