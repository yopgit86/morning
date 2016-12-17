<?php

class Auth{

	static function isLogged(){
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['login']) && isset($_SESSION['Auth']['password'])){
			extract($_SESSION['Auth']);
			try
			{
			$bdd = new PDO('mysql:host=localhost;dbname=morning', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			} 
			catch (Exception $e)
			{
			        die('Erreur : ' . $e->getMessage());
			}
			$sql = "SELECT id FROM techniciens WHERE login='$login' AND password='$password'";
			$req = $bdd->query($sql) or die(mysqli_error());
			if($req->fetch()){
					return true;
				}else{
					return false;
				}

		}else{
			return false;
		}
	}

}


?>