<?php

require '../../app/config/system.php';

if (!empty($article_id = $_POST['id']) && !empty($_POST['title']) && !empty($_POST['content'])) {
    // On récupère l'article à éditer
    // $article_id
    
    // hop hop hop!
}else{
    header('Location: index.php?error=nopostdataedit');
    exit;
}