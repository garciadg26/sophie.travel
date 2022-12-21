<?php

    if(!empty($_POST)){

        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $mensaje = $_POST["mensaje"];
        $recaptcha = $_POST['g-recaptcha-response'];
        $secret = "6LdadJQjAAAAANsGOcbV-f5_gB2nj8dAJwFdPCqI";

        if(!$recaptcha){
            echo "Por favor verifica el captcha";
        } else{
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha");
            var_dump($response);
        }

    }

?>