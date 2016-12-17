<?php
// On démarre la session AVANT d'écrire du code HTML
//session_start();
include 'inc\db.php';
header('Location: admin.php');
if(isset($_POST['bouton_techniciens'])){
// Fonction récupere nom et prénom puis crée le login pnom puis retire les espaces
$strPrenom = $_POST['prenom'];
$strNom = $_POST['nom']; 
$first = $strPrenom{0};
$login = $first.$strNom;
$login = str_replace(' ','', $login);
$loginsa = $login;
 // fonction indépendante afin de retirer les accents du login
		function stripAccentsUtf8($loginsa)
		{
		$loginsa = mb_strtolower($loginsa, 'UTF-8');
		$loginsa = str_replace(
		array(
		'à', 'â', 'ä', 'á', 'ã', 'å',
		'î', 'ï', 'ì', 'í',
		'ô', 'ö', 'ò', 'ó', 'õ', 'ø',
		'ù', 'û', 'ü', 'ú',
		'é', 'è', 'ê', 'ë',
		'ç', 'ÿ', 'ñ',
		),
		array(
		'a', 'a', 'a', 'a', 'a', 'a',
		'i', 'i', 'i', 'i',
		'o', 'o', 'o', 'o', 'o', 'o',
		'u', 'u', 'u', 'u',
		'e', 'e', 'e', 'e',
		'c', 'y', 'n',
		),
		$loginsa
		);

return $loginsa;
}

$login = stripAccentsUtf8($login); 

// Fonction insère dans la base un nouvel utilisateur
	$req = $bdd->prepare('INSERT INTO `techniciens`(`login`, `password`, `nom`, `prenom`, `id_equipes`) VALUES (:login, MD5("pwd"), :nom, :prenom, :id_equipes)');
	$req->execute(array(
	'login' => $login,
	'nom' => $_POST['nom'],
	'prenom' => $_POST['prenom'],
	'id_equipes' => $_POST['id_equipes']
	));

echo "<fieldset><legend><h2>Mise à jour</h2></legend>".'  Le technicien '.$strNom.' '.$strPrenom.' a été ajouté avec le login : '.$login.'. Le mot de passe par défaut est : pwd'."</fieldset>";

}
?>
<?php
if(isset($_POST['bouton_logiciels'])){
// Fonction insère dans la base un nouveau logiciel
  $req = $bdd->prepare('INSERT INTO `logiciels`(`nom_logiciel`, `mop`, `mop_actions`, `id_equipes`) VALUES (:nom_logiciel, :mop, :mop_actions, :id_equipes)');
  $req->execute(array(
  'nom_logiciel' => $_POST['nom_logiciel'],
  'mop' => $_POST['mop'],
  'mop_actions' => $_POST['mop_actions'],
  'id_equipes' => $_POST['id_equipes']
  ));


echo "<fieldset><legend><h2>Mise à jour</h2></legend>".'  Le logiciel '.$_POST['nom_logiciel'].' a été ajouté a la base '."</fieldset>";
}
?>

</body>
</html> 