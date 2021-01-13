<?php
// Variables : set br et initialisation du comptage des erreurs
$br = "<br>";
$error = 0;
// var_dump($_POST);
// Initialisation du tableau de check des erreurs
$errorCheck = [
    "name" => "",
    "firstname" => "",
    "age" => "",
    "zipcode" => "",
    "email" => "",
    "gender" => "",
    "preference" => ""
];

// Filtrage des données potentiellement dangereuses
// htmlspecialchars() va permettre d’échapper certains caractères spéciaux comme les chevrons « < » et « > » en les transformant en entités HTML.
// trim() qui va supprimer les espaces inutiles et stripslashes() qui va supprimer les antislashes.
function cleanData($var)
{
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}

// Une fois les données soumises, on applique le premier filtre (clean data) et on stocke les valeurs dans une variable pour pouvoir les afficher dans le formulaire
$userName = (isset($_POST["name"])) ? cleanData($_POST["name"]) : "";
$userFirstName = (isset($_POST["firstname"])) ? cleanData($_POST["firstname"]) : "";
$userAge = (isset($_POST["age"])) ? cleanData($_POST["age"]) : "";
$userZipCode = (isset($_POST["zipcode"])) ? cleanData($_POST["zipcode"]) : "";
$userEmail = (isset($_POST["email"])) ? cleanData($_POST["email"]) : "";
$userGender = (isset($_POST["gender"])) ? cleanData($_POST["gender"]) : "";
$userPreference = (isset($_POST["preference"])) ? cleanData($_POST["preference"]) : "";

// Fonctions de validation des champs

// Pour la saisie de texte (Nom ou Prénom)
function validateTextField($var)
{
    $var = cleanData($var);
    if (empty($var)) return false;
    $textRegex = '/^\D*$/'; 
    if (preg_match($textRegex, $var) == false) return false;
    return true;
}

// Pour la saisie d'un âge
function validateAgeField($var)
{
    $var = cleanData($var);
    if (empty($var)) return false;
    $textRegex = '/^[0-9]{2}$/i';
    if (preg_match($textRegex, $var) == false) return false;
    if (intval($var) < 18) return false;
    return true;
}

// Pour la saisie d'un code postal
function validateZipCodeField($var)
{
    $var = cleanData($var);
    if (empty($var)) return false;
    $textRegex = '/^[0-9]{5}$/i';
    if (preg_match($textRegex, $var) == false) return false;
    return true;
}

// Pour la saisie d'un email
function validateEmailField($var)
{
    $var = cleanData($var);
    if (empty($var)) return false;
    if (!filter_var($var, FILTER_VALIDATE_EMAIL)) return false;
    return true;
}

// Pour la saisie du genre
function validateGenderField($var)
{
    $validGender = array("homme", "femme");
    $var = cleanData($var);
    if (empty($var)) return false;
    return in_array($var, $validGender);
}

// Pour la saisie de la préférence
function validatePreferenceField($var)
{
    $validPreference = array("homme", "femme");
    $var = cleanData($var);
    if (empty($var)) return false;
    return in_array($var, $validPreference);
}

// S'il y a eu soumission de formulaire, génération des fonctions de validation pour chaque saisie et incrémentation de $error si le champ est non valide     
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check champ nom
    if (!validateTextField($_POST["name"])) {
        $errorCheck["name"] = "Nom non valide";
        $error++;
    } else {
        $errorCheck["name"] = "✔";
    }
    // Check champ prénom
    if (!validateTextField($_POST["firstname"])) {
        $errorCheck["firstname"] = "Prénom non valide";
        $error++;
    } else {
        $errorCheck["firstname"] = "✔";
    }
    // Check champ âge
    if (!validateAgeField($_POST["age"])) {
        $errorCheck["age"] = "Âge non valide";
        $error++;
    } else {
        $errorCheck["age"] = "✔";
    }
    // Check champ code postal
    if (!validateZipCodeField($_POST["zipcode"])) {
        $errorCheck["zipcode"] = "Code postal non valide";
        $error++;
    } else {
        $errorCheck["zipcode"] = "✔";
    }
    // Check champ email
    if (!validateEmailField($_POST["email"])) {
        $errorCheck["email"] = "Email non valide";
        $error++;
    } else {
        $errorCheck["email"] = "✔";
    }
    // Check champ genre
    if (!array_key_exists("gender", $_POST) || !validateGenderField($_POST["gender"])) {
        $errorCheck["gender"] = "Genre non valide";
        $error++;
    } else {
        $errorCheck["gender"] = "✔";
    }
    // Check champ préférence
    if (!array_key_exists("preference", $_POST) || !validatePreferenceField($_POST["preference"])) {
        $errorCheck["preference"] = "Préférence non valide";
        $error++;
    } else {
        $errorCheck["preference"] = "✔";
    }
}

// NON (A ET B) = NON A OU NON B
/* 
   ET            OU
A B R !R      !A !B R 
--------      -------
0 0 0  1      0  0  1
1 0 0  1      1  0  1
0 1 0  1      0  1  1
1 1 1  0      1  1  0
*/

// Mise en place des cookies
// Les données sécurisées sont récupérées
if (($error === 0) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
    // Cookie set pour 24h
    setcookie("name", $userName, time() + 24 * 60 * 60);
    setcookie("firstname", $userFirstName, time() + 24 * 60 * 60);
    setcookie("age", $userAge, time() + 24 * 60 * 60);
    setcookie("zipcode", $userZipCode, time() + 24 * 60 * 60);
    setcookie("email", $userEmail, time() + 24 * 60 * 60);
    setcookie("gender", $userGender, time() + 24 * 60 * 60);
    setcookie("preference", $userPreference, time() + 24 * 60 * 60);
    // Une fois que les cookies ont été placés, ils seront accessibles lors du prochain chargement de page dans le tableau $_COOKIE. 
    // On redirige vers lovers.php
    header('Location: lovers.php');
}


