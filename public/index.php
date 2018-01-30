<?php
    // On inclus notre fichier system
    require '../app/config/system.php';

    // Récupérer les articles dans la BDD
    $stmt = $bdd->prepare( 'SELECT * FROM articles' );

    $stmt->execute();

    $articles = $stmt->fetchAll();
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
      
      <?php if (isset($_GET['error'])) { ?>
          <div style="color: red"><?=$_GET['error']?></div>
      <?php } ?>
      
      <p><a href="create_article.php">Ajouter un article</a></p>
      
      <hr>
      
      <div class="articles-list">
      
      <!-- Générer les articles ici -->
      
      <?php
        foreach ($articles as $article) {
            echo '<div class="article">';
            echo '<h4>'. $article['title'] .' <small><a href="edit_article.php?id='. $article['id'] .'" class="btn btn-sm">Modifier</a> <a href="delete_article.php?id='.         $article['id'] .'" class="btn btn-sm">Supprimer</a></small></h4>';
            echo '<p>'. $article['content'] .'</p>';
            echo '</div>';
        }
      ?>
      </div>
    </main>
  </body>
</html>
