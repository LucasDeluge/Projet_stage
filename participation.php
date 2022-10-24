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

<body>
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

          </ul>

        </div>
      </div>
      </div>
    </nav>
  </header>

  <h1>Bénévolat</h1>

  <p>Il n’existe pas de d’engagement formel au sein de l’Ile de Solidarité, uniquement un engagement moral : Je veux aider.

    Chacun est le bienvenu, avec sa bonne humeur, son esprit constructif, et un minimum de sérieux.

    Nous ne serons jamais « trop », l’île de solidarité compte aujourd’hui une centaine de bénévoles. Issus de tout horizons, tout milieux, mais partageant des mêmes valeurs. Chacun donne 1 heure, 1 jour, sans jugement. Les petits ruisseaux font les grandes rivières.

    Si vous souhaitez nous rejoindre, c’est avec plaisir, nous vous exposerons en quoi vous pourrez être utile à la société à travers nous :</p>
  <h1>Pour participer : </h1>

  <form>
    <!--nom -->
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Nom (obligatoire) :</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom">

    </div>
    <!--email -->
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Adresse mail (obligatoire) :</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">

    </div>
    <!--objet -->
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Objet :</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Objet de votre e-mail">

    </div>

    <!--texte -->
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Votre message :</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>
    <!--bouton -->
    <div id="btn-conect-container">
      <button type="submit" class="btn btn-danger mt-4">Valider mon inscription</button>


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

<footer>
    <div class="logo">
  <img src="./assets/logoids-modified.png">
</div>
</footer>

</html>