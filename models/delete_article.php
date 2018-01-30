<?php

if (!empty($article_id = $_GET['id'])) {
    // On récupère l'article à éditer
    // $article_id
    
    // hop hop hop!
}else{
    header('Location: index.php?error=nopostdatadelete');
    exit;
}