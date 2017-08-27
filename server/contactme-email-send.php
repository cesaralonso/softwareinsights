<?php
    /** Envía un email **/
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;

    if($name === null || $email === null ||  $phone === null ||  $comments === null) {
        print_r(json_encode(array('status' => false, 'msg' => "¡Debes dar un teléfono real!" )));
    } else {
        $body = "
            Teléfono: $phone\r\n
        ";
        $body = wordwrap($body, 70, "\r\n");
        $headers = "From: contacto@softwareinsights.com" . "\r\n" .
                    "CC: funeralelectrico@hotmail.com";
        mail("cesar_alonso_m_g@hotmail.com", "Contactar a posible cliente: $phone | Software Insights Webpage", $body, $headers); 

        print_r(json_encode(array('status' => true, 'msg' => "¡Pronto nos pondremos en contacto contigo!" )));
    }
