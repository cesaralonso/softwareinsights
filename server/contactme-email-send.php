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
        $headers = "From: $email" . "\r\n" .
                    "CC: cesar_alonso_m_g@hotmail.com";
        mail("contacto@softwareinsights.com.mx", "Contacto desde Software Insights CONTACTAR", $body, $headers); 

        print_r(json_encode(array('status' => true, 'msg' => "¡Pronto nos pondremos en contacto contigo!" )));
    }
