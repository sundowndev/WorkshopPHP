<?php
    // On inclus notre fichier system
    require '../app/config/system.php';

    require '../models/delete_article.php';
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
      
      <form action="do/delete_article.php" method="POST">
          <label>Êtes vous sûr de vouloir supprimer cet article ?</label>
          
          <input type="text" name="article_id" value="<?=$article_id;?>" hidden="">
          
          <input type="text" name="csrf" value="<?=$token;?>" hidden="">
          
          <br>
          
          <input type="submit" class="btn btn-danger" value="Oui, enlevez ça s'il vous plait.">
          
          <a href="index.php" class="btn btn-default">Annuler</a>
      </form>
    </main>
  </body>
</html>