<?php
$br = "<br>";
// Récupération des données saisies via les cookies
if (isset($_COOKIE["name"])) {
    echo "";
} else {
    echo "⛔ Le nom n'a pas été renseigné." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

if (isset($_COOKIE["firstname"])) {
    echo "";
} else {
    echo "⛔ Le prénom n'a pas été renseigné." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

if (isset($_COOKIE["age"])) {
    echo "";
} else {
    echo "⛔ L'âge n'a pas été renseigné." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

if (isset($_COOKIE["zipcode"])) {
    echo "";
} else {
    echo "⛔ Le Code postal n'a pas été renseigné." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

if (isset($_COOKIE["email"])) {
    echo "";
} else {
    echo "⛔ L'email n'a pas été renseigné." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

if (isset($_COOKIE["gender"])) {
    echo "";
} else {
    echo "⛔ Le sexe n'a pas été renseigné." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

if (isset($_COOKIE["preference"])) {
    echo "";
} else {
    echo "⛔ La préférence n'a pas été renseignée." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

// Suppression des cookies
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pour supprimer un cookie, il faut de nouveau appeller la fonction setcookie() en lui passant en paramètre le nom du cookie uniquement.
    setcookie("name");
    unset($_COOKIE['name']);
    setcookie("firstname");
    unset($_COOKIE['firstname']);
    setcookie("age");
    unset($_COOKIE['age']);
    setcookie("zipcode");
    unset($_COOKIE['zipcode']);
    setcookie("email");
    unset($_COOKIE['email']);
    setcookie("gender");
    unset($_COOKIE['gender']);
    setcookie("preference");
    unset($_COOKIE['preference']);
    
    // On redirige vers index.php
    header('Location: index.php');
}
