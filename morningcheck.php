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
<p>

<!--   <fieldset>
 -->  <legend><h2>Logiciels Systemes</h2></legend>
<?php 
$reponse = $bdd->query('SELECT * FROM logiciels, etats WHERE logiciels.etat_courant=etats.id AND id_equipes=2');
?>
<table>
	<thead> <!--entete du tableau-->
		<tr>	
			<th class="tableautitre">Asset</th>
			<th class="tableautitre">Etat</th>
			<th class="tableautitre">Commentaire</th>
		</tr>
	</thead>

<!-- 	<tfoot> 
		<tr>	
			<th class="tableautitre">Asset</th>
			<th class="tableautitre">Etat</th>
			<th class="tableautitre">Commentaire</th>
		</tr>
	</tfoot> --> 

<?php
while ($donnees = $reponse->fetch())
{
$var = "0";
$var = $donnees['etat'];
?>
	<tbody> <!--corps du tableau-->


	<tr class="<?php echo $donnees['etat'] != "normal" ? 'etatnormal' : 'etatdegrade';?>">
			<td class="cell"><p><?php echo $donnees['nom_logiciel']; ?></p></td>



			<td class="cell"><p><?php echo $donnees['etat']; ?></p></td>
			<td class="cell"><p><?php echo $donnees['commentaire_courant']; ?></p></td>


  <!-- echo '<li>'.$donnees['nom_logiciel'] . ' '.$donnees['nom'] .' '.$donnees['commentaire_courant'] .' </li> <br />'; -->
<?php 
}
$reponse->closeCursor(); ?>


		</tr>
	</tbody> 

</table>
<!-- <a href='logout.php'>Se déconnecter</a> -->
</body>
</html> 