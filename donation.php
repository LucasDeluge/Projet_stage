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
  <title>L'île de Solidarité Dons</title>
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

  <div class="don">
    <h1 id="titre">Faites un don</h1>
    <p id="text">Vous pouvez nous aider !

      Afin de nous aider dans nos actions, vous pouvez nous faire un don financier !

      Vous recevrez, si vous le souhaitez, un reçu pour déduction fiscale.
      100€ de dons vous reviendra au final à 34€ après déduction fiscale.</p>
</body>

<ul>
  <li id="text-don"> 50€ => 17€ après déduction fiscale.</li>
  <li id="text-don">30€ => 10,20€ après déduction fiscale.</li>
  <li id="text-don">20€ => 6,80€ après déduction fiscale.</li>
  <li id="text-don">10€ => 3,40€ après déduction fiscale.</li>

</ul>

<p id="text">Les dons au profit de l’association L’Île de Solidarité ouvrent droit à une réduction d’impôt sur le revenu de 66 % du montant versé, dans la limite de 20 % du revenu imposable.
  L’association L’Île de Solidarité est une association d’intérêt général qui est habilitée à éditer un reçu fiscal que vous recevrez automatiquement suite à votre don.</p>


<div id="containeur-lien">
  <a href="https://www.helloasso.com/associations/l-ile-de-solidarite" id="liens-don">Vous pouvez effectuer un don en cliquant ici</a>
</div>

<p id="text">
  Vous pouvez également nous envoyer des dons par chèque.
  Adresse et ordre :
</p>

<ul>
  <li id="text-don"> L’île de solidarité </li>
  <li id="text-don"> 13 rue de rivoli </li>
  <li id="text-don"> 59800 LILLE-fives </li>
  <li id="text-don"> Merci de votre générosité ! </li>
</ul>



<!-- Test lien vidéo  -->

<h1 id="titre"> Usage des derniers dons : </h1>

<p id="text"> Achat d’un camion pour collecter les denrées alimentaires auprès des donateurs, commerces, etc .. et acheminer ces denrées sur les lieux de distributions une fois conditionnées ou préparées. </p>
<!-- Test lien vidéo  -->

<div id="containeur-video">
  <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Flilede.solidarite%2Fvideos%2F542077679590573%2F&width=500&show_text=false&appId=2340366882651884&height=889" width="500" height="689" controls="1" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true" id="video"></iframe>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</html>