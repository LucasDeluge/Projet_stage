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
  <title>L'île de Solidarité press</title>
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

  <h1 id="titre">Presse</h1>

  <p id="text">Ils parlent de nous</p>


  <ul>
    <li id="titre">La voix du nord</li>

    <ol>
      <div id="containeur-lien">
        <li id="num-lien"><a href="https://www.lavoixdunord.fr/895368/article/2020-11-19/lille-sans-abri-un-accueil-de-jour-pour-oublier-la-nuit" id="lien">Lille: sans-abri, un accueil de jour pour oublier la nuit</a></li>
        <li id="num-lien"><a href="https://www.lavoixdunord.fr/art/region/vivre-ensemble-a-lille-l-ile-de-solidarite-debarque-ia19b0n2846940" id="lien">Vivre ensemble à Lille : l’Île de Solidarité débarque en force chez les locataires</a></li>
        <li id="num-lien"><a href="https://www.lavoixdunord.fr/317418/article/2018-02-14/plein-soleil-sur-l-ile-de-la-solidarite" id="lien">Plein soleil sur l’Île de la Solidarité</a></li>
        <li id="num-lien"><a href="https://www.lavoixdunord.fr/209177/article/2017-08-26/sportifs-solidaires-rapides-et-ecolos-l-ile-de-solidarite-se-dote-de-deux" id="lien">Sportifs, solidaires, rapides et écolos : L’Île de solidarité se dote de deux triporteurs</a></li>
      </div>
    </ol>
    <li id="titre">Vozer</li>
    <ol>
      <div id="containeur-lien">
        <li id="num-lien"><a href="https://vozer.fr/2020/11/12/pour-sa-distribution-quotidienne-de-repas-lasso-lile-de-solidarite-fait-un-appel-aux-dons-alimentaires/" id="lien">Pour sa distribution quotidienne de repas, l’asso L’île de Solidarité fait un appel aux dons alimentaires</a></li>
      </div>
    </ol>
    <li id="titre">Bfmtv</li>
    <ol>
      <div id="containeur-lien">
        <li id="num-lien"><a href="https://www.bfmtv.com/grand-lille/replay-emissions/bonjour-lille/sans-abri-a-lille-on-besoin-d-aide-materielle-et-financiere-rappelle-le-president-de-l-association-l-ile-de-solidarite_VN-202102090088.html" id="lien">Sans-abri à Lille: "on besoin d'aide matérielle et financière", rappelle le président de l'association "L'Île de solidarité"</a></li>
      </div>
    </ol>
  </ul>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<div id="logo-container">
  <img src="./assets/IMGsite/logo.jpg" alt="" id="logo">
</div>

</html>