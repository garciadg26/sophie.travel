<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Sophie Travel | Agencia de viajes</title>
    <?php include('Public/include/head.php') ?>
    <!-- Google Captcha v3 -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <?php include('Public/include/nav.php') ?>

    <!-- ENCABEZADO -->
    <section id="encabezado_contacto" class="encabezado">
        <div class="row">
            <div class="col-md-12">
                <h2 class="tit_encabezado">Contacto</h2>
            </div>
        </div>
    </section>

    <!-- CONTACTO -->
    <section id="form_contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="tit_base home__photo1">Cotizaciones</h1>
                    <p class="txt home__photo2">¿Tienes dudas de algún producto? Llena el siguiente formulario y nos pondremos a la brevedad conigo.</p>
                    <p class="txt home__photo3">O si lo prefieres llámanos o escríbenos a:</p>
                    <ul class="list_contact_form home__photo4">
                        <li><a href="mailto:contacto@sophie.travel"><i class="icon ion-ios-mail-outline"></i> contacto@sophie.travel</a></li>
                        <li><a href="tel:4428108085"><i class="icon ion-ios-call-outline"></i> (442) 810 8085</a></li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <form class="formulario" id="formulario">
                        <div class="row form_row1">
                            <div class="col-md-12">
                                <!-- Grupo: Nombre -->
                                <div class="formulario__grupo" id="grupo__nombre">
                                    <div class="formulario__grupo-input">
                                        <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre completo"> 
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El Nombre tiene que ser de 4 a 16 dígitos y solo puede contener letras.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row form_row2">
                            <div class="col-md-6">
                                <!-- Grupo: Correo Electronico -->
                                <div class="formulario__grupo" id="grupo__correo">
                                    <div class="formulario__grupo-input">
                                        <input type="email" class="formulario__input" name="correo" id="correo" placeholder="Email">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Grupo: Teléfono -->
                                <div class="formulario__grupo" id="grupo__telefono">
                                    <div class="formulario__grupo-input">
                                        <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="Whatsapp">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 12 dígitos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row form_row3">
                            <div class="col-md-12">
                                <textarea class="formulario__input" name="mensaje" id="mensaje" placeholder="Comentario o duda"></textarea>
                            </div>    
                        </div>
                        <div class="row form_row4">
                            <div class="col-md-12">
                                <div class="formulario__mensaje" id="formulario__mensaje">
                                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor llena el formulario correctamente. </p>
                                </div>
                                <div class="formulario__captcha" id="formulario__mensaje-captcha">
                                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Captcha no verificado. </p>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LdRy5UjAAAAAO0DvzoM5JrynToyXm0r7eVrbqNS"></div>
                                <input type="submit" value="Enviar">
                                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="Public/js/form.js?ver=1.2.0"></script>

<?php include('Public/include/whatsapp.php'); ?>
<?php include('Public/include/foot.php'); ?>
<?php include('Public/include/footer.php'); ?>