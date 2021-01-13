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
    <div class="text-center">
        <h1>Bonjour <?= $_COOKIE["firstname"] ?> ! Voici les éléments que vous nous avez confié:</h1>

        <table class="d-flex justify-content-center m-5 table table-hover">
            <tr>
                <td>Nom:</td>
                <td><?= $_COOKIE["name"] ?></td>
            </tr>
            <tr>
                <td>Prénom:</td>
                <td><?= $_COOKIE["firstname"] ?></td>
            </tr>
            <tr>
                <td>Âge:</td>
                <td><?= $_COOKIE["age"] ?></td>
            </tr>
            <tr>
                <td>Code postal:</td>
                <td><?= $_COOKIE["zipcode"] ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?= $_COOKIE["email"] ?></td>
            </tr>
            <tr>
                <td>Vous êtes un(e):</td>
                <td><?= $_COOKIE["gender"] ?></td>
            </tr>
            <tr>
                <td>Vous recherchez un(e):</td>
                <td><?= $_COOKIE["preference"] ?></td>
            </tr>
        </table>
        <!-- retourner à la page lovers.php -->
        <form action="lovers.php">
            <button type="submit" class="btn">Retourner aux célibataires</button>
        </form>

        <!-- Redirection vers le secret de l'amour, l'univers et tout le reste -->

        <!-- <div class="redirect">
            <button type="submit" class="btn btn-outline-warning" name="redirect-user" onclick="window.location.href = 'http://www.lesbisounours.fr/'">💸 Take my money :money_with_wings:</button>
        </div> -->
        <form action="specialgift.php" method="post">
            <div class="">
                <button type="submit" class="btn" name="specialgift">💸 Take my money 💸</button>
            </div>
        </form>

        <!-- Suppression des cookies -->
        <form action="user.php" method="post">
            <div class="erase-data">
                <button type="submit" class="btn" name="erase-data">❌ Effacer mon profil ❌</button>
            </div>
        </form>



    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d89aa1e4ce.js" crossorigin="anonymous"></script>
    <script src="assets/script.js"></script>
</body>

</html>