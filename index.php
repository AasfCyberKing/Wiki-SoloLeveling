<!-- Définit le type de document à interpréter, dans notre cas: HTML -->
<!DOCTYPE html>
<!-- Langue par défaut du site: Anglais -->
<html lang = "en">

<!-- HEAD: contient toutes les informations de type "métadonnées" du document -->

<head>
    <!-- Information liée à la page web -->
    <!-- Nom de l'onglet -->
    <title>Homepage</title>
    <!-- "identité" du site visible en première ligne du code HTML -->
    <meta name = "description" content = " This is the home page with a global presentation of manwha ">
    <meta name = "author" content      = "IDRI RAYAN">
    <!-- "balise" utilisé pour permettre au site d'afficher tout les caractères -->
    <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
    <!-- Liaison de notre fichier CSS au fichier HTML -->
    <link rel = "stylesheet" type = "text/css" href = "style-accueil.css">
    <!-- Liaison de notre fichier HTML à une bibliothèque Jquery pour comprendre les variables utilisé dans le fichier JS -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Logo du site présent dans l'onglet -->
    <link rel = "icon" type = "image/png" href = "img/lord.png" />
    <!-- Permet au site de définir sa taille par rapport à celle de l'écran -->
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
</head>

<!-- BODY : Représente le contenu principal d'un site (document HTML) -->

<body>
    <!-- Menu Burger -->
    <div class = "menu">
        <div>
            <!-- Titre présent dans la barre du menu burger -->
            <span class = "title">Solo Leveling Fandom</span>
            <!-- Bouton dark mode présent dans la barre du menu burger -->
            <button id = "dark"> DARK MODE 🌙 </button>
        </div>
        <!-- Bouton pour ouvrir le menu burger "☰" -->
        <input class = "burger" type = "checkbox">
        <!-- Bouton pour changer de page -->
        <nav>
            <br>
            <u>
                <a href = "Index.php"><i class = "material-icons">Homepage</i></a>
                <br>
                <a href = "Biographie.php"><i class = "material-icons">Biography</i></a>
                <br>
                <a href = "Galerie.php"><i class = "material-icons">Image Gallery</i></a>
                <br>
                <a href = "Contact.php"><i class = "material-icons">Contact Us</i></a>
            </u>
        </nav>
    </div>
    <!-- Texte de la page d'acceuil -->
    <div class = "gauche_text">
    <h2  id    = "texte_img_1">
            <u> Solo Leveling (나 혼자만 레벨업) </u>
        </h2>
        <br>
        <h4 id = "texte_img_2">
            10 years ago, after “the Gate” that connected the real world with the monster world opened, some of the
            ordinary, everyday people received the power to hunt monsters within the Gate. They are known as "Hunters".
            However, not all Hunters are powerful. My name is Sung Jin-Woo, an E-rank Hunter. I'm someone who has to
            risk his life in the lowliest of dungeons, the "World's Weakest". Having no skills whatsoever to display, I
            barely earned the required money by fighting in low-leveled dungeons… at least until I found a hidden
            dungeon with the hardest difficulty within the D-rank dungeons! In the end, as I was accepting death, I
            suddenly received a strange power, a quest log that only I could see, a secret to leveling up that only I
            know about! If I trained in accordance with my quests and hunted monsters, my level would rise. Changing
            from the weakest Hunter to the strongest S-rank Hunter!
        </h4>
        <!-- Bouton pour faire apparaître et disparaître la vidéo -->
        <button id = "butoon">
            <b>
            Click to see the trailer
            </b>
        </button>
    </div>
    <!-- Video teaser de solo leveling -->
                        <div    id    = "video">
                        <iframe width = "95%" height = "580" src = "https://www.youtube.com/embed/U9P9PzmrjAg"
                                allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen> </iframe>
                        </div>
                        <!-- Cadre de la frise chronologique -->
                        <div class = "flex">
                        <div class = "FRISE">
                                <!-- Titre de la frise chronologique -->
                                <h1><br><u>Solo Leveling Timeline</u></h1>
                                <!-- bloc contenant tous les bloc de "dates" -->
                                <div id = "container">
                                    <!-- "commande" faisant que les "dates" défile à l'horizontal -->
                                    <ul id = "liste">
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 0</li>
                                                <li class = "sujet">Prologue</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 1-10</li>
                                                <li class = "sujet">D-Rank Dungeon Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 11-12</li>
                                                <li class = "sujet">Reawakening Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 13-17</li>
                                                <li class = "sujet">Instant Dungeon Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 18-24</li>
                                                <li class = "sujet">Dungeon & Lizards Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 25-34</li>
                                                <li class = "sujet">Dungeon & Prisoners Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 35-37</li>
                                                <li class = "sujet">Yoo Jin-Ho Raid Party Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 38-45</li>
                                                <li class = "sujet">Job Change Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 46-55</li>
                                                <li class = "sujet">Red Gate Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 56-61</li>
                                                <li class = "sujet">Demon Castle Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 61-64</li>
                                                <li class = "sujet">Retesting Rank Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 65-75</li>
                                                <li class = "sujet">Hunters Guild Gate Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 76-89</li>
                                                <li class = "sujet">Jeju Island Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 108-111</li>
                                                <li class = "sujet">Recruitement Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 112-121</li>
                                                <li class = "sujet">Ah-Jin Guild Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 122-132</li>
                                                <li class = "sujet">Double Dungeon Arc</li>
                                            </ul>
                                        </li>
                                        <!-- bloc chapitre & nom -->
                                        <li class = "dates">
                                            <ul>
                                                <li class = "annee">Chapter 133-139</li>
                                                <li class = "sujet">Japan Crisis Arc</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Importer le code JS pour que certaines variables CSS et JS puissent fonctionner -->
                        <script src = "Accueil.js"></script>
</body>

</html>