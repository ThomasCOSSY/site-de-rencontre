<?php
// Récupération des données saisies via les cookies
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

<!-- Suppression des cookies -->
<form action="index.php" method="post">
    <div class="erase-data">
        <button type="submit" class="btn" name="erase-data">:x: Effacer mon profil :x:</button>
    </div>
</form>

<!-- Redirection vers le secret de l'amour, l'univers et tout le reste -->
<form action="" method="post">
    <div class="redirect">
        <button type="submit" class="btn" name="redirect-user" onclick="window.location.href = 'https://img-9gag-fun.9cache.com/photo/3053_700bwp.webp%27%22%3E'">💸 Take my money :money_with_wings:</button>
    </div>
</form>