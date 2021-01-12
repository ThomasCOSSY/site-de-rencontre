<?php
require_once 'index_controller.php';
?>

<!doctype html>
<html lang="fr">

<head>
  <title>Site de Rencontre</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>

  <div class="container-fluid">
    <div class="text-center mt-3">
      <h1><i class=""></i>👨‍💻 Adopte un.e dev 👩‍💻</h1>
    </div>
    <div class="d-flex text-white justify-content-center">
      <form action="index.php" method="post" class="backGroundForm p-4" novalidate>
        <div class="form-group">
          <span class="text-danger"><?= $errorCheck["name"] ?></span>
          <label for="name">Nom: </label>
          <input class="form-control" placeholder="Wonka" type="text" required name="name" value="<?= $userName ?>">
        </div>

        <div class="form-group">
          <span class="text-danger"><?= $errorCheck["firstname"] ?></span>
          <label for="firstname">Prénom: </label>
          <input class="form-control" placeholder="Willy" type="text" required name="firstname" value="<?= $userFirstName ?>">
        </div>

        <div class="form-group">
          <span class="text-danger"><?= $errorCheck["age"] ?></span>
          <label for="age">Âge: </label>
          <input class="form-control" placeholder="18 ou +" type="number" required name="age" value="<?= $userAge ?>">
        </div>

        <p><span class="text-danger"><?= $errorCheck["gender"] ?></span>Genre:</p>
        <div class="form-group">
          <input type="radio" name="gender" value="homme" <?= ($userGender === "homme") ? "checked" : "" ?>>
          <label for="homme">Homme</label>
          <input type="radio" name="gender" value="femme" <?= ($userGender === "femme") ? "checked" : "" ?>>
          <label for="femme">Femme</label>
        </div>

        <div class="form-group">
          <span class="text-danger"><?= $errorCheck["zipcode"] ?></span>
          <label for="zipcode">Code postal: </label>
          <input class="form-control" placeholder="66666" type="text" required name="zipcode" value="<?= $userZipCode ?>">
        </div>

        <div class="form-group">
          <span class="text-danger"><?= $errorCheck["email"] ?></span>
          <label for="email">E-mail: </label>
          <input class="form-control" placeholder="willy.wonka@chocolate.com" type="email" required name="email" value="<?= $userEmail ?>">
        </div>

        <p><span class="text-danger"><?= $errorCheck["preference"] ?></span>Vous recherchez:</p>
        <div class="form-group">
          <input type="radio" name="preference" value="homme" <?= ($userPreference === "homme") ? "checked" : "" ?>>
          <label for="homme">Homme</label>
          <input type="radio" name="preference" value="femme" <?= ($userPreference === "femme") ? "checked" : "" ?>>
          <label for="femme">Femme</label>
        </div>

        <input class="btnColor mb-5" name="submit" type="submit" value="Rencontrez nos célibataires 🌹">

      </form>
    </div>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/d89aa1e4ce.js" crossorigin="anonymous"></script>
</body>

</html>