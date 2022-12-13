<?php
session_start();

$_SESSION['nb_vie'] = 1 ;
$_SESSION['resultat'] = null;
$_SESSION['badLetter'] = null;
$_SESSION['goodLetter'] = null;

header('Location: index.php');
?>