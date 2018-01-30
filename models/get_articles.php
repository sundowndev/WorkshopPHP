<?php
    $stmt = $bdd->prepare( 'SELECT * FROM articles' );

    $stmt->execute();

    $articles = $stmt->fetchAll();
?>