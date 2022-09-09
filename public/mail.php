<?php

	// $enlace = mysqli_connect("127.0.0.1", "grafiko2_ren", "Gr4f1c0_ga$", "grafiko2_ren");

	// if (!$enlace) {
	// 	echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	// 	echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
	// 	echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
	// 	exit;
	// }

	$nom = $_POST['nombreweb'];
	$cor = $_POST['correoweb'];
	$men = $_POST['mensajeweb'];

    $completo = "Mensaje desde un correo web: <br><br> Nombre: ".$nom."<br><br>Correo: ".$cor."<br><br>Mensaje: ".$men;

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'mailer/src/Exception.php';
	require 'mailer/src/PHPMailer.php';
	require 'mailer/src/SMTP.php';

	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = 'mail.serviciorenacimiento.com';                    // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'noreplay@serviciorenacimiento.com';                     // SMTP username
	    $mail->Password   = 'N0R3pl4y.';                               // SMTP password
	    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	    //Recipients
	    $mail->setFrom('noreplay@serviciorenamiento.com', 'Correo Web');
	    $mail->addAddress('contacto@serviciorenacimiento.com');     // Add a recipient
	    //$mail->addAddress('ellen@example.com');               // Name is optional
	    //$mail->addReplyTo('info@example.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    // Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Contacto Web';
	    $mail->Body    = $completo;
	    $mail->AltBody = $completo;

	    $mail->send();
	    header("Location: index.php?mail");
	} catch (Exception $e) {
	    echo "Message could not be sent.";
	}

?>
