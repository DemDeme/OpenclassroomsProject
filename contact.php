<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Contact - Passion Plante</title>
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
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="encyclopedia.php">Encyclopédie</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <div id="find">
            <div id="find-bloc">
                <div class="find-img">
                    <img src="img/jardin.jpg">
                </div>
                <div class="find-txt">
                    <h1>Où nous trouver ?</h1>
                    <p>
                        <strong>Adresse :</strong> 306 rue du Jardin des Plantes, 59000 Lille
                    </p>
                    <p>
                        <strong>Téléphone : </strong> 01.23.45.67.89
                    </p>
                    <p>
                        <strong>Horaires :</strong> De 6h à 22h, du lundi au samedi
                    </p>
                </div>
            </div>
        </div>
        <div id="gmaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.629777242388!2d3.0656772159005734!3d50.61541658334522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d5bf5d6bb13b%3A0x64fb9dfb82857c32!2sJardin%20des%20Plantes!5e0!3m2!1sfr!2sfr!4v1678725772014!5m2!1sfr!2sfr" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div id="form-contact">
            <form method="post" action="#">
                <div class="form">
                    <div class="one form-lab"><label for="name">Nom : </label></div>
                    <div class="two"><input type="text" name="name" placeholder="Indiquez ici votre nom" id="name" size="66px" required></div>
                    <div class="three form-lab"><label for="mail">Email : </label></div>
                    <div class="four"><input type="email" name="mail" id="mail" placeholder="Indiquez votre email" size="66px" required></div>
                    <div class="five form-lab"><label for="message">Message : </label></div>
                    <div class="six"><textarea name="message" placeholder="Que souhaitez-vous nous communiquer ?" cols="80" rows="10" required></textarea></div>
                </div>
                <button type="submit" action="form.php" class="btn btn-success" id="send-message">Envoyer</button>
            </form>
        </div>
        <footer>
            <div class="logo">
                <a href="index.php"><img src="logo.jpg" alt="logo" title="Passion Plante"></a>
            </div>
            <div class="copyright"><u>Passion Plante</u> codé par Mehdi ALA</div>
            <div class="social">
                <a href="https://twitter.com/"><img src="twitter.png" target="_blank" alt="Twitter"></a>
                <a href="https://www.instagram.com/"><img src="instagram.png" target="_blank" alt="Instagram"></a>
                <a href="https://www.linkedin.com/in/mehdi-ala-299930176/"><img src="linkedin.png" target="_blank" alt="Linkedin"></a>
            </div>
        </footer>
    </body>
</html>