// Current langage to show
let currentTranslation = "en";

// Dictionnary of translations for each key / langage
let translations = {
    /* @Todo : Rework ca en un seul tableau, ca fait mal aux yeux la.. */
    "fr" : {
        "status" : "Développeur d'applications web et mobile.<br>19 ans, étudiant à l'IUT A de Villeneuve d'Ascq.",
        "who-title" : "qui suis-je",
        "who-about" : "A propos",
        "who-desc" : "Bonjour, je suis Zaidi Mehdi, un étudiant en informatique, autodidacte et passionné de programmation.<br><br>Ma motivation a été la compréhension de ce qui se passe derrière toutes ces choses qui nous entourent, c'est donc ma curiosité qui m'a amené à développer.<br><br>Après toutes ces années de passion, mon but est de devenir développeur.",
        "year" : "Année",
        "timeline-learnt" : "ce que j'ai appris",
        "timeline-journey" : "Mon parcours",
        "my-skills": "Mes compétences",
        "others" : "Autres",
        "what-i-learnt" : "ce que j'ai appris",
        "what-i-did" : "ce que j'ai fais",
        "my-journey": "Mon expérience",
        "what-i-made" : "ce que j'ai réalisé",
        "my-projects": "Mes projets",
        "nav-who" : "<i class='fas fa-user'></i> A propos",
        "nav-skills" : "<i class='fa-solid fa-code'></i> Compétences",
        "nav-journey" : "<i class='fa-solid fa-signs-post'></i> Expérience",
        "nav-projects" : "<i class='fa-solid fa-briefcase'></i> Projets",
        "timeline-2021" : "Obtention de mon DU Tremplin (Informatique) à l'IUT A de Villeneuve d'Ascq suite à une ré-orientation en première année d'étude supérieure. Réalisation de plusieurs projets scolaire, site internet d'un restaurant, applications pythons. Rentrée en 1ère année de BUT Informatique à la suite du DU Tremplin.        ",
        "timeline-2020" : "Obtention de mon bac S.\nPoursuite de mon apprentissage du développement web et réalisation en colaboration d'un autre développeur d'un mode de jeu Roleplay sur le jeu Garry's Mod. (NostaLife Roleplay)",
        "timeline-2019" : "Découverte du C++, acquisition de solides bases en Lua, débuts dans l'émulation du jeu \"world of warcraft\", prise en main de debian et apprentissage du javascript.",
        "timeline-2018" : "Poursuite de mon apprentissage dans le développement web (mysql/php) avec un stage de seconde chez services nomades en janvier et de l'entrainement sur des projets personnels.",
        "timeline-2017" : "Début dans le développement web, apprentissage du html/css et stage de troisième chez services nomades en janvier (une entreprise de développement web et applications ios et android).",
        "timeline-2016" : "Découverte du développement web à travers différents cms/template, modification de ces derniers et customisation simple du css (couleurs, taille des textes).",
        "timeline-2015" : "Creation de petits addons sur le jeu \"Garry's Mod\" en Lua.",
        "timeline-2012-2014" : "Début de \"programmation\" sur minecraft durant mon enfance, tentative de créer mes propres petits addons en partant de la base de scripts éxistant.",
        "project-ludotheque" : "Réalisation du site internet de l'association Temps de jeu situé Lille.",
        "project-nostalife" : "Réalisation du mode de jeu & du site internet de Nostalife Roleplay, un serveur et mode de jeu roleplay sur Garry's Mod.",
        "project-hidoyat" : "Réalisation de mon portfolio dans le but de me présenter ainsi que mettre en avant mes compétences et projets.",
        "project-meetguilds" : "Réalisation de l'application web Meetguilds, projet voué à rencontrer d'autres groupes de joueurs sur World Of Warcraft.",
        "project-carcoop" : "Réalisation du site internet Carcoop, projet d'école simulant la création de la plateforme de covoiturage de l'université de Lille.",
        "project-fidelys" : "Réalisation du site internet Fidelys, projet d'école simulant la création d'une start-up digitalisant les cartes de fidélités",
        "project-fortbouyard" : "Projet d'école vouant à créer un jeu en java déstiné à des enfants de primaire.",
        "intro-poll" : "Hey ! Il semblerait que tu as terminé de visiter le site, acceptes-tu de remplir ce petit sondage ?",
        "desc-poll" : "Le but est simple, note chacun des éléments suivants sur 5.",
        "colors-poll" : "Les couleurs",
        "anims-poll" : "Les animations",
        "texts-poll" : "Les textes",
        "toadd-poll" : "Quelque chose à ajouter ?",
        "no-poll" : "Non merci 😔",
    },
    "en" : {
        "status" : "Web & Mobile developer.<br>19 years old, student at IUT A Villeneuve d'Ascq",
        "who-title" : "who am I",
        "who-about" : "About me",
        "who-desc" : "Hello, I am Zaidi Mehdi, an IT student self-taught and passionate about programming.<br><br>My motivation was the understanding of what is going on behind all these things that surround us, so it was my curiosity that led me to develop.<br><br>After all these years of passion, I would like to make developer, my job.",
        "year" : "Year",
        "timeline-learnt" : "what I learnt",
        "timeline-journey" : "My journey",
        "my-skills" : "My skills",
        "others" : "Others",
        "what-i-learnt" : "what I learnt",
        "what-i-did" : "what I did",
        "my-journey": "My journey",
        "what-i-made" : "what I made",
        "my-projects": "My projects",
        "nav-who" : "<i class='fas fa-user'></i> About",
        "nav-skills" : "<i class='fa-solid fa-code'></i> Skills",
        "nav-journey" : "<i class='fa-solid fa-signs-post'></i> Journey",
        "nav-projects" : "<i class='fa-solid fa-briefcase'></i> Projects",
        "timeline-2021" : "Obtained my DU Tremplin (IT Formation) at the IUT A of Villeneuve d'Ascq following a re-orientation in the first year of university. Realization of several school projects, website of a restaurant, pythons applications. Went in 1st year of 'BUT Informatique' following the DU Tremplin.",
        "timeline-2020" : "Obtaining my baccalaureate S. Continuing my learning of web development and development with another developer of a Roleplay gamemode on Garry’s Mod. (NostaLife Roleplay)",
        "timeline-2019" : "Discovery of C++, acquisition of solid bases in Lua, beginnings in the emulation of the game \"world of warcraft\", debian handling and learning javascript.",
        "timeline-2018" : "Continuation of my learning in web development (mysql/php) with a second traineeship at nomadic services in January and training on personal projects.",
        "timeline-2017" : "Start in web development, learning html/css and traineeship at nomadic services in January (a web development company and applications ios and android).",
        "timeline-2016" : "Discovery of web development through various cms/templates, modification of and simple customization of the css (colors, text size).",
        "timeline-2015" : "Creation of small addons on the game \"Garry’s Mod\" in Lua.",
        "timeline-2012-2014" : "Beginning of \"coding\" on minecraft during my childhood, trying to create my own small addons starting from the existing script base.",
        "project-ludotheque" : "Creation of the website of the association Temps de jeu located in Lille.",
        "project-nostalife" : "Creation of the game mode & website of Nostalife Roleplay, a server and a roleplay gamemode on Garry’s Mod.",
        "project-hidoyat" : "Realization of my portfolio in order to introduce me as well as highlight my skills and projects.",
        "project-meetguilds" : "Realization of the web application Meetguilds, project dedicated to meet other groups of players for World Of Warcraft.",
        "project-carcoop" : "Creation of the Carcoop website, a school project simulating the creation of the car sharing platform of the University of Lille.",
        "project-fidelys" : "Realization of the website Fidelys, school project simulating the creation of a startup digitalizing fidelity cards",
        "project-fortbouyard" : "School project aiming to create a game using Java for childrens.",
        "intro-poll" : "Hey ! It looks like you’re done visiting the website, are you willing to fill out this little poll?",
        "desc-poll" : "It is simple, rate those elements out of 5",
        "colors-poll" : "Colors",
        "anims-poll" : "Animations",
        "texts-poll" : "Texts",
        "toadd-poll" : "Anything to add ?",
        "no-poll" : "No thanks 😔",
    }
}

// Function that apply translations to all elements in the html with the css class "translate".
function applyTranslations(currentTranslation){
    let dic = translations[currentTranslation];
    let elements = document.getElementsByClassName("translate");
    for (let i = 0; i < elements.length; i++) {
        let attribute = elements[i].getAttribute("translate");
        let translation = dic[attribute];
        elements[i].innerHTML = translation;
    }
}

function toogleTranslation(){
    let toTranslate;
    switch (currentTranslation) {
        case "fr":
            currentTranslation = "en";
            toTranslate = "en";
            break;
        case "en":
            currentTranslation = "fr";
            toTranslate = "fr";
            break;
    }
    applyTranslations(toTranslate);
}

toogleTranslation();