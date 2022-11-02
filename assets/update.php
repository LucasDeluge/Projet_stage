<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>update</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous" defer></script>
</head>

<body id="body-update">
  <header>
    <?php
    require_once './assets/nav.php'
    ?>
  </header>
  <main class="container">
    <h1>Modifier un article</h1>
    <?php


    try {
      require_once './pdo.php';

      $id = $_POST['id'] ?? false;
      $id = (int)$id;

      if ($id <= 0) {
        throw new  Exception('un probleme est survenue lors de la modification');
      }

      $req  = $pdo->prepare('select * from article where id = :id ');

      $req->execute([
        ':id' => $id
      ]);

      $actu = $req->fetch(PDO::FETCH_ASSOC) ?? null;
    } catch (Exception $exception) {
      echo '
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Erreur!</strong> <a href="#" class="alert-link">(affichage)Une erreur est survenue : ' . $exception->getMessage() . '
        </a> and try submitting again.
        </div>
        ';
    }

    // form
    $id = $_POST['id'] ?? false;
    $id = (int)$id;
    $titre = $_POST['titre'] ?? false;
    $userpick = $_FILES['user_pick'] ?? false;

    $texte = $_POST['texte'] ?? false;

    if (strlen($titre) !== false && $texte !== false) {

      try {
        require_once './pdo.php';


        $fileToUpload = $userpick;
        $target_file = __DIR__ . './stockIMG/' . basename($fileToUpload["name"]);
        $imgPathForBdd = './assets/stockIMG/' . $fileToUpload["name"];
        $imgPathToUpload = './stockIMG/' . $fileToUpload["name"];
        $uploadOk = true;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



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

          $pathToDelete = str_replace('./assets', '', $actu['image']);
          // unlink(__DIR__ . $actu['image']);
          unlink(__DIR__ . $pathToDelete);

          //je déplace mon fichier du dossier temporaire vers son dossier définitif
          // if (move_uploaded_file($fileToUpload["tmp_name"], $target_file)) {
          if (move_uploaded_file($fileToUpload["tmp_name"], $imgPathToUpload)) {
            //succès
            // echo "The file " . htmlspecialchars(basename($fileToUpload["name"])) . " has been uploaded.";
            // echo '<a href="./actualites.php">Lien de retour</a>';
          } else {
            //erreur
            echo "Erreur : le déplacement du fichier est impossible";
          }
        }


        //je prépare ma requete
        $req = $pdo->prepare('update article set titre = :titre, image = :image ,texte = :texte   where id = :id');
        // je l'execute avec les parametres necessaire
        $req->execute([
          ':id' => $id,
          ':titre' => $titre,
          ':image' => $imgPathForBdd,
          ':texte' => $texte

        ]);

        echo '
        <div class="alert alert-dismissible alert-success">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Bravo!</strong> Article modifier avec succès 
          <a href="../actualites.php" class="alert-link"> Voir la liste </a>.
        </div>
        ';
      } catch (PDOException | DomainException $Exception) {
        echo '
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Erreur!</strong> <a href="#" class="alert-link">(traitement)Une erreur est survenue : ' . $Exception->getMessage() . '
      </a> and try submitting again.
      </div>
      ';
      }
    }

    ?>
    <form action="" method="post" enctype='multipart/form-data'>
      <div class="mb-3">
        <label for="mon Article" class="form-label">titre</label>
        <input type="e" class="form-control" id="titre" name="titre" placeholder="titre" value="<?php echo $actu['titre'] ?>">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">texte</label>
        <input type="texte" class="form-control" id="texte" name="texte" placeholder="texte" value="<?php echo $actu['texte'] ?>">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image</label>
        <input type="file" class="form-control" id="imageInput" name="user_pick" placeholder=<?php echo $actu['image'] ?> value="<?php echo $actu['image'] ?>">
      </div>
      <input type="hidden" name="id" value="<?php echo $actu['id'] ?>">
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

  </main>
</body>

</html>