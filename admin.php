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

<body id="background-body">
  <header>
    <?php
    require_once './assets/nav.php'
    ?>
  </header>


  <h1 id="titre">Cet espace est reservé aux bénévoles</h1>

  <p id="text">Cet espace est protégé par un mot de passe. Pour y accéder, veuillez saisir votre mot de passe ci-dessous :</p>

  <form action="" id="connexion" method="post">
    <div class="form-floating">
      <div id="form-message-container">
        <input type="text" class="form-control" id="floatingLogin" name="login" placeholder="votre login" required>
        <label for="floatingLogin" id="text">Nom</label>
      </div>
    </div>
    <div class="form-floating mt-3">
      <div id="form-message-container">
        <input type="password" class="form-control" id="floatingPassword" name="password" required placeholder="votre mot de passe">
        <label for="floatingPassword" id="text">mot de passe</label>
      </div>
    </div>
    <div id="btn-aide-container">
      <button type="submit" class="btn btn " id="btn-aide">Se connecter</button>
    </div>
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
          header('location:actualites.php');
          $_SESSION['user'] = $user;
        }
      }
    } catch (PDOException $pdoError) {
      echo "Erreur login et/ou mdp";
    }
    // } catch (Exception $e) {
    //   echo "Erreur " . $e->getMessage();
    // }


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

<div id="logo-container">
  <img src="./assets/IMGsite/logo.jpg" alt="" id="logo">
</div>

</html>