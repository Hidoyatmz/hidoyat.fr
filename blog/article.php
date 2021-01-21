<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once 'inc/bd.php';
    require_once 'functions/functions.php';
    $filtre_value = 0;
    $id = $_GET['id'];
    if(empty($id)){
        die('Erreur');
    }
?>
<head>
    <meta charset="UTF-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hidoyat.fr | Article <?php echo $id; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/article-page.css">
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
    <section class="articles">
        <?php
            $article = json_decode(get_article($bdd,$id));
            $title = $article[0]->title;
            $content = $article[0]->content;
            $auteur = $article[0]->auteur;
            $parution = $article[0]->parution;
            echo "
                <div class='article'>
                    <div class='article-header'>
                        <p class='article-title'>{$title}</p>
                        <p class='article-auteur'>Rédigé par : <a>{$auteur}</a></p>
                    </div>
                    <div class='article-main'>
                        <p>{$content}</p>
                    </div>
                    <div class='article-footer'>
                        <span class='article-date'><i class='fas fa-calendar-alt'></i> {$parution}</span>
                    </div>
                </div>
            ";
        ?>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/e2f494c86d.js" crossorigin="anonymous"></script>
</body>