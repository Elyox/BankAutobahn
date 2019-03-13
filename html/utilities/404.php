<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>BankAutobahn</title>
  </head>
  <body>

    <!-- The light/dark theme switch. Must be placed on top of the main class -->
    <input type="checkbox" id="liSwi">
    <div id="lightSwitch">
      <label for="liSwi"><i class="far fa-lightbulb"></i></label>
    </div>

    <!-- The page to display must be placed here for the light/dark theme switch to work -->
    <div class="main">

      <div class="navbar navbar-expand-md fixed-top shadow-sm">
            <a class="navbar-brand active" tabindex="#">
              <img src="http://lorempixel.com/output/cats-q-c-640-640-3.jpg" height="30" width="30" class="d-inline-block align-top" alt="Brand logo">
              BankAutobahn
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
              <a tabindex="#" class="navbar-item nav-link active">Home <span class="sr-only">(current)</span></a>
              <a href="espacperso.php" class="nav-item nav-link">Espace personnel</a>
              <a href="informations.php" class="nav-item nav-link">Informaions</a>
              <a href="telechargements.php" class="nav-item nav-link">Téléchargements</a>
            </div>
            <button type="button" class="btn btn-secondary ml-auto" data-toggle="modal" data-target="#loginModal">Se connecter</button>
          </div>
        </div>

      <div class="container-fluid mt-5">
        <div class="row">
          <div class="card col-12">
            <div class="card-body cardb">
              <p class="card-text mt-3 text-center h1">Error 404 ! :(</p>
              <div class="tenor-gif-embed mt-5" data-postid="3441575" data-share-method="host" data-width="100%" data-aspect-ratio="2.347417840375587"><a href="https://tenor.com/view/austin-powers-stuck-driving-gif-3441575">Yep GIF</a> from <a href="https://tenor.com/search/austin-gifs">Austin GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script>
            </div>
          </div>
        </div>
      </div>


      <!-- Conection modal box -->
      <div class="modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Se connecter</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="index.php" method="post">
                <div class="form-group">
                  <label for="accountId">ID de compte</label>
                  <input type="number" class="form-control" maxlength="10" id="accountId" required>
                </div>
                <div class="form-group">
                  <label for="accountPassword">Mot de passe</label>
                  <input type="password" class="form-control" id="accountPassword" required>
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
              </form>
              <a href="creacompte.php" class="text-decoration-none"><p class="text-center font-weight-light">créer un comte</p></a>
            </div>
          </div>
        </div>
      </div>




    </div>


    <!-- Script loaded after the page -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="bootstrap-4.2.1-dist/js/bootstrap.min.js"> -->

    <script src="http://localhost:35729/livereload.js" type="text/javascript">

    </script>

  </body>
</html>
