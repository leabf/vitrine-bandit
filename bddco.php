<?php

try{
$bdd = new PDO('mysql:host=localhost;dbname=projetbandits;charset=utf8', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO email (libelle_email) VALUES('{$_POST['email']}')";
$bdd->exec($sql);
echo "New record";
}
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$bdd=null;
?>
