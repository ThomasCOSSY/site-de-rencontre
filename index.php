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
      <h1><i class=""></i>Adopte ton dev</h1>
    </div>

    <div class="d-flex text-white justify-content-center">

      <form enctype="multipart/form-data" action="lovers.php" method="post" class="backGroundForm p-4"> 
        <div>
          <label for="name">Nom</label>
        </div>
        <div>
          <input type="text" id="name" name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" placeholder="ex : Doe">
        </div>
        <p class="displayMessage">
          <?= isset($messageError['name']) ? $messageError['name'] : '' ?><?= isset($messageSuccess['name']) ? $messageSuccess['name'] : '' ?>
        </p>
        <div>
          <label for="firstname">Prénom</label>
        </div>
        <div>
          <input type="text" id="firstname" name="firstname" value="<?= (isset($_POST['firstname'])) ? $_POST['firstname'] : '' ?>" placeholder="ex : John">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError['firstname'])) ? $messageError['firstname'] : '' ?><?= isset($messageSuccess['firstname']) ? $messageSuccess['firstname'] : '' ?>
        </div>
        <div>
          <label for="age">Votre âge</label>
        </div>
        <div>
          <input type="text" id="age" name="age" value="<?= (isset($_POST['age'])) ? $_POST['age'] : '' ?>">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError['age'])) ? $messageError['age'] : '' ?><?= isset($messageSuccess['age']) ? $messageSuccess['age'] : '' ?>
        </div>        
        <div>
          <label for="zipcode">Code postal</label>
        </div>
        <div>
          <input type="text" id="zipcode" name="zipcode" value="<?= (isset($_POST['zipcode'])) ? $_POST['zipcode'] : '' ?>" placeholder="75000">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError['zipcode'])) ? $messageError['zipcode'] : '' ?><?= isset($messageSuccess['zipcode']) ? $messageSuccess['zipcode'] : '' ?>
        </div>
        <div>
          <label for="email">Adresse email</label>
        </div>
        <div>
          <input type="eemail" id="email" name="email" value="<?= (isset($_POST['email'])) ? $_POST['email'] : '' ?>" placeholder="exemple@gemail.com">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError['email'])) ? $messageError['email'] : '' ?><?= isset($messageSuccess['email']) ? $messageSuccess['email'] : '' ?>
        </div>  
        
        
        <div>
          <label for="gender">Vous êtes :</label>
        </div>
        <div class="row">            
          <input class="optionRadio" type="radio" id="gender" name="gender" value="Homme" <?= isset($_POST['gender']) && $_POST['gender'] == 'Homme' ? 'checked' : '' ?>></input>
          <label class="alignRadio" for="gender">un Homme</label>

          <input class="optionRadio" type="radio" id="gender" name="gender" value="Femme" <?= isset($_POST['gender']) && $_POST['gender'] == 'Femme' ? 'checked' : '' ?>></input>
          <label class="alignRadio" for="gender">une Femme</label>
        </div>
        <div class="displayMessage">
          <?= (isset($messageError['gender'])) ? $messageError['gender'] : '' ?>
        </div>
              
        <div>
          <label for="preference">Vous recherchez :</label>
        </div>
        <div class="row">            
          <input class="optionRadio" type="radio" id="preference" name="preference" value="Homme" <?= isset($_POST['preference']) && $_POST['preference'] == 'Homme' ? 'checked' : '' ?>></input>
          <label class="alignRadio" for="preference">un Homme</label>

          <input class="optionRadio" type="radio" id="preference" name="preference" value="Femme" <?= isset($_POST['preference']) && $_POST['preference'] == 'Femme' ? 'checked' : '' ?>></input>
          <label class="alignRadio" for="preference">une Femme</label>
        </div>
        <div class="displayMessage">
          <?= (isset($messageError['preference'])) ? $messageError['preference'] : '' ?>
        </div>

          
        <input class="btnColor mb-5" name="submit" type="submit" value="Rencontrez nos célibataires">

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