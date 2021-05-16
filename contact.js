/* **************DARK MODE**************** */
var element1 = document.getElementsByClassName('Case_contact')
console.log(element1)

var darkm = document.getElementById('dark')
console.log(darkm)

darkm.addEventListener("click", function () {
    console.log('Je suis ici après avoir cliqué')
    element1[0].classList.toggle('dark-mode')
})

/* ************ FORMULAIRE ***************** */
// creation des variables à partir des id
var retour = document.getElementById('retour');
var nom = document.getElementById('namee');
var email = document.getElementById('email');
var texte = document.getElementById('message');
var valider = document.getElementById('bouton');


// validation de l'email (sert a validé l'inscription d'une email valable)
function formatEmail(mail) {
    return /\S+@\S+.\S+/.test(mail);
};

var message = ' '; //l'espace sert à ce qu'il n'y ai pas 0 caractères dans la case message

// fonction pour valider les données
function validation() {
    // création de la variable message
    message = '';

    if (formatNom(nom.value) == true) {
        message = message + "The name is not valid.<br />";
    }

    if (formatEmail(email.value) == false) {
        message = message + "The email is not valid.<br />";
    }

    if (texte.value.length == 0) {
        message = message + "The message box is empty.<br />";
    }

    retour.innerHTML = message;

}

// permet de détecter quand on écrit
addEventListener('keyup', validation);

function envoye() {

    // envoi du message seulement si il n'y a aucune erreur dans les champs
    if (message.length == 0) {
        message = message + "Your message has been sent";
    }
    retour.innerHTML = message;
}

// détection du clique sur le bouton "submit"
valider.addEventListener('click', envoye);

// message d'erreur si il y a un chiffre dans le nom
function formatNom(nom) {
    return /\d/.test(nom);
};