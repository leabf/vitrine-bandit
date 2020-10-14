<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=projetbandits;charset=utf8', 'root', '');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "UPDATE villes SET ville_nb_selection = ville_nb_selection+1 WHERE ville_code_postal = '{$_POST['codePostal']}'";
  $requete = $bdd->prepare($sql);
  $requete->execute();

  header('location: /vitrine-bandit/rfid/src/accueil_rfid.html');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>
