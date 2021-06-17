<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Exercice 4</h2>

    <?php
echo '<br /><a href=index.php?nom=Dupin&amp;prenom=Anne&amp;age=29">index.php</a>'
?>

<?php
 echo  "<br>";
echo $_SERVER['SERVER_NAME'];
echo  "<br>";
?>


<?php
echo  "<br>";
$indicesServer = array('PHP_SELF',
'argv',
'argc',
'GATEWAY_INTERFACE',
'SERVER_ADDR',
'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'REQUEST_METHOD',
'REQUEST_TIME',
'REQUEST_TIME_FLOAT',
'QUERY_STRING',
'DOCUMENT_ROOT',
'HTTP_ACCEPT',
'HTTP_ACCEPT_CHARSET',
'HTTP_ACCEPT_ENCODING',
'HTTP_ACCEPT_LANGUAGE',
'HTTP_CONNECTION',
'HTTP_HOST',
'HTTP_REFERER',
'HTTP_USER_AGENT',
'HTTPS',
'REMOTE_ADDR',
'REMOTE_HOST',
'REMOTE_PORT',
'REMOTE_USER',
'REDIRECT_REMOTE_USER',
'SCRIPT_FILENAME',
'SERVER_ADMIN',
'SERVER_PORT',
'SERVER_SIGNATURE',
'PATH_TRANSLATED',
'SCRIPT_NAME',
'REQUEST_URI',
'PHP_AUTH_DIGEST',
'PHP_AUTH_USER',
'PHP_AUTH_PW',
'AUTH_TYPE',
'PATH_INFO',
'ORIG_PATH_INFO') ;

echo '<table cellpadding="10">' ;
foreach ($indicesServer as $arg) {
    if (isset($_SERVER[$arg])) {
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
    }
    else {
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
    }
}
echo '</table>' ;
?>


<?php $_GET['serveur'] = 'Apache';
?>

<?php 
if(isset($_GET['serveur']))
{
    echo  "<br>";
    echo htmlentities($_GET['serveur']);
    echo  "<br>";
}


?>

<?php

// On teste si la variable est définie avec la fx isset() 
echo $_SERVER['SERVER NAME'];
if(isset($_GET['serveur']))  {
    echo 'le serveur utilisé est ' . $_GET['serveur'];
} else {
    echo 'Erreur, serveur non-existant';
}



?>




</body>
</html>