<!-- Définit le type de document à interpréter, dans notre cas: HTML -->
<!DOCTYPE html>
<!-- Langue par défaut du site: Anglais -->
<html lang="en">

<!-- HEAD: contient toutes les informations de type "métadonnées" du document -->

<head>
    <!-- Information liée à la page web -->
    <!-- Nom de l'onglet -->
    <title>Contact Us</title>
    <!-- "identité" du site visible en première ligne du code HTML -->
    <meta name="description" content=" This is the contact page to leave a message to the site moderators ">
    <meta name="author" content="IDRI RAYAN">
    <!-- "balise" utilisé pour permettre au site d'afficher tout les caractères -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Liaison de notre fichier CSS au fichier HTML -->
    <link rel="stylesheet" type="text/css" href="Contact.css">
    <!-- Liaison de notre fichier HTML à une bibliothèque Jquery pour comprendre les variables utilisé dans le fichier JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Logo du site présent dans l'onglet -->
    <link rel="icon" type="image/png" href="img/lord.png" />
    <!-- Permet au site de définir sa taille par rapport à celle de l'écran -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- BODY : Représente le contenu principal d'un site (document HTML) -->

<body>
    <!-- Menu Burger -->
    <div class="menu">
        <div>
            <!-- Titre présent dans la barre du menu burger -->
            <span class="title">Solo Leveling Fandom</span>
            <!-- Bouton dark mode présent dans la barre du menu burger -->
            <button id="dark"> DARK MODE 🌙 </button>
        </div>
        <!-- Bouton pour ouvrir le menu burger "☰" -->
        <input class="burger" type="checkbox">
        <!-- Bouton pour changer de page -->
        <nav>
            <br>
            <u>
                <a href="Index.php"><i class="material-icons">Homepage</i></a>
                <br>
                <a href="Biographie.php"><i class="material-icons">Biography</i></a>
                <br>
                <a href="Galerie.php"><i class="material-icons">Image Gallery</i></a>
                <br>
                <a href="Contact.php"><i class="material-icons">Contact Us</i></a>
            </u>
        </nav>
    </div>

    <!-- ---------------------------------------------------------- -->

    <!-- Formulaire -->
    <div class="Case_contact">
        <section class="contact-form">
            <div class="responsive">
                <header class="header">
                    Welcome to the contact page of the Solo Leveling Fandom !
                </header>
                <br>
                <h2>Contact</h2>
                <aside id="asidee">
                    <!-- Texte à droite du Formulaire -->
                    <p>
                        Complete the form if you wish to contact us about new things to bring to the site or if you wish
                        to
                        have more information on the site or its content.
                    </p>
                </aside>
                <!-- Texte du Formulaire -->
                <form id="contact" name="contact" accept-charset="utf-8">
                    <label><span>Name</span><input name="name" type="text" placeholder="Name" id="namee" /></label>
                    <label><span>Email</span><input name="email" type="email" placeholder="Email" id="email" /></label>
                    <label><span>Message</span><textarea name="message" placeholder="Message" id="message"></textarea></label>
                    <input id="bouton" name="submit" type="submit" value="Submit" />
                </form>
                <p id="retour"></p>
            </div>
        </section>
    </div>

    <!-- ---------------------------------------------------------- -->

    <!-- Importer le code JS pour que certaines variables CSS et JS puissent fonctionner -->
    <script src="contact.js"></script>
</body>

</html>