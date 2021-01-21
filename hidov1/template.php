<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hidoyat.fr</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body id="navbar">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="index">Hidoyat.fr</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index">Acceuil <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="#contactme"><button class="contact-me">Me contacter</button></a>
      </span>
    </div>
  </div>
</nav>
<div class="produit">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="descproduit">
          <h5>Template pour streamer twitch</h5>
          <p>Un template 100% personnalisable (couleurs, textes...) et adapté à tous les écrans, idéal pour les streamers.</p>
          <p>Le template est fournis avec :
            <ul>
              <li>Les fichiers du site</li>
              <li>Un fichier texte expliquant comment modifier les couleurs, le texte, les liens.</li>
              <li>Votre clef client qui devra être utilisé pour activer le site.</li>
            </ul>
          </p>
          <a class="price"><span>Prix du template: 15€</span></a>
        </div>
      </div>
      <div class="col-md-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/templatestreamer1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/templatestreamer2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/templatestreamer3.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <a href="/streamer" target="_blank" class="demo"><i class="fas fa-eye"></i> Live démo</a>
      </div>
    </div>
    <div class="buytemplate">
      <h5>Acheter le template:</h5>
      <div class="templateoptions">
        <span>Template (15€/license)</span>
        <select name="template" class="optiontemplate" autocomplete="off">
          <option value="yes">Oui</option>
        </select>
        <span>Hébérgement du site (+10€/license)</span>
        <select id="host" name="host" class="optiontemplate" onchange="changehost()" autocomplete="off">
          <option value="yes">Oui</option>
          <option value="no">Non</option>
        </select>
        <span>Nom de domaine (+10€/an)</span>
        <select id="ndd" name="ndd" class="optiontemplate" onchange="changendd()" autocomplete="off">
          <option value="yes">Oui</option>
          <option value="no">Non</option>
        </select>
        <span>Personnalisation du site pour vous (+10€/license)</span>
        <select id="perso" name="perso" class="optiontemplate" onchange="changeperso()" autocomplete="off">
          <option value="yes">Oui</option>
          <option value="no">Non</option>
        </select>
      </div>
        <center>
          <a class="price">Prix final: <span id="finalprice">45€</span></a>
          <input type="submit" name="buytemplate" value="Acheter le template !">
        </center>
    </div>
  </div>
</div>
<script type="text/javascript">
  function changehost() {
    var value = document.getElementById("host").value;
    var price = document.getElementById("finalprice").innerHTML;
    var pricetext = document.getElementById("finalprice");
    if(value == "yes") {
      pricetext.innerHTML = parseInt(price, 10) + 10 + "€";
    } else {
      pricetext.innerHTML = parseInt(price, 10) - 10 + "€";
    }
  }

  function changendd() {
    var value = document.getElementById("ndd").value;
    var price = document.getElementById("finalprice").innerHTML;
    var pricetext = document.getElementById("finalprice");
    if(value == "yes") {
      pricetext.innerHTML = parseInt(price, 10) + 10 + "€";
    } else {
      pricetext.innerHTML = parseInt(price, 10) - 10 + "€";
    }
  }

  function changeperso() {
    var value = document.getElementById("perso").value;
    var price = document.getElementById("finalprice").innerHTML;
    var pricetext = document.getElementById("finalprice");
    if(value == "yes") {
      pricetext.innerHTML = parseInt(price, 10) + 10 + "€";
    } else {
      pricetext.innerHTML = parseInt(price, 10) - 10 + "€";
    }
  }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>