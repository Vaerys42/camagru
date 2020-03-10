<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Camagru - Accueil</title>
  <link rel="stylesheet" type="text/css" href="css/core.css" />
</head>
<body>
    <header>
        <h1>Camagru</h1>
        <ul id="horizontal-menu-list">
            <li class="horizontal-menu">Accueil</li>
            <li class="horizontal-menu">Dernières photos postées</li>
            <li class="horizontal-menu">Photos les plus likées</li>
        </ul>
    </header>
    <nav>
        <ul id="vertical-menu-list">
            <div id="profile-pic-shape">
                <img src="photos/kanao.jpg" id="profile-pic"/>
            </div>
            <li class="vertical-menu">Mon compte</li>
            <li class="vertical-menu">Mes photos</li>
            <li class="vertical-menu">Mes commentaires</li>
            <li class="vertical-menu">Mes likes</li>
            <li class="vertical-menu">Réglages</li>
            <li class="vertical-menu">Déconnexion</li>
        </ul>
    </nav>
    <div class="principal-area">
        <?php
            include("view/last-photo.php");
        ?>
    </div>
    <footer>

    </footer>
</body>
</html>