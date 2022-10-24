<?php
session_start();
require_once './assets/pdo.php'

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>L'île de Solidarité actus</title>
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
              <a class="nav-link" href="./contact.php">Contact</a>
            </li>

          </ul>

        </div>
      </div>
      </div>
    </nav>
  </header>


  <h1>cette espace est reservée au bénévole</h1>

  <p>Cet espace est protégé par un mot de passe. Pour y accéder, veuillez saisir votre mot de passe ci-dessous :</p>

  <form action="" id="connexion" method="post">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingLogin" name="login" placeholder="votre log 1">
      <label for="floatingLogin">Login</label>
    </div>
    <div class="form-floating mt-3">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="votre mdp">
      <label for="floatingPassword">password</label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">se conneter</button>
    <?php

    $login = $_POST['login'] ?? null;
    $password = $_POST['password'] ?? null;

    try {
      if (!is_null($login) || $password !== null) {

        require_once('./assets/pdo.php');
        $password = htmlspecialchars($password);
        $asso = $pdo->prepare("select * from users where username = :username");

        $asso->execute([
          ':username' => $login
        ]);

        // je le lie a ma var $users
        $user = $asso->fetch();
        //mdp identique?
        if (password_verify($password, $user['password'])) {
          echo '<div> connexion reussite </div>';
          $_SESSION['user'] = $user;
        }
      }
    } catch (PDOException $pdoError) {
      echo "Erreur login et/ou mdp";
    } catch (Exception $e) {
      echo "Erreur " . $e->getMessage();
    }


    ?>
  </form>
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