<?php
    // On inclus notre fichier system
    require '../app/config/system.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= SITE_NAME; ?></title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <main role="main" class="container">
      <h1 class="mt-5"><a href="index.php"><?= SITE_NAME; ?></a></h1>
      
      <p><a href="create_article.php">Ajouter un article</a></p>
      
      <hr>
      
      <div class="article-form">
          <form action="do/create_article.php" method="POST">
              <div class="form-group">
                  <label for="title">Titre</label>
                  <input class="form-control" type="text" name="title" id="title">
              </div>
              
              <div class="form-group">
                  <label for="content">Contenu</label>
                  <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
              </div>
              
              <div class="form-group">
                  <input type="submit" class="btn btn-success" value="Enregistrer">
              </div>
          </form>
      </div>
    </main>
  </body>
</html>