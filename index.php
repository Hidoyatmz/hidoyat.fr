<!DOCTYPE html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'src/Database.php';
require 'src/Timeline.php';
require 'src/Project.php';
require 'src/Poll.php';
require 'src/functions/getUserIP.php';
$pdoIntance = Database::getPdo();
if(isset($_POST['colors'])){
    Poll::sendPoll($pdoIntance, [getUserIp(), $_POST['colors'],$_POST['anims'],$_POST['texts'],$_POST['add']]);
}
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Hidoyat.fr</title>
	<meta name="keywords" content="mehdi zaidi mehdizaidi contactmehdizaidi">
	<meta name="Description" content="Profolio de Zaidi Mehdi." />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/8a6fd9fe6b.js" crossorigin="anonymous"></script>
</head>


<body class="text-light">
    <nav id="navbar" class="navbar navbar-dark navbar-expand-lg py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Hidoyat.fr</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#who" class="translate" translate="nav-who">
                            <i class="fas fa-user"></i>
                            A propos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#skills" class="translate" translate="nav-skills">
                            <i class="fas fa-laptop-code"></i>
                            Compétences
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#journey" class="translate" translate="nav-journey">
                            <i class="fa-solid fa-signs-post"></i>
                            Expérience
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#projects" class="translate" translate="nav-projects">
                            <i class="fas fa-briefcase"></i>
                            Projets
                        </a>
                    </li>
                    <li id="translation" class="nav-item ms-5" onclick="toogleTranslation()">
                        <i class="fas fa-globe"></i>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Start main backgroud -->
    <section class="main-background d-flex align-items-center flex-wrap flex-column">
        <div class="main-background-text" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-light"><i class="fas fa-cog rotateCog"></i> Mehdi <span>"Hido"</span> Zaidi</h1>
            <h5 class="translate text-light" translate="status"></h5>
            <div>
                <i class="fas fa-arrow-down goingDown mt-5"></i>
            </div>
        </div>
        <div class="main-background-deco"></div>
        
        <div class="socials">
            <a href="mailto:hidoyatmz@gmail.com" target="_blank">
                <i class="fa-solid fa-envelope"></i>
            </a>
            <a href="https://www.linkedin.com/in/mehdi-z-77aa8a1a7/" target="_blank">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/Hidoyatmz" target="_blank">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="https://www.instagram.com/_29mehdi/" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
    </section>
    <!-- End main backgroud -->

    <!-- Start who I am -->
    <section id="who" class="who d-flex justify-content-center align-items-center flex-wrap flex-row gap-5">
        <div class="who-left" data-aos="fade-right" data-aos-duration="1000">
            <img src="https://media.istockphoto.com/vectors/default-placeholder-businessman-halflength-portr-vector-id986668438?k=20&m=986668438&s=612x612&w=0&h=1mig7aA8_ShW0HuwSvMRvr3_cWj1O-iHN-aKRCvE9Vo="
                alt="">
        </div>
        <div class="who-right text-light" data-aos="fade-left" data-aos-duration="2000">
            <div class="deco-who-right"></div>
            <h4 class="translate fs-6 fw-bold text-blue text-decoration-underline" translate="who-title"></h4>
            <h3 class="translate fw-bold fs-2 my-3" translate="who-about"></h3>
            <p class="translate fw-normal fs-5" translate="who-desc"></p>
        </div>
    </section>
    <!-- End who I am -->

    <!-- Start skills -->
    <section id="skills" class="skills">
        <div class="container">
            <h4 class="text-center translate fs-6 fw-bold text-blue text-decoration-underline" translate="what-i-learnt">what i learnt</h4>
            <h2 class="text-center fw-bold translate" translate="my-skills">My skills</h2>
                <!-- <h3>Langages</h3> -->
                <div class="row" style="font-size: 72px; text-align:center;" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-md-2 col-4"><i class="devicon-html5-plain-wordmark colored"></i></div>
                    <div class="col-md-2 col-4"><i class="devicon-css3-plain-wordmark colored"></i></div>
                    <div class="col-md-2 col-4"><i class="devicon-php-plain colored"></i></div>
					<div class="col-md-2 col-4"><i class="devicon-mysql-plain-wordmark"></i></div>
                    <div class="col-md-2 col-4"><i class="devicon-lua-plain-wordmark"></i></div>
                    <div class="col-md-2 col-4"><i class="devicon-java-plain-wordmark colored"></i></div>
                    <div class="col-md-2 col-4"><i class="devicon-csharp-plain colored"></i></div>
					<div class="col-md-2 col-4"><i class="devicon-python-plain-wordmark colored"></i></div>
                    <div class="col-md-2 col-4"><i class="devicon-javascript-plain colored"></i></div>
                    <div class="col-md-2 col-4"><i class="devicon-bash-plain"></i></div>
                    <div class="col-md-2 col-4"><i class="devicon-postgresql-plain colored"></i></div>
                </div>
                <!-- <h3>Frameworks</h3> -->
                <div class="row" style="font-size: 64px; text-align:center;" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-md-2 col-4"><i class="devicon-bootstrap-plain-wordmark"></i></div>
					<div class="col-md-2 col-4"><i class="devicon-electron-original colored"></i></div>
                </div>
                <!-- <h3 class="translate" translate="others">Others</h3> -->
                <div class="row" style="font-size: 64px; text-align:center;" data-aos="fade-up" data-aos-duration="1000">
					<div class="col-md-2 col-4"><i class="devicon-vscode-plain colored"></i></div>
                    <div class="col-md-2 col-4"><i class="devicon-photoshop-plain colored"></i></div>
					<div class="col-md-2 col-4"><i class="devicon-github-original-wordmark"></i></div>
					<div class="col-md-2 col-4"><i class="devicon-putty-plain colored"></i></div>
					<div class="col-md-2 col-4"><i class="devicon-debian-plain-wordmark colored"></i></div>
					<div class="col-md-2 col-4"><i class="devicon-apache-plain-wordmark"></i></div>
                </div>
        </div>
    </section>
    <!-- End skills -->
    <!-- Start Journey -->
    <section id="journey" class="journey"> 
        <h4 class="text-center translate fs-6 fw-bold text-blue text-decoration-underline" translate="what-i-did">what I did</h4>
        <h2 class="text-center fw-bold translate mb-5" translate="my-journey">My journey</h2>
        <div class="timeline mt-5">
            <?php
                $datas = Timeline::getDatas($pdoIntance);
                $timelineCounter = 0;
                foreach ($datas as $data) {
                    $prefix = ($timelineCounter % 2 == 0) ? "right" : "left";
                    echo Timeline::generateCard($data, $prefix);
                    ++$timelineCounter;
                }
            ?>
        </div>
    </section>
    <!-- End Journey -->
    <!-- Start projects -->
    <section id="projects" class="projects">
        <div class="container">
            <h4 class="text-center translate fs-6 fw-bold text-blue text-decoration-underline" translate="what-i-made">what I made</h4>
            <h2 class="text-center fw-bold translate mb-5" translate="my-projects">My projects</h2>
            <div class="swiper swiper-projects" data-aos="zoom-in" data-aos-duration="2000">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper" id="timeline-wrapper">
                    <?php 
                        $pDatas = Project::getDatas($pdoIntance);
                        foreach($pDatas as $pData){
                            echo Project::generateCard($pData);
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Start pool -->
    <section class="pool" id="poll-popup">
        <div>
            <h3 class="translate" translate="intro-poll"></h3>
            <h4 class="translate" translate="desc-poll"></h4>
            <form method="post">
                <div>
                    <label for="select-colors" class="translate" translate="colors-poll">Les couleurs: </label>
                    <select name="colors" id="select-colors">
                        <?php
                            for ($i=1; $i <= 5 ; $i++) {
                                echo "<option value='" . $i . "'>". $i ."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="select-anims" class="translate" translate="anims-poll">Les animations: </label>
                    <select name="anims" id="select-anims">
                        <?php
                            for ($i=1; $i <= 5 ; $i++) {
                                echo "<option value='" . $i . "'>". $i ."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="select-texts" class="translate" translate="texts-poll">Les textes: </label>
                    <select name="texts" id="select-texts">
                        <?php
                            for ($i=1; $i <= 5 ; $i++) {
                                echo "<option value='" . $i . "'>". $i ."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <p class="translate" translate="toadd-poll"></p>
                    <div>
                        <textarea name="add" id="add" cols="50" rows="5"></textarea>
                    </div>
                </div>
                <div>
                    <input type="submit" name="poll" class="btn btn-success translate" translate="submit">
                    <p class="btn btn-secondary m-0 ms-4 translate" onclick="dismissPoll()" translate="no-poll"></p>
                </div>
            </form>
        </div>
    </section>
    <!-- end pool -->
    <script src="js/navbar.js" defer></script>
    <script src="js/translate.js" defer></script>
    <script src="js/theme.js" defer></script>
    <script>
        function dismissPoll() {
            let popup = document.getElementById("poll-popup");
            popup.style.display = "none";
        }
    </script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/swiper-register.js" defer></script>
	<script>
		AOS.init();
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>