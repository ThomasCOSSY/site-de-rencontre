<?php

// Variables
$br = "<br>";
$messageError = [];
$messageSuccess = [];

$regexName = '/^\D{2,19}$/';
$regexAge = '/^[0-9]{2}$/i';
$regexzipcode = '/^[0-9]{5}$/i';

// S'il y a eu soumission de formulaire, vérification des données et génération d'un message succès ou erreur

// Stack tip - Checking if form has been submitted:
// For general check if there was a POST action use:
//     if (!empty($_POST))
//     This method won't work for in some cases (e.g. with check boxes and button without a name). You really should use:
//     if ($_SERVER['REQUEST_METHOD'] == 'POST')

if (isset($_POST['submit'])) {

    if (isset($_POST['name'])) {
        trim($_POST['name']);
        if (empty($_POST['name'])) {
            $messageError['name'] = 'Le champs est vide';
        } else if (!preg_match($regexName, $_POST['name'])) {
            $messageError['name'] = 'Le nom n\'est pas valide';
        } else if (strlen($_POST['name']) < 2 || strlen($_POST['name']) > 20) {
            $messageError['name'] = 'Le nom doit contenir 2 à 20 caractères';
        } else {
            $securename = htmlspecialchars($_POST['name']);
            $messageSuccess['name'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['firstname'])) {
        trim($_POST['firstname']);
        if (empty($_POST['firstname'])) {
            $messageError['firstname'] = 'Le champs est vide';
        } else if (!preg_match($regexName, $_POST['firstname'])) {
            $messageError['firstname'] = 'Le nom n\'est pas valide';
        } else if (strlen($_POST['firstname']) < 2 || strlen($_POST['firstname']) > 20) {
            $messageError['firstname'] = 'Le nom doit contenir de 2 à 20 caractères';
        } else {
            $securefirstname = htmlspecialchars($_POST['firstname']);
            $messageSuccess['firstname'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['age'])) {
        trim($_POST['age']);      
        if (empty($_POST['age'])) {
            $messageError['age'] = 'Le champs est vide';
        } else if ($_POST['age'] <= 17) {
            $messageError['age'] = 'Vous ne pouvez pas vous inscrire, vous êtes mineur';
        } else if (!preg_match($regexAge, $_POST['age'])) {
            $messageError['age'] = 'Séléctionnez un âge compris entre 18 et 99';
        } else {
            $secureage = htmlspecialchars($_POST['age']);
            $messageSuccess['age'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['zipcode'])) {
        trim($_POST['zipcode']);
        if (empty($_POST['zipcode'])) {
            $messageError['zipcode'] = 'Le champs est vide';
        } else if (!preg_match($regexzipcode, $_POST['zipcode'])) {
            $messageError['zipcode'] = 'Le code postal n\'est pas valide';
        } else if (strlen($_POST['zipcode']) < 2 || strlen($_POST['zipcode']) > 5) {
            $messageError['zipcode'] = 'Le code postal doit contenir 5 caractères';
        } else {
            $securezipcode = htmlspecialchars($_POST['zipcode']);
            $messageSuccess['zipcode'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        trim($email);
        if (empty($_POST['email'])) {
            $messageError['email'] = 'Le champs est vide';
        } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $secureemail = $_POST['email'];
            $messageSuccess['email'] = '<i class="fas fa-check formValid"></i>';
        } else {
            $messageError['email'] = 'L\'email n\'est pas valide';
        }
    }

    // Radio
    if (!array_key_exists('preference', $_POST)) {
        $messageError['preference'] = 'Veuillez faire un choix';
    } else {
        $securepreference = $_POST['preference'];
    }

    if (!array_key_exists('gender', $_POST)) {
        $messageError['gender'] = 'Veuillez faire un choix';
    } else {
        $securegender = $_POST['gender'];
    }

    if (count($messageError) == 0) {
        $securename = htmlspecialchars($_POST['name']);
        $securefirstname = htmlspecialchars($_POST['firstname']);
        $secureage = htmlspecialchars($_POST['age']);        
        $securezipcode = htmlspecialchars($_POST['zipcode']);
        $secureemail = htmlspecialchars($_POST['email']);        
        $securepreference = htmlspecialchars($_POST['preference']);
        $securegender = htmlspecialchars($_POST['gender']);
    }
}

// Mise en place des cookies
// Penser à récupérer les données sécurisées - faire un test
if ((isset($_POST["name"])) && (isset($_POST["firstname"])) && (isset($_POST["age"])) && (isset($_POST["zipcode"])) && (isset($_POST["email"])) && (isset($_POST["gender"])) && (isset($_POST["preference"]))) {
    $userName = $_POST["name"];
    $userFirstName = $_POST["firstname"];
    $userAge = $_POST["age"];
    $userZipCode = $_POST["zipcode"];
    $userEmail = $_POST["email"];
    $userGender = $_POST["gender"];
    $userPreference = $_POST["preference"];
    // Cookie set pour 24h
    setcookie("name", $userName, time() + 24 * 60 * 60);
    setcookie("firstname", $userFirstName, time() + 24 * 60 * 60);
    setcookie("age", $userAge, time() + 24 * 60 * 60);
    setcookie("zipcode", $userZipCode, time() + 24 * 60 * 60);
    setcookie("email", $userEmail, time() + 24 * 60 * 60);
    setcookie("gender", $userGender, time() + 24 * 60 * 60);
    setcookie("preference", $userPreference, time() + 24 * 60 * 60);
    // Une fois que les cookies ont été placés, ils seront accessibles lors du prochain chargement de page dans le tableau $_COOKIE:
    // header("Location: user.php");
}

$catalog = [
    0 => ["name" => "Vallois",
    "firstname" => "Nicolas",
    "age" => "22",
    "zipcode" => "76600",
    "email" => "bg_du_havre@lamanu.fr",
    "preference" => "Mariah Carey",
    "gender" => "Homme",
    "picture" => "nicolas.jpg",
    "description" => "Si tu ressembles à Zero Two, tu m'intéresses aussi"]
,    
    1 => ["name" => "Menvusa",
    "firstname" => "Gérard",
    "age" => "40",
    "zipcode" => "76600",
    "email" => "optic4000@gmail.com",
    "preference" => "Femme",
    "gender" => "Homme",
    "picture" => "gerard.jpeg",
    "description" => "Je sais déjà que tu vas me taper dans l'oeil"]
,
    2 => ["name" => "Bayne",
    "firstname" => "Bruce",
    "age" => "35",
    "zipcode" => "76600",
    "email" => "parmabarbe@batman.com",
    "preference" => "Femme",
    "gender" => "Homme",
    "picture" => "bruce.jpg",
    "description" => "Je ne dis pas que je suis Batman, juste qu'on l'a jamais vu en même temps que moi"]
,
    3 => ["name" => "Neart",
    "firstname" => "Alexandre",
    "age" => "22",
    "zipcode" => "60420",
    "email" => "ouraipmaster@lamanu.fr",
    "preference" => "Femme",
    "gender" => "Homme",
    "picture" => "alexis.jpg",
    "description" => "A la recherche de ma dulcinée pour partager des Mc Wraps en tête à tête. Fan de js, s'abstenir."]
,
    4 => ["name" => "Jobs",
    "firstname" => "Jean-Michel",
    "age" => "33",
    "zipcode" => "75002",
    "email" => "apple4ever@lamanu.fr",
    "preference" => "Homme",
    "gender" => "Homme",
    "picture" => "jobs.jpg",
    "description" => "Votre temps est limité, ne le gâchez pas en menant une existence qui n'est pas la vôtre."]
,
    5 => ["name" => "Binks",
    "firstname" => "Ken",
    "age" => "45",
    "zipcode" => "31000",
    "email" => "missamissa@lamanu.fr",
    "preference" => "Homme",
    "gender" => "Homme",
    "picture" => "ken.jpg",
    "description" => "Missa déteste war press, jamais cherché bisbille! La clé Ousséké la clé de mon keur? La!"]
,
    6 => ["name" => "Triangle",
    "firstname" => "Mariah",
    "age" => "50",
    "zipcode" => "76600",
    "email" => "jaimechanter@hotmail.fr",
    "preference" => "Homme",
    "gender" => "Femme",
    "picture" => "mariah.jpg",
    "description" => "j'ai une grande passion pour Noel"]
,
    7 => ["name" => "Ozaur",
    "firstname" => "Amandine",
    "age" => "87",
    "zipcode" => "76600",
    "email" => "minitel@wanadoo.fr",
    "preference" => "Homme",
    "gender" => "Femme",
    "picture" => "amandine.jpg",
    "description" => "J'ai connu une époque sans internet"]
,
    8 => ["name" => "bellossi",
    "firstname" => "Monica",
    "age" => "56",
    "zipcode" => "76600",
    "email" => "monicaB@gmail.com",
    "preference" => "Homme",
    "gender" => "Femme",
    "picture" => "monica.jpg",
    "description" => "recherche homme sérieux"]
,
    9 => ["name" => "Poirson",
    "firstname" => "Ivy",
    "age" => "25",
    "zipcode" => "40404",
    "email" => "loveisp0ison@lamanu.fr",
    "preference" => "Homme",
    "gender" => "Femme",
    "picture" => "ivy.jpg",
    "description" => "La dernière fleur que tu croisera sur ton chemin 🥀"]
,
    10 => ["name" => "Cartapus",
    "firstname" => "Chantal",
    "age" => "40",
    "zipcode" => "61302",
    "email" => "camouflage@lamanu.fr",
    "preference" => "Femme",
    "gender" => "Femme",
    "picture" => "chantal.jpg",
    "description" => "Là on me voit, là on me voit plus, on me voit, on me voit plus, on me voit un peu, on me voit plus, on me voit."]
,
    11 => ["name" => "Grande",
    "firstname" => "Ariana",
    "age" => "25",
    "zipcode" => "60420",
    "email" => "lovefarmers@lamanu.fr",
    "preference" => "Femme",
    "gender" => "Homme",
    "picture" => "ariana.jpg",
    "description" => "Hey guys, this is Ariana and I love french devs! Especially Alexandre!"]

];