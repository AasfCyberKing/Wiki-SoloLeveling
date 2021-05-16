<!-- Définit le type de document à interpréter, dans notre cas: HTML -->
<!DOCTYPE html>
<!-- Langue par défaut du site: Anglais -->
<html lang = "en">

<!-- HEAD: contient toutes les informations de type "métadonnées" du document -->

<head>
    <!-- Information liée à la page web -->
    <!-- Nom de l'onglet -->
    <title>Image Gallery</title>
    <!-- "identité" du site visible en première ligne du code HTML -->
    <meta name = "description" content = " This is the gallery page in which you can find several images of the manwha ">
    <meta name = "author" content      = "IDRI RAYAN">
    <!-- "balise" utilisé pour permettre au site d'afficher tout les caractères -->
    <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
    <!-- Liaison de notre fichier CSS au fichier HTML -->
    <link rel = "stylesheet" type = "text/css" href = "style-galerie.css">
    <link rel="stylesheet" media="screen" type="text/css" href="index.css">
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

<!-- ---------------------------------------------------------- -->

        <!-- les filtres -->
        <div id = "filtres">
            <ul>
                <li class = "filter active" data-filter = "all"> ALL </li>
                <li class = "filter" data-filter        = "Woo"> SUNG-JIN-WOO </li>
                <li class = "filter" data-filter        = "Fr_En"> FRIENDS & ENEMY </li>
                <li class = "filter" data-filter        = "monsters"> MONSTERS </li>
            </ul>
        </div>

    <!-- ---------------------------------------------------------- -->
    <div class = "container">
        <!-- les éléments a affiché -->
        <div id    = "elements">
        <div class = "Woo">
        <p   class = "container__img-holder" class = "txt-img"> The owner of the dragon daggers
        <img src   = "img/background.png" alt      = "" width = "100%" height = "100%">
                </p>
            </div>
            <div class = "Woo">
            <p   class = "container__img-holder" class = "txt-img"> Sung-Jin-Woo has developed inhuman abilities
            <img src   = "img/immortal.jpg" alt        = "" width = "100%" height = "100%">
                </p>
            </div>
            <div class = "Woo">
            <p   class = "container__img-holder" class = "txt-img"> The fist of destruction
            <img src   = "img/invincible.jpg" alt      = "" width = "100%" height = "100%">
                </p>
            </div>
            <div class = "Woo">
            <p   class = "container__img-holder" class = "txt-img"> The shadow emperor
            <img src   = "img/king.jpg" alt            = "" width = "100%" height = "100%">
                </p>
            </div>
            <div class = "Woo">
            <p   class = "container__img-holder" class = "txt-img"> The man who awakened an unknown power
            <img src   = "img/powerful.jpg" alt        = "" width = "100%" height = "100%">
                </p>
            </div>
            <div class = "Woo">
            <p   class = "container__img-holder" class = "txt-img"> Deadly techniques of the dragons daggers
            <img src   = "img/zeroTohero.jpg" alt      = "" width = "100%" height = "100%">
                </p>
            </div>

            <!-- ------------------------------------------------------------------------------- -->

            <div class = "Fr_En">
            <p   class = "container__img-holder" class = "txt-img"> The best hunters in the ranking of all of South Korea
            <img src   = "img/strong.jpg" alt          = "" width = "100%" height = "100%">
                </p>
            </div>
            <div class = "Fr_En">
            <p   class = "container__img-holder" class = "txt-img"> Cha Hae-In wants to join Sung-Jin-Woo's guild
                    <img src = "img/Cha.jpg" alt = "" width = "100%" height = "100%">
                </p>
            </div>
            <div class = "Fr_En">
            <p   class = "container__img-holder" class = "txt-img"> Sung-Jin-Woo's father has a demonic power
                    <img src = "img/angry.png" alt = "" width = "100%" height = "100%">
                </p>
            </div>
            <div class = "Fr_En">
            <p   class = "container__img-holder" class = "txt-img"> The most powerful statue in the dungeon with the
                    powers of a "god"
                    <img src = "img/god.jpg" alt = "" width = "100%" height = "100%">
                </p>
            </div>

            <!-- ------------------------------------------------------------------------------- -->

            <div class = "monsters">
            <p   class = "container__img-holder" class = "txt-img"> The army of shadows keeps expanding
            <img src   = "img/army.jpg" alt            = "" width = "100%" height = "100%">
                </p>
            </div>
            <div class = "monsters">
            <p   class = "container__img-holder" class = "txt-img"> More than training, a deadly fight between two titans
            <img src   = "img/fight.jpg" alt           = "" width                      = "100%" height = "100%">
                </p>
            </div>
            <div class = "monsters">
            <p   class = "container__img-holder" class = "txt-img"> An incredible fight between two powerful monsters!
                    <img src = "img/punch.jpg" alt = "" width = "100%" height = "100%">
                </p>
            </div>
            <div class = "monsters">
            <p   class = "container__img-holder" class = "txt-img"> Having him as an enemy means wanting to die so don't provoke him!
                    <img src = "img/squad.jpg" alt = "" width = "100%" height = "100%">
                </p>
            </div>
        </div>

        <!-- Réglage Popup -->
        <div class = "img-popup">
        <img src   = "img" alt = "Popup Image">
        <div class = "close-btn">
        <div class = "bar"></div>
        <div class = "bar"></div>
            </div>
        </div>
    </div>
    <!-- Importer le code JS pour que certaines variables CSS et JS puissent fonctionner -->
    <script src = "Galerie.js"></script>
</body>
<!-- -------------------------------------- -->
<hr id="séparation"> <br>
<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_commentaire;charset=utf8','root','');
if(isset($_POST['submit_commentaire'])) {
    if(isset($_POST['pseudo'],$_POST['commentaire']) AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $commentaire = htmlspecialchars($_POST['commentaire']);
        if(strlen($pseudo) < 25) {
            $ins = $bdd->prepare('INSERT INTO commentaire (pseudo, commentaire, date_post) VALUES (?,?,NOW())');
            $ins->execute(array($pseudo,$commentaire));
            $c_msg = "<span style='color:black'>Your comment has been posted ✅</span>";
        } else {
            $c_msg = "Error: The nickname must be less than 25 characters ❌";
        }
    } else {
        $c_msg = "Error: All fields must be completed ❌";
    }
}
if(isset($_POST['dlt-btn'])) {
    if(isset($_POST['id_dlt'])) {
        $ins = $bdd->prepare('DELETE FROM commentaire WHERE id = :dlt_com');
        $ins->execute(array(
            "dlt_com" => $_POST['id_dlt']
        ));
    }
}
   $commentaires = $bdd->prepare('SELECT * FROM commentaire ORDER BY id DESC');
$commentaires->execute();
?>

<!-- -------------------------------------- -->

<h1 id="com_name">Comments Section</h1>
<div class="space_write">
<h2>Leave a comment :</h2>
<br><br>
<form method="POST" class="post" action="Galerie.php#com_name">
<input type="text" name="pseudo" placeholder="Username" class="pseudo"><br>
<textarea name="commentaire" placeholder="Your comment..." class="commentaire"></textarea><br>
<input type="submit" value="Post your comment" name="submit_commentaire" class="submit">
</form>
<div class="msg-err">
<?php if(isset($c_msg)) { echo $c_msg; } ?>
</div>
</div>

<!-- -------------------------------------- -->

<div class="space_com">
<h2>Comments :</h2>
<br><br>
<?php while($c = $commentaires->fetch()) { ?>
<b> <?= $c['pseudo'] ?> </b> :  &nbsp&nbsp&nbsp&nbsp <?= $c['commentaire'] ?> &nbsp&nbsp&nbsp&nbsp <b> <?= $c['date_post'] ?></b> 
    <form method="POST" action="Galerie.php#com_name">
        <input type="hidden" name="id_dlt" value="<?php echo $c['id'] ?>">
        <button class="supp" name="dlt-btn" type="submit"> Delete </button>
    </form>
    <br><br><hr><br>
<?php } ?>
<?php
?>
</div>
</html>