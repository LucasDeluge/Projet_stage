<?php
session_start();
require_once './assets/pdo.php'

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>L'île de Solidarité</title>
  <link rel="stylesheet" href="./assets/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/bootstrap.min.css">

</head>

<body id="background-body">
  <div>
    <nav class=" navbar navbar-expand-lg navbar-dark " id="nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">L'île de Solidarité</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="./actualites.php">Actualités
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./participation.php">Participation</a>
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
    </nav>
    <div class="home">
      <br>
      <br>
      <h1 id="titre">Présentation</h1>
      <br>
      <br>
      <div id="logo-container">
        <img src="./assets/IMGsite/logo.jpg" alt="" id="logo">
      </div>
      <br>
      <br>
      <p id="text">
        L’île de solidarité est une association bénévole intervenant auprès de toutes personnes sans abris ou dans le besoin.

        Apolitique et non confessionnelle, celle-ci est ouverte à toute personne désireuse d'apporter son aide, sans distinction culturelle, générationnelle et sociale.

        Nos principales actions consistent à effectuer des maraudes sociales dans lesquelles sont apportées une aide alimentaire, vestimentaire ainsi qu'une orientation vers les différents dispositifs d’accueil et d’hébergement.
      </p>
      <div id="logo-container">
        <img src="./assets/IMGsite/aide.jpg" alt="" id="img-index">
      </div>

      <p id="text">
        Forte d’un nombre important de bénévoles, l'île de solidarité développe des liens sociaux avec les personnes à la rue afin de travailler sur leur estime de soi mais aussi de les faire participer à des projets d’inclusion qu’ils soient sportifs, culturels ou d’insertion.

        Composée uniquement de bénévoles, l’association a su trouver sa place auprès des instances et fait aujourd'hui partie des conseils d’administrations du Samu social et de la Fédération des Acteurs de la Solidarité.

        Afin de rester fidèle à ses valeurs humaines, nous comptons énormément sur votre soutien pour nous aider à continuer notre combat.
      </p>
    </div>

  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>