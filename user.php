<?php
$br = "<br>";

// Mise en place des cookies
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
    header("Location: user.php");
}

if (isset($_COOKIE["name"])) {
    echo "Nom: " . $_COOKIE["name"] . $br;
} else {
    echo "⛔ Le nom n'a pas été renseigné." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

if (isset($_COOKIE["firstname"])) {
    echo "Prénom: " . $_COOKIE["firstname"] . $br;
} else {
    echo "⛔ Le prénom n'a pas été renseigné." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

if (isset($_COOKIE["age"])) {
    echo "Âge: " . $_COOKIE["age"] . $br;
} else {
    echo "⛔ L'âge n'a pas été renseigné." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

if (isset($_COOKIE["zipcode"])) {
    echo "Code postal: " . $_COOKIE["zipcode"] . $br;
} else {
    echo "⛔ Le Code postal n'a pas été renseigné." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

if (isset($_COOKIE["email"])) {
    echo "Email: " . $_COOKIE["email"] . $br;
} else {
    echo "⛔ L'email n'a pas été renseigné." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

if (isset($_COOKIE["gender"])) {
    echo "Sexe: " . $_COOKIE["gender"] . $br;
} else {
    echo "⛔ Le sexe n'a pas été renseigné." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

if (isset($_COOKIE["preference"])) {
    echo "Préférence: " . $_COOKIE["preference"] . $br;
} else {
    echo "⛔ La préférence n'a pas été renseignée." . " Pour initialiser les données, c'est " . "<a href=\"index.php\">✨ Ici ✨</a>" . $br;
}

// Suppression des cookies
?>

<div class="erase-data">
    <button type="submit" class="btn">:x: Effacer mon profil :x:</button>
</div>
<div class="redirect">
    <button type="submit" class="btn" onclick="window.location.href = 'https://img-9gag-fun.9cache.com/photo/3053_700bwp.webp%27%22%3E💸 Take my money :money_with_wings:</button>
</div>