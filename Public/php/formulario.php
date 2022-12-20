<?php


    $nombre = $_POST["nombre"] ?? '';
    $correo = $_POST["correo"] ?? '';
    $telefono = $_POST["telefono"] ?? '';
    $mensaje = $_POST["mensaje"] ?? '';

    $respuesta = [];
    $bandera = true;

    //VALIDACION DE CAMPOS
    if($nombre == ""){
        $respuesta += ['nombre' => 'Ingresa un nombre'];
        $bandera = false;
    }
    if($correo == ""){
        $respuesta += ['correo' => 'Ingresa un correo'];
        $bandera = false;
    }
    if($telefono == ""){
        $respuesta += ['telefono' => 'Ingresa un telefono'];
        $bandera = false;
    }
    // if($mensaje == ""){
    //     $respuesta += ['mensaje' => 'Ingresa un mensaje'];
    //     $bandera = false;
    // }

    echo json_encode($respuesta);

    if($bandera){
        //ENVIAMOS EL FORMULARIO
        echo('DATOS ENVIADOS CON EXITO: ' . $nombre . $correo . $telefono . $mensaje);

        ob_start();   
        //VALIDACIÓN CAPTCHA
        $recaptcha = $_POST['g-recaptcha-response'];


        if($recaptcha != ''){
            $secret = "6LdadJQjAAAAANsGOcbV-f5_gB2nj8dAJwFdPCqI";
            $ip = $_SERVER['REMOTE_ADDR']; 
            $var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
            $array = json_decode($var, true);
            if($array['success'])
            {
            //TRUE
            //echo "soy robot";
            
            }else{
        
        
            //HEADER('Content-type: application/json');
            //header( "Location: ../gracias.html");

            //$nombre = @trim(stripslashes($_POST['name'])); 
            //$email = @trim(stripslashes($_POST['email'])); 
            //$tel = @trim(stripslashes($_POST['tel'])); 
            //$asunto = 'Tienes un nuevo registro de: Sophie'; 
            //$mensaje = @trim(stripslashes($_POST['message'])); 

            $email_from = $correo;

            $email_to = 'graphicrichart@gmail.com';
            

            $body = 'Nombre: ' . $nombre . "\n\n" . 'Email: ' . $correo . "\n\n" . 'Teléfono: ' . $telefono . "\n\n" . 'Mensaje: ' . $mensaje . "\n\n";

            $success = @mail($email_to, $asunto, $body, 'From: <'.$email_from.'>');
            
            echo json_encode($status);
            die;

            }
        }else{
            echo "rellene todos los campos";
        }



    }


?>