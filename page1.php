<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 (suite)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Suite Exercice 1 - 2</h2>


<?php  echo'<a href="index.php" >Index</a>'; 

echo  "<br>";

?>


<?php
echo  "<br>";
echo "Nom: ".$_GET["nom"]."<br />";
    echo "Prénom: ".$_GET["prenom"]."<br />";
?>

<?php 
echo  "<br>";

// page1.php

session_start();

echo 'Ceci est la suite de l\'exercice<br />';
echo  "<br>";
echo $_SESSION['Nom'];
echo  "<br>";
echo $_SESSION['Prenom'];
echo  "<br>";
echo $_SESSION['Age'];
echo  "<br>";
echo date('Y m d h:i:s', $_SESSION['time']);
echo  "<br>";

?>

<h2>Exercice 3</h2>

<?php 

$_SESSION['age'] = 29;



?>


</body>
</html>