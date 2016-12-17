<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
$_SESSION = array();
session_destroy();
header('location:index.php');
?>

