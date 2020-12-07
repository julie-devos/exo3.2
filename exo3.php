<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 3-Partie 2</title>
</head>
<body>

<?php
$age= rand(0, 100);
$genderArray= array("Homme", "Femme");
$genderRand= array_rand($genderArray);
$gender= $genderArray[$genderRand];
?>
<?="$age"." "."$gender";?><br>
<?php
if ($age<20) {
  echo "Vous avez moins de 20ans, roulez jeunesse!";

} elseif ($age>=20) {
  echo "Tout comme moi, vous n'avez plus 20 ans !";

} elseif ($gender == "Femme") {
  echo "Nous vaincrons !";

} else {
  echo "les hommes ne sont pas admis.";
}
?>

</body>
</html>
