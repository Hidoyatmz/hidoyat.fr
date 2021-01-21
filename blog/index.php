<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once 'inc/bd.php';
    require_once 'functions/functions.php';
    $filtre_value = 0;
?>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hidoyat.fr | Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="navbar-logo">
    <a href="#"><img src="images/logo.png" alt="logo"></img></a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-component">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index"><i class="fas fa-book"></i> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-graduation-cap"></i> Tutoriels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-graduation-cap"></i> Formations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-comments"></i> Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-twitch"></i> Live</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav ml-auto nav-right">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user"></i> Inscription</a>
            </li>
            <li class="nav-item nav-item-login">
                <a class="nav-link nav-link-login" href="#"><i class="fas fa-unlock"></i> Connexion</a>
            </li>
        </ul>
    </div>
</nav>
<main class="container">
    <section class="categories">
        <div class="filtre">
            Filtre : 
            <select name="cat" id="cat">
                <option value="all">Tout afficher</option>
                <option value="sport">Sport & Santé</option>
                <option value="prog">Programmation</option>
                <option value="hardware">Hardware</option>
            </select>
        </div>
    </section>
    <section class="articles">
        <?php
            $articles = json_decode(get_articles($bdd,$filtre_value));
            foreach ($articles as $article) {
                $id = $article->id;
                $title = $article->title;
                $content = $article->content;
                $content = substr($content, 0, 300) . "...";
                $img = $article->img;
                $auteur = $article->auteur;
                $parution = $article->parution;
                $cat = $article->cat;
                echo "
                <div class='article-card {$cat}'>
                    <div class='row'>
                        <div class='col-md-3'>
                            <div class='article-card-image'>
                            <a href='article?id={$id}' class='article-link'><img src='images/cards/{$img}' alt='image'></a>
                            </div>
                        </div>
                        <div class='col-md-9 article-card-main'>
                            <div class='article-card-titre'>
                                <a href='article?id={$id}' class='article-link'>{$title}</a>
                            </div>
                            <div class='article-card-content'>
                                <p class='article-content'>{$content}</p>
                            </div>
                            <div class='article-card-footer'>
                                <!--<span class='article-infos'><i class='far fa-clock'></i> {$parution} <i class='fas fa-user'></i> {$auteur}</span>-->
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
        ?>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/e2f494c86d.js" crossorigin="anonymous"></script>
</body>