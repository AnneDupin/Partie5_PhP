<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie_5</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>DesCodeuses Partie 5</h1>

    <h2>Exercice 1</h2>
<p><b>Créez un lien avec les paramètres "nom" et "prénom" dirigeant sur la page courante et affichez ces paramètres.</b></p>

<?php

echo '<br /><a href="page1.php?nom=Dupin&amp;prenom=Anne&amp;age=29"> index.php </a>'


?>


<?php 
   session_start();
   $_SESSION['prenom'] = 'Anne';
   $_SESSION['nom'] = 'Dupin';
   $_SESSION['age'] = '29';
   echo  "<br>";

?>

<?php
            echo 'Bonjour ' .$_SESSION['prenom']. ' ' .$_SESSION['nom'];
        ?>

  

<?php $_GET['prenom'] = 'Anne';
$_GET['nom'] = 'Dupin';
?>

<?php 
if(isset($_GET['prenom']))
{
    echo  "<br>";
    echo htmlentities($_GET['prenom']);
    echo  "<br>";
    echo htmlentities($_GET['nom']);
}


?>


<h2>Exercice 2</h2>
<p><b>Créez un lien avec les paramètres "nom", "prénom" et "âge" dirigeant sur une autre page et affichez ces paramètres.</b></p>


<?php

$_SESSION['Nom'] = 'Dupin';
$_SESSION['Prenom'] = 'Anne';
$_SESSION['time'] = time();
$_SESSION['age'] = 29;

echo '<br /><a href="page1.php?nom=Dupin&amp;prenom=Anne&amp;age=29"> Page1.php </a>'

?>

<?php 
$dn="1991";

$dn = $dn + 11/12;
echo  "<br>";
echo "Année de naissance :", $dn, " âge : ", show_age($dn), "\n";


function show_age($dn)

{

      $age=(date("Y")+date("m")/12)-$dn;

      echo (int)$age;

      if (($age-(int)$age) >= 0.5)

      {

         echo"&frac12;";

      }

}
?>


<h2>Exercice 3</h2>
<p><b>Créez un lien avec les paramètres "nom", "prénom" et "âge" dirigeant sur une autre page. Si l'âge est supérieur à 18 et inférieur à 130 affichez ces paramètres. L'âge ne peut être qu'un entier.</b></p>
<?php

$_SESSION['Nom'] = 'Dupin';
$_SESSION['Prenom'] = 'Anne';

$_SESSION['age'] = 29;

echo '<br /><a href="page2.php?nom=Dupin&amp;prenom=Anne&amp;age=29"> Page2.php </a>'


?>



<h2>Exercice 4</h2>
<p><b>Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. Vérifiez si le paramètre serveur existe, si oui affichez le sinon affichez un message d'erreur.</b></p>
<?php

echo '<br /><a href="page3.php?nom=Dupin&amp;prenom=Anne&amp;age=29&amp;language=php&amp;serveur=appache2">Page 3</a>'

?>
<h2>Exercice 5</h2>
<p><b>Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. Vérifiez si les paramètres existent, si oui affichez les sinon affichez un message d'erreur.</b></p>
<?php

echo '<br /><a href="page3.php?nom=Dupin&amp;prenom=Anne&amp;age=29&amp;language=php&amp;serveur=appache2">Page 3</a>'

?>

    <?php
    $newPage3=fopen("page 3.php","bye");
    fclose($newPage3);
    ?>
    <a href="page3.php?langage=PHP&serveur=<?php
    echo $_SERVER["HTTP_HOST"]?>">Afficher</a>

<h2>Exercice 6</h2>
<p><b>Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. Vérifiez si les paramètres existent, si oui affichez les sinon affichez un message d'erreur. Vous devez empêchez l'inclusion de balises html dans les paramètres.</b></p>
<?php

echo '<br /><a href="page3.php?nom=Dupin&amp;prenom=Anne&amp;age=29&amp;language=php&amp;serveur=appache2">Page 3</a>'

?>

<?php 

if (isset($_GET['serveur']) && issets($_GET['language'])) {

    echo htmlspecialchars('Bonjour ' . $_GET['serveur'] . ' ' . $_GET['serveur'] . ' ' . $_GET['language'] . ' !');
} else 
{
    echo 'Il faut renseigner un serveur et un langage';
}
?>

<?php
            if (empty($_POST['firstName']) && empty($_POST['lastName'])) {
                ?>
            <form method="post" action="index.php">
                <select name="civilite">
                    <option>Mr</option>
                    <option>Mme</option>
                </select>
                <label>Nom</label>
                <input type="text" name="lastName" placeholder="Votre nom" required>
                <label>Prénom</label>
                <input type="text" name="firstName" placeholder="Votre prénom" required>
                <input type="submit" name="valider" value="Valider"/>
            </form>
            <?php
      $verifName = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";
      if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['civilite'])){
          if(preg_match($verifName, $_POST['lastName']) && preg_match($verifName, $_POST['firstName'])){
         echo 'Bonjour '. ' ' . $_POST['civilite']. ' ' . $_POST['firstName']. ' ' . $_POST['lastName'];
          }else{
             echo ' Veuillez vérifier votre saisie !';
          }
     }
     
     }
        ?>

<?php
    $newPage4=fopen("server3.php","a+");
    fclose($newPage4);
    ?>

    <a href="page3.php?langage=<?php
    $var=strip_tags("PHP");
    htmlspecialchars($var);
    echo $var;?>&serveur=
    <?php echo $_SERVER["HTTP_HOST"]?>">Afficher</a>

</body>
</html>