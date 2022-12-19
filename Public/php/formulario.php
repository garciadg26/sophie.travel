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
        echo('DATOS ENVIADOS CON EXITO' . $nombre . $correo . $telefono . $mensaje);

    }


?>