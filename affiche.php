<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

//$_SESSION['prenom'];
//$_SESSION['nom']
?>


<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />


<body>

<?php include 'inc\db.php';
$reponse = $bdd->query('SELECT * FROM events WHERE >1 ');

while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Evenement le</strong> : <?php echo $donnees['event_time']; ?><br />
    Nagios : <?php echo $donnees['nagios']; ?>,  <br />
    Détails : <?php echo $donnees['nagios_txt']; ?>,  <br />
    Novell : <?php echo $donnees['novell']; ?>,  <br />
	Détails : <?php echo $donnees['novell_txt']; ?>,  <br />
	Wsus : <?php echo $donnees['wsus']; ?>,  <br />
    Détails : <?php echo $donnees['wsus_txt']; ?>,  <br /> 
    Sauvegarde : <?php echo $donnees['save']; ?>,  <br />
    Détails : <?php echo $donnees['save_txt']; ?>,  <br />
    MIB : <?php echo $donnees['mib']; ?>,  <br />
    Détails : <?php echo $donnees['mib_txt']; ?>,  <br />    
    VMWARE : <?php echo $donnees['vmware']; ?>,  <br />
    Détails : <?php echo $donnees['vmware_txt']; ?>,  <br />    
    Salle serveur : <?php echo $donnees['servers']; ?>,  <br />
    Détails : <?php echo $donnees['servers_txt']; ?>,  <br />    
    Serveur exchange : <?php echo $donnees['exchange']; ?>,  <br />
    Détails : <?php echo $donnees['exchange_txt']; ?>,  <br />    
  
   </p>
<?php
}

$reponse->closeCursor();
?>
<p><a href="index.php">Retour</a></p>

</body>
</html> 
