<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Accueil - Passion Plante</title>
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="css/encyclopedia.css" type="text/css" rel="stylesheet">
        <link href="css/contact.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <!-- Starting de la page d'accueil -->
        <header>
            <div class="logo">
                <a href="index.php"><img src="img/logo.jpg" alt="logo" title="Passion Plante"></a>
            </div>
            <div id="navbarh">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="encyclopedia.php">Encyclopédie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <div id="presentation">
            <div id="pres-bloc">
                <div class="pres-txt">
                    <h1>Passion Plante</h1>
                    <p>
                        Bienvenue à toi, Ô fan de plantes, sur ce fabuleux site fait par un passionné pour des passionnés !
                    </p>
                    <p>
                        A l'ère d'une planète de plus en plus polluée, les plantes sont devenues le moyen parfait alliant décoration pour 
                        tous les gouts et un intérieur purifié !
                    </p>
                    <p>
                        Cependant, tout comme l'humain, l'animal ou presque tout ce qui fait que le monde est monde, les plantes sont
                        toutes différentes les unes des autres. Eh oui, même chez deux plantes cousines, l'une et l'autre peuvent avoir 
                        des besoins différents.
                    </p>
                    <p>
                        Ici, tu trouveras la réponse à toutes tes questions. Alors prends un siège, installe toi bien confortablement 
                        et toi aussi apprend à bichonné tes bébés ! 
                    </p>
                </div>
                <div class="pres-img">
                    <img src="img/pres-pic.jpg">
                </div>
            </div>
        </div>
        <div id="posts-div">
            <h1>Derniers posts</h1>
            <div class="posts">
                <a href="#" class="link-hover">
                    <img src="img/black.png">
                    <div class="middle">Nom de la plante</div>
                </a>
                <a href="encyclopedia.php#spec" class="link-hover">
                    <img src="img/wp4.jpg">
                    <div class="middle">Nom de la plante</div>
                </a>
                <a href="#" class="link-hover">
                    <img src="img/black.png">
                    <div class="middle">Nom de la plante</div>
                </a>
            </div>
        </div>
        <div id="redac">
            <div class="redac-bloc">
                <div class="redac-img">
                    <img id="redac-rand-img" src="img/sanseveria.jpg">
                    <h2>Sansevieria</h2>
                </div>
                <div class="redac-txt">
                    <div class="redac-stand">
                        <h1>Le Choix de la Rédac'?</h1>
                        <p>
                            En panne d'inspiration ? Des doutes quant à l'association de tes plantes ?
                        </p>
                        <p>
                            Pourquoi ne pas te laisser inspiré par notre talentueuse rédaction ? Qui sait ce que tu y découvriras !
                        </p>
                    </div>
                    <div class="redac-rand">
                        <p>
                            Avec ses longues feuilles élégantes qui s'élancent dans les airs, la sansevieria est une plante qui 
                            figure parmi les plus faciles d'entretien. Robuste, elle s'adapte à tous les types d'éclairage et 
                            supporte les arrosages irréguliers, en plus d'être une plante dépolluante.
                        </p>
                        <p>
                            La sansevieria est idéale en hiver, et grâce à ses feuilles graphiques et design, c'est la plante parfaite 
                            pour embellir nos décors !
                        </p>
                        <a href="encyclopedia.php" alt="Choix de la Rédac"><button type="button" class="btn btn-success">Venez la découvrir</button></a>
                    </div>
                </div>

            </div>
        </div>
        <footer>
            <div class="logo">
                <a href="index.php"><img src="img/logo.jpg" alt="logo" title="Passion Plante"></a>
            </div>
            <div class="copyright"><u>Passion Plante</u> codé par Mehdi ALA</div>
            <div class="social">
                <a href="https://twitter.com/"><img src="img/twitter.png" target="_blank" alt="Twitter"></a>
                <a href="https://www.instagram.com/"><img src="img/instagram.png" target="_blank" alt="Instagram"></a>
                <a href="https://www.linkedin.com/in/mehdi-ala-299930176/"><img src="img/linkedin.png" target="_blank" alt="Linkedin"></a>
            </div>
        </footer>
    </body>
</html>