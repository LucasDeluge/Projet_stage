<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./blog.css">
  <title>suprimer</title>
</head>

<body id="body-delete">
  <?php
  try {
    require_once './pdo.php';

    $id = $_POST['id'] ?? false;
    $id = (int)$id;

    if ($id <= 0) {
      throw new  Exception('un probleme est survenue lors de la suppression');
    }

    $actu = $pdo->query('select * from article where id= ' . $id)->fetch();
    $req  = $pdo->prepare('delete from article where id = :id ');

    $imgDbPath = str_replace('./assets', '', $actu['image']);
    $deletePathImg = __DIR__ . $imgDbPath;
    unlink($deletePathImg);
    $req->execute([

      ':id' => $id
    ]);


    header("location:../actualites.php");
  } catch (Exception $exception) {
    echo "erreur lors de la suppression.";
  }
  ?>


</body>

</html>