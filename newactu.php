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
  <title>ajouter une actus</title>
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

  <form action="" id="new-actu" method="POST" enctype="multipart/form-data">
    <div id="form-message-container" class="mb-3 ">

      <h4 for="input-title" id="titre">titre </h4>
      <input type="text" class="form-control  mr-3 mpl-3" name="user_titre" required placeholder="votre titre" />

    </div>

    <div id="form-message-container" class="mb-3 ">
      <h4 for="message-input" id="titre">message</h4>
      <textarea id="imageInput" class="form-control" name="user_message" required></textarea>
    </div>

    <div id="form-message-container" class="mb-3 ">
      <h4 id="titre">choix de l'image</h4>
      <input type="file" id="pick" class="form-control" name="user_pick">
    </div>

    <div id="btn-aide-container">
      <button type="submit" class="btn btn-primary" id="btn-aide">valider mon actu</button>
    </div>
    <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
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
  <?php


  // On vérifie que la méthode POST est utilisée
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // On vérifie si le champ "recaptcha-response" contient une valeur
    if (empty($_POST['recaptcha-response'])) {
      header('Location: newactu.php');
    } else {
      // On prépare l'URL
      $url = "https://www.google.com/recaptcha/api/siteverify?secret=6LeEiKIgAAAAAEETca_LLM8OOtQ_AFFF-5mdxVDQ&response={$_POST['recaptcha-response']}";

      // On vérifie si curl est installé
      if (function_exists('curl_version')) {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($curl);
      } else {
        // On utilisera file_get_contents
        $response = file_get_contents($url);
      }

      // On vérifie qu'on a une réponse
      if (empty($response) || is_null($response)) {
        header('Location:newactu.php');
      } else {
        $data = json_decode($response);
        if ($data->success) {
          if (


            isset($_POST['user_titre']) && !empty($_POST['user_titre'])
          ) {

            // On nettoie le contenu de l'actu
            $titre = strip_tags($_POST['user_titre']);

            $message = htmlspecialchars($_POST['user_message']);



            // Ici vous traitez vos données
            $fileToUpload = $_FILES["user_pick"];
            $target_file = __DIR__ . './assets/stockIMG/' . basename($fileToUpload["name"]);
            $imgPath = './assets/stockIMG/' . $fileToUpload["name"];
            $uploadOk = true;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
              $check = getimagesize($fileToUpload["tmp_name"]);
              if ($check !== false) {
                echo "le fichier a du contenu - " . $check["mime"] . ".";
              } else {
                echo "le fichier est vide";
                $uploadOk = false;
              }
            }

            // var_dump($target_file);
            // var_dump($_FILES);
            // Check if file already exists
            if (file_exists($target_file)) {
              echo "désolé, ce fichier existe deja sur le serveur.";
              $uploadOk = false;
            }

            // Check file size
            if ($fileToUpload["size"] > 500000000) {
              echo "Désolé, le fichier dépasse la taille maximale autorisé";
              $uploadOk = false;
            }

            // Allow certain file formats
            if (
              $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
              && $imageFileType != "gif" && $imageFileType != "svg"
            ) {
              echo "desolé, seulement JPG, JPEG, PNG, GIF & SVG sont accepter.";
              $uploadOk = false;
            }

            // Check if $uploadOk is set to 0 by an error
            if (!$uploadOk) {
              echo "Le fichier ne respecte les conditions d'upload";
              // if everything is ok, try to upload file
            } else {

              //je déplace mon fichier du dossier temporaire vers son dossier définitif
              // if (move_uploaded_file($fileToUpload["tmp_name"], $target_file)) {
              if (move_uploaded_file($fileToUpload["tmp_name"], $imgPath)) {
                //succès
                echo "The file " . htmlspecialchars(basename($fileToUpload["name"])) . " has been uploaded.";
                echo '<a href="./actualites.php">Lien de retour</a>';
              } else {
                //erreur
                echo "Erreur : le déplacement du fichier est impossible";
              }
            }

            // $date = new DateTime($article['date']);
            // $user_pick = $_POST["user_pick"]  ?? false;
            // $selectUser = $pdo->query('SELECT id_Utilisateur  FROM utilisateur where ' );
            // $selectArticle = $pdo->query('SELECT id_Utilisateur  FROM article');
            // $id_user = $selectUser->fetch();
            // $id_userA = $selectArticle->fetch();
            // $id_userA =  $id_user;
            // var_dump($_SESSION);
            // die('<br>sdgsdfg');
            if ($titre !== false && $message !== 0) {
              $sql = "INSERT INTO article values(null, '$titre','$imgPath','$message' )";
              $res = $pdo->exec($sql);
              if (!$res) {
                echo '<div id="nav-bas">un probleme est survenue</div>';
              } else {
                // $_SESSION["message"] = 'article cree avec succes';

                // header("location:article.php");
                echo '<div id="nav-bas">
              actu crée avec succés,
              <a href="./actualites.php" id="lien-conect"> se diriger vers l\'actu</a>
              </div>';
              }
            }
          }
        } else {
          header('Location:newactu.php');
        }
      }
    }
  } else {
    http_response_code(405);
  }



  ?>



</body>

</html>