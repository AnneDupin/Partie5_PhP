<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Exercice 3</h2>
    <?php

echo '<br /><a href=index.php?nom=Dupin&amp;prenom=Anne&amp;age=29"> index.php </a>'


?>

<?php 
echo  "<br>";

// page2.php

session_start();

echo  "<br>";
echo $_SESSION['Nom'];
echo  "<br>";
echo $_SESSION['Prenom'];
echo  "<br>";
echo $_SESSION['age'];
echo  "<br>";

?>

<?php

$age = 29;

   

if ($age <= 130) // Si l'âge est supérieur à 18 et inférieur à 130

{

   echo "Salut tu es majeur.e !<br />";

   $autorisation_entrer = "Oui";

}

else // SINON

{

   echo "Ceci est un site pour adulte, tu es trop jeune pour pouvoir entrer. Au revoir !<br />";

   $autorisation_entrer = "Non";

}

       

echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";


?>

<?php 

echo $_GET['age'];
if($_GET['age'] > 18 && $_GET['age'] < 130 ){
    echo $_GET['Nom'] . ' '. $_GET['Prenom'].' '. $_GET['age'];
    } else {
        echo 'l\'age n\'est pas correcte';
    }

?>

</body>
</html>