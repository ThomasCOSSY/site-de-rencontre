<?php
require_once 'lovers_controller.php';
?>

<!doctype html>
<html lang="fr">

<head>
    <title>Nos célibataires</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bonjour <?= $_COOKIE["firstname"]  ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Nos célibataires <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php">Profile</a>
      </li>
      
    </ul>
  </div>
</nav>



    <!-- On parcourt le tableau $catalog, à chaque fois qu'on a un numéro (bachelorNumber), on affiche le bachelor
Puis dans chaque tableau bachelor, à chaque catégories (nom, prénom, age ect...), on affiche les infos correspondant (bachelorInfos) 
ouvrir <php 
foreach ($catalog as $bachelorNumber => $bachelor) {
    echo "Célibataire n°" . ($bachelorNumber + 1) . " :<br>";
    foreach ($bachelor as $bachelorCategory => $bachelorInfos) {
        echo $bachelorCategory . " : " . $bachelorInfos . "<br>";
    }
    echo "<br>";
}
?>-->
    <div class="row">
        <?php
        foreach ($catalog as $bachelorNumber => $bachelor) { 
            // if ($_COOKIE['preference'] == $bachelor["gender"]){
                ?>
            <div class="card col-4" style="width: 18rem;">
                <?= "Célibataire n°" . ($bachelorNumber + 1) . " :<br>"; ?>
                <img src="assets/img/<?= $bachelor["picture"] ?>" class="card-img-top" alt="<?= $bachelor["firstname"] ?>">
                <div class="card-body">
                    <p class="card-title h5"><?= $bachelor["firstname"] . " " . $bachelor["name"] ?></p>
                    <p class="card-text"><?= $bachelor["age"] ?> ans</p>
                    <p class="card-text">Code postal : <?= $bachelor["zipcode"] ?></p>
                    <p class="card-text"><?= $bachelor["description"] ?></p>
                    
                </div>
                <div class="d-flex justify-content-end">
                <img src="assets/img/coeur_vide.png" class="img-like" alt="coeur" width="50 rem">
                </div>
            </div>
        <?php }} ?>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d89aa1e4ce.js" crossorigin="anonymous"></script>
    <script src="assets/script.js"></script>
</body>

</html>