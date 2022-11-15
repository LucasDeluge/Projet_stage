<?php
session_start();
require_once './assets/pdo.php'

?>
<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_OFF; //DEBUG_SERVER          //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth = true;                                   //Enable SMTP authentication
  $mail->Username = 'deluge999@gmail.com';                     //SMTP username
  $mail->Password = 'uhknlnszfbmknpip';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
  $mail->Port = 587;

  //Recipients
  $mail->setFrom('deluge999@gmail.com', 'Mailer'); // expediteur
  // $mail->setFrom('lady@theo.com', 'Mailer'); // expediteur
  $mail->addAddress('deluge999@gmail.com', 'theo et lucas AFCI');     //Add a recipient
  // $mail->addAddress('non@pas.encore', 'theo et lucas AFCI');     //Add a recipient

  //Attachments
  //    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  // $mail->addAttachment('');    //Optional name

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'test';
  $mail->Body = 'This is the HTML message body <b>in bold!</b>';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  //envoi du mail
  $mail->send();

  echo 'Message has been sent';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>L'île de Solidarité contact</title>
  <link rel="stylesheet" href="./assets/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/bootstrap.min.css">
</head>

<body id="background-body">
  <header>
    <?php
    require_once './assets/nav.php'
    ?>
  </header>


  <h1 id="titre">Contact</h1>

  <form action="#" method="POST">
    <div id="container-form-aide">
      <!--nom -->
      <div class="form-group">
        <label for="exampleInputEmail1" id="text">Nom (obligatoire)</label>
        <input type="text" id="form-aide" aria-describedby="emailHelp" name="name" placeholder="votre nom" required>

      </div>
      <!--email -->
      <div class="form-group">
        <label for="exampleInputEmail1" id="text">Adresse mail (obligatoire)</label>
        <input type="email" id="form-aide" aria-describedby="emailHelp" name="email" placeholder="votre mail" required>

      </div>
      <!--objet -->
      <div class="form-group">
        <label for="exampleInputEmail1" id="text">Objet</label>
        <input type="text" id="form-aide" aria-describedby="emailHelp" name="objet" placeholder="objet de votre mail" required>

      </div>
    </div>

    <!--texte -->
    <div class="form-group">
      <div id="text">
        <label for="exampleTextarea">Votre message</label>
      </div>
      <div id="form-message-container">
        <textarea id="form-message" class="form-control" rows="3"></textarea>
      </div>
    </div>
    <!--bouton -->
    <div id="btn-aide-container">
      <button type="submit" id="btn-aide">Valider votre message</button>
    </div>

    <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
  </form>
  </section>
  <script src="https://www.google.com/recaptcha/api.js?render=6LeEiKIgAAAAAJYQrjb8ilZIxYEsYwrlPr1aUeCh"></script>
  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LeEiKIgAAAAAJYQrjb8ilZIxYEsYwrlPr1aUeCh', {
        action: 'homepage'
      }).then(function(token) {
        document.getElementById('recaptchaResponse').value = token
      });
    });
  </script>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</html>