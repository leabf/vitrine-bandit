<?php
try{
  $bdd = new PDO('mysql:host=localhost;dbname=projetbandits;charset=utf8', 'root', '');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM villes WHERE ville_nb_selection!=0";
  $requete = $bdd->prepare($sql);
  $requete->execute();
  $results = $requete->fetchAll(PDO::FETCH_ASSOC);

  $reponse = json_encode($results);

  echo $reponse;
}
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>
