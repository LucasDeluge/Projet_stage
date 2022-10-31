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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="background-body">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark  " id="nav">
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
              <a class="nav-link" href="./participation.php">Participation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./donation.php">Donation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./press.php">Mention press</a>
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
              echo '<a class="nav-link" href="./newactu.php">créé une actu</a>';
              echo '</li>';
              echo '<li>';
              echo '<span title="Déconnexion">';
              echo '<a class="nav-link" href="./deco.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>';
              echo '</span>';
              echo '</li>';
            }
            ?>


          </ul>

        </div>
      </div>

      </div>
    </nav>
  </header>
  <?php
  if (isset($_SESSION["message"])) {
    echo "<div id='nav'>$_SESSION[message] ";
    $_SESSION["message"] = null;
  }

  // require_once './new-article.php';
  // $pseudo = $_SESSION['article']['id_utilisateur'];
  foreach ($pdo->query("select * from article")->fetchAll() as $key => $actu) {


    if (isset($_SESSION['user']['username'])) {
      echo " 
    <div id='actu-container'>
    <div id='titreactu'> {$actu['titre']}</div>
    <div id='container-img'> <img src='{$actu['image']}' id='img-actu'> </div>
    <div id='actu'> {$actu['texte']}</div> 
    <div id='container-btn-actu' >
    <form action='./assets/delete.php' method='post'> 
      <button type='submit' id='btn-actu' name='id' value='{$actu['id']}'> supprimer </button> </form>
      
    
    <form action='./assets/update.php' method='post'> 

    <button type='submit' id='btn-actu' name='id' value='{$actu['id']}'> modifier </button> </form>
      </div> 
      </div> ";
    } else {
      echo "  <div id='actu-container'>
    <div id='titreactu'> {$actu['titre']}</div>
    <div id='container-img'> <img src='{$actu['image']}' id='img-actu'> </div>
    <div id='actu'> {$actu['texte']}</div> 
    </div> ";
    }
  };

  ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</html>