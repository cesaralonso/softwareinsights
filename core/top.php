<?php

    define('DS','/');
    $hostName = $_SERVER['HTTP_HOST'];
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https://' ? 'https://' : 'http://';
    define ('APP_PATH', $protocol.$hostName.'/softwareinsights/');
