<?php
require_once 'user_controller.php';
?>

<!doctype html>
<html lang="fr">

<head>
    <title>Votre profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>


<h1>Bonjour <?= $_COOKIE["firstname"]?> ! Voici les éléments que vous nous avez confié :</h1>

<table>
    <tr>
        <td>Nom :</td>
        <td></td>
    </tr>
    <tr>
        <td>Prénom :</td>
        <td></td>
    </tr>
    <tr>
        <td>Age :</td>
        <td></td>
    </tr>
    <tr>
        <td>Code postal :</td>
        <td></td>
    </tr><tr>
        <td>Email :</td>
        <td></td>
    </tr>
    <tr>
        <td>Vous êtes un(e) :</td>
        <td></td>
    </tr>
    <tr>
        <td>Vous recherchez un(e) :</td>
        <td></td>
    </tr>
</table>

<!-- Suppression des cookies -->
<form action="user.php" method="post">
    <div class="erase-data">
        <button type="submit" class="btn" name="erase-data">:x: Effacer mon profil :x:</button>
    </div>
</form>

<!-- Redirection vers le secret de l'amour, l'univers et tout le reste -->

    <div class="redirect">
        <button type="submit" class="btn" name="redirect-user" onclick="window.location.href = 'https://img-9gag-fun.9cache.com/photo/3053_700bwp.webp%27%22%3E'">💸 Take my money :money_with_wings:</button>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d89aa1e4ce.js" crossorigin="anonymous"></script>
    <script src="assets/script.js"></script>
</body>

</html>