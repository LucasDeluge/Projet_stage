<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nav</title>
  <link rel="stylesheet" href="./styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/bootstrap.min.css">
</head>

<body>
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
            <a class="nav-link" href="./participation.php">Partenariat</a>
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

</body>

</html>