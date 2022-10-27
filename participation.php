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
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
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
              <a class="nav-link" href="./donation.php">Donation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./press.php">Mention press</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./partenariat.php">Partenariat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./admin.php">Espace administrateur</a>
            </li>
            <?php
            if (isset($_SESSION['user']['username'])) {
              echo '<li>';
              echo '<a class="nav-link" href="./deco.php">deconnexion</a>';
              echo '</li>';
            }
            ?>

          </ul>

        </div>
      </div>
      </div>
    </nav>
  </header>

  <h1 id="titre">Bénévolat</h1>

  <p id="text">Il n’existe pas de d’engagement formel au sein de l’Ile de Solidarité, uniquement un engagement moral : Je veux aider.

    Chacun est le bienvenu, avec sa bonne humeur, son esprit constructif, et un minimum de sérieux.

    Nous ne serons jamais « trop », l’île de solidarité compte aujourd’hui une centaine de bénévoles. Issus de tout horizons, tout milieux, mais partageant des mêmes valeurs. Chacun donne 1 heure, 1 jour, sans jugement. Les petits ruisseaux font les grandes rivières.

    Si vous souhaitez nous rejoindre, c’est avec plaisir, nous vous exposerons en quoi vous pourrez être utile à la société à travers nous :</p>
  <h1 id="titre">Pour participer : </h1>
  <div id="container-form-aide">
    <form>
      <!--nom -->
      <div class="form-group">
        <label for="exampleInputEmail1" id="text">Nom (obligatoire) :</label>
        <input type="email" id="form-aide" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom">
      </div>


      <!--email -->
      <div class="form-group">
        <label for="exampleInputEmail1" id="text">Adresse mail ou numero de telephone :</label>
        <input type="email" id="form-aide" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail ou telephone">
      </div>
  </div>



  <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
  </form>
</body>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<div id="logo-container">
  <img src="./assets/IMGsite/logo.jpg" alt="" id="logo">
</div>

</html>