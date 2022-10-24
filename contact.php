<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER; //DEBUG_OFF          //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth = true;                                   //Enable SMTP authentication
  $mail->Username = 'deluge999@gmail.com';                     //SMTP username
  $mail->Password = 'lfsoluhmlfagzcsi';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
  $mail->Port = 587;

  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  // $mail->isSMTP();                                            //Send using SMTP
  // $mail->Host = 'localhost';                     //Set the SMTP server to send through
  // $mail->Port = 1025;

  //Recipients
  $mail->setFrom('deluge999@gmail.com', 'Mailer'); // expediteur
  // $mail->setFrom('lady@theo.com', 'Mailer'); // expediteur
  $mail->addAddress('courbot.theo@gmail.com', 'theo et lucas AFCI');     //Add a recipient
  // $mail->addAddress('non@pas.encore', 'theo et lucas AFCI');     //Add a recipient
  //    $mail->addAddress('ellen@example.com');               //Name is optional
  //    $mail->addReplyTo('info@example.com', 'Information');
  //    $mail->addCC('cc@example.com');
  //    $mail->addBCC('bcc@example.com');

  //Attachments
  //    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  // $mail->addAttachment('');    //Optional name

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'demo envoi mail gmail';
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

<body class="p-3 text-light">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark  bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">L'île de Solidarité</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="./index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./actualites.php">Actualités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./participation.php">Participation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./donation.php">Donation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./press.php">Mention presse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./partenariat.php">Partenariat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./admin.php">Espace administrateur</a>
            </li>

          </ul>

        </div>
      </div>
      </div>
    </nav>
  </header>


  <h1>Contact</h1>

  <form>
    <!--nom -->
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Nom (obligatoire)</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="votre nom">

    </div>
    <!--email -->
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Adresse mail (obligatoire)</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="votre mail">
      <small id="emailHelp" class="form-text text-muted">pour obtenir une reponse</small>
    </div>
    <!--objet -->
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Objet</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="objet de votre mail">

    </div>

    <!--texte -->
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Votre message</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>
    <!--bouton -->
    <div id="btn-conect-container">
      <button type="submit" class="btn btn-danger mt-4">Valider votre message</button>


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

<footer>
  <div class="logo">
    <img src="./assets/logoids-modified.png">
  </div>
</footer>

</html>