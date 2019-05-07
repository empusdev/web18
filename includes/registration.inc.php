<?php
if (isset($_POST['validation'])) {
  // Récupération des éléments du formulaire
  $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
      $email = isset($_POST['email']) ? $_POST['email'] : "";
        $mdp = isset($_POST['passwd']) ? $_POST['passwd'] : "";

  // Initialisation d'un tableau vide
  $erreur = array();
  if ($nom == "") { array_push($erreur, "Veuillez saisir un nom"); } //ajout d'une erreur dans le tableau
  if ($prenom == "") { array_push($erreur, "Veuillez saisir un prénom"); }
  if ($email == "") { array_push($erreur, "Veuillez saisir un mail"); }
  if ($mdp == "") { array_push($erreur, "Veuillez saisir un mot de passe"); }

  //On vérifie si le tableau d'erreurs est vide ou non
  if (count($erreur) > 0) {
    echo "<ul>";
    for ($i=0; $i<(count($erreur)) ; $i++) {
      echo "<li>".$erreur[$i]."</li>";
    }
    echo "</ul>";
  }
  else {
    echo "Le tableau est vide, insertion en BDD";
  }
}
else {
  require_once 'formregistration.php';
}
