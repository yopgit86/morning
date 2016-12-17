<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
include 'inc\db.php';
require('auth.php');
/*if(Auth::isLogged()){
	echo "connexion ok";
}else{
	header('location:index.php');
}*/

?>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="css/style.css"/>
	</head>


<body>
<h3>page privée morning check</h3>