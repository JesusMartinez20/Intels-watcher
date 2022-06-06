<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["mail"];

    //Crea la instancia
    $mail = new PHPMailer(true);

    try {
        //Configuraciones
        $mail->SMTPDebug = 0;                                   //2-Debug 0-Sin mensajes
        $mail->isSMTP();                                        //Usa SMTP
        $mail->Host       = 'smtp.gmail.com';                   //Servidor SMTP
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = '#############';                     
        $mail->Password   = '#############';                             
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        //Activa la autenticación TLS
        $mail->Port       = 465;                                    

        //Destinatarios
        $mail->setFrom('##############', 'Intels Watcher');
        $mail->addAddress($correo, $nombre." ".$apellido);     
        /*$mail->addAddress('ellen@example.com');               
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');*/

        //Contenido
        $id_rand=mt_rand(10000,99999);
        $mail->isHTML(true);                                  
        $mail->Subject = 'Reporte #'.$id_rand.' | Notificacion Intels Watcher';
        $mail->Body    = 
        '<link rel="stylesheet" href="index.css">

        <div class="about">
            <h2>Reporte con clave de informe #'.$id_rand.' generado correctamente</h2>
            <p class="about-text">
                Este correo es la confirmación de una denuncia generada en el portal de Intels Watcher. Si tu no generaste ninguna denuncia. por favor haz caso omiso de este correo.<br>

                Agradecemos enormemente su confianza al generar la denuncia. <br>
                <h3>La clave de informe asignada a su denuncia es: <b>#'.$id_rand.'</b></h3><br>
                Le suplicamos que conserve la <b>clave de informe</b> y la <b>contraseña</b> que ha asignado a su reporte en un lugar seguro. <br>
                Despues de 5 a 7 días hábiles use su clave de informe y contraseña para revisar su informe en busca de preguntas y avances.<br>
                Puede proporcionar información adicional en cualquier momento. <br> <br>

                **Nota: Este correo y portal forma parte del producto integrador de la materia Ética Profesional de la carrera de Ingenieria en Desarrollo de Software en CETI Colomos.<br>
                <b>No es de ninguna manera un sitio oficial de Intel.</b>
            </p>
        </div>';

        $mail->send();
        echo '<script>
        alert("El reporte ha sido generado correctamente");
        window.location.href="index.html";
        </script>';
    } catch (Exception $e) {
        echo "Error al enviar el correo. Mailer Error: {$mail->ErrorInfo}";
    }
?>