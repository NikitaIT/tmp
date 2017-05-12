<?php
    require_once("database.php");
    require_once("models/articles.php");
    
    $link = db_connect();
    $article = article_get($link, $_GET['id']);
    articles_like($link, $_GET['id'],1);
    include("views/article.php");
?>