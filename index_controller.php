<?php

$messageError = [];
$messageSuccess = [];

$regexName = '/^\D{2,19}$/';
$regexAge = '/^[0-9]{2}$/i';

$regexzipcode = '/^[0-9]{5}$/i';
//prend 0 ou +33 ou 0033 puis un chiffre de 1à9 ensuite 8 chiffres

$regexNumber = '/^[0-9]+$/';



if (isset($_POST['submit'])) {

    if (isset($_POST['name'])) {
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