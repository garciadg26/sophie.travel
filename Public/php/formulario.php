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

        if(!empty($_POST)){


            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $telefono = $_POST["telefono"];
            $asunto = 'Tienes un nuevo registro de: Sophie Travel'; 
            $mensaje = $_POST["mensaje"];
            $recaptcha = $_POST['g-recaptcha-response'];
            $secret = "6LdRy5UjAAAAAOU5LWOdXNETvPHxPflF7D5aRDGs";

            if(!$recaptcha){
                echo "Por favor verifica el captcha";
            } else{
                $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha");
                var_dump($response);
                $array = json_decode($response, true);
                if($array["success"]){
                    echo "<h2>Gracias</h2>";

                    //ENVIAR AL FORMULARIO
                    // $nombre = @trim(stripslashes($_POST['name'])); 
                    // $email = @trim(stripslashes($_POST['email'])); 
                    // $tel = @trim(stripslashes($_POST['tel'])); 
                    // $asunto = 'Tienes un nuevo registro de: Doux Amour Reposteria'; 
                    // $mensaje = @trim(stripslashes($_POST['message'])); 

                    // $header = "Content-type: text/html; charset=".$encoding." \r\n";
                    // $header .= "From: ".$nombre." <".$correo."> \r\n";

                    $email_from = $correo;

                    // Varios destinatarios
                    $email_to = 'graphicrichart@gmail.com';
                    /*$para  = 'graphicrichart@gmail.com' . ', '; // atención a la coma
                    $para .= 'garcia_richgraphic@hotmail.com';*/
                    


                    $body = 'Nombre: ' . $nombre . "\n\n" . 'Email: ' . $correo . "\n\n" . 'Teléfono: ' . $telefono . "\n\n" . 'Asunto: ' . $asunto . "\n\n" . 'Mensaje: ' . $mensaje . "\n\n";

                    $success = @mail($email_to, $asunto, $body, 'From: <'.$email_from.'>');
                    
                    echo json_encode($status);
                    die;
                    //FIN DEL FORMULARIO

                } else{
                    echo "<h3>Error al comprobar Captcha</h3>";
                }
            }


        }

    }


?>