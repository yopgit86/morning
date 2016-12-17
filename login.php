<?php
// On démarre la session AVANT d'écrire du code HTML
include 'inc\db.php';
if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])){
	extract($_POST);
	$password = sha1($password);
	$sql = "SELECT id FROM techniciens WHERE login='$login' AND password='$password'";
	$req = $bdd->query($sql) or die(mysqli_error());
	if($req->fetch())
	{

	$_SESSION['Auth'] = array(
		'login' => $login,
		'password' => $password
	);
	header ('location:morningcheck.php');
	}else{
		echo "Mauvais identifiant ou mot de passe";
	}
}

?>

<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Login</title>

<body>
<h1>Login</h1>


</body>
</html>