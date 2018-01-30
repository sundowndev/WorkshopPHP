<?php

require '../../app/config/system.php';

if (!empty($_POST['title']) && !empty($_POST['content'])) {
    // hop hop hop!
}else{
    header('Location: index.php?error=nopostdatacreate');
    exit;
}