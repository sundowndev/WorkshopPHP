<?php

require '../../app/config/system.php';

if (!empty($article_id = $_POST['id'])) {
    // On récupère l'article à supprimer
    // $article_id
    
    // hop hop hop!
}else{
    header('Location: index.php?error=nopostdatadelete');
    exit;
}