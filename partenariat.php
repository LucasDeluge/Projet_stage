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
  </header>

  <h1 id="titre">Nos partenaires</h1>

  <ul>
    <li id="text">Mairie de Lille</li>
    <ul>
      <div id="containeur-lien">
        <a href="https://www.lille.fr/Votre-Mairie/Lille-en-bref/Une-ville-attentive-a-chacun/La-solidarite" id="lien">La solidarité</a>
      </div>
    </ul>
  </ul>
  <ul>
    <div id="containeur-lien">
      <li id="text">Fédération des Acteurs de la solidarité</li>
    </div>
    <ul>
      <div id="containeur-lien">
        <a href="https://www.federationsolidarite.org/" id="lien">Contre les exclusions pour la solidarité </a>
      </div>
    </ul>
  </ul>
  <ul>
    <li id="text">Engagement solidaire</li>
    <ul>
      <div id="containeur-lien">
        <a href="https://www.engagement-solidaire.fr/" id="lien">Au coeur de la solidarité</a>
      </div>
    </ul>
  </ul>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<div id="logo-container">
  <img src="./assets/IMGsite/logo.jpg" alt="" id="logo">
</div>

</html>