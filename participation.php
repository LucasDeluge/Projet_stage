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

  <h1 id="titre">Bénévolat</h1>

  <p id="text">Il n’existe pas de d’engagement formel au sein de l’Ile de Solidarité, uniquement un engagement moral : Je veux aider.

    Chacun est le bienvenu, avec sa bonne humeur, son esprit constructif, et un minimum de sérieux.

    Nous ne serons jamais « trop », l’île de solidarité compte aujourd’hui une centaine de bénévoles. Issus de tout horizons, tout milieux, mais partageant des mêmes valeurs. Chacun donne 1 heure, 1 jour, sans jugement. Les petits ruisseaux font les grandes rivières.

    Si vous souhaitez nous rejoindre, c’est avec plaisir, nous vous exposerons en quoi vous pourrez être utile à la société à travers nous :</p>
  <h1 id="titre">Pour participer : </h1>
  <div id="container-form-aide">
    <form>
      <!--nom -->
      <div>
        <label for="exampleInputEmail1" id="text">Nom (obligatoire) :</label>
        <input type="text" id="form-aide" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom" required>
      </div>


      <!--email -->
      <div>
        <label for="exampleInputEmail1" id="text">Adresse mail ou numero de telephone :</label>
        <input type="email" id="form-aide" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail ou telephone" required>
      </div>
  </div>

  <div id="btn-aide-container">
    <button type="submit" id="btn-aide">Valider votre message</button>
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