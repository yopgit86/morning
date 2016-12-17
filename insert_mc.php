<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

//$_SESSION['prenom'];
//$_SESSION['nom']
?>

<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />


<body>

<?php include 'inc\db.php'; ?>
nagios <?php echo $_POST['nagios']; ?>

<?php
if($_POST['nagios']==0)
{
    echo '<img src="pic\ok.png" border=0>';
}
elseif($_POST['nagios']==1)
{
    echo '<img src="pic\ko1.png" border=0>';
}
else
{
    echo '<img src="pic\ko2.png" border=0>';
}
?>
<?php
$req = $bdd->prepare('INSERT INTO events(event_time, nagios, nagios_txt, novell, novell_txt, wsus, wsus_txt, save, save_txt, mib, mib_txt, vmware, vmware_txt, servers, servers_txt, exchange, exchange_txt)
	VALUES(NOW(), :nagios, :nagios_txt, :novell, :novell_txt, :wsus, :wsus_txt, :save, :save_txt, :mib, :mib_txt, :vmware, :vmware_txt, :servers, :servers_txt, :exchange, :exchange_txt)');
$req->execute(array(
    'nagios'  => $_POST['nagios'],
 	'nagios_txt'  => $_POST['nagios_txt'],
    'novell'  => $_POST['novell'],
    'novell_txt'  => $_POST['novell_txt'],
    'wsus'  => $_POST['wsus'],
    'wsus_txt'  => $_POST['wsus_txt'],
    'save'  => $_POST['save'],
    'save_txt'  => $_POST['save_txt'],
    'mib'  => $_POST['mib'],
    'mib_txt'  => $_POST['mib_txt'],    
    'vmware'  => $_POST['vmware'],
    'vmware_txt'  => $_POST['vmware_txt'],
    'servers'  => $_POST['servers'],
    'servers_txt'  => $_POST['servers_txt'],    
    'exchange'  => $_POST['exchange'],
    'exchange_txt'  => $_POST['exchange_txt'],
    ));

echo 'Les valeurs ont étés mises à jour';
?>

<p><a href="index.php">Retour</a></p>

</body>
</html> 

<?php // $req = $bdd->prepare('INSERT INTO events(event_time, nagios, nagios_txt, novell, wsus, save, mib, vmware, servers, exchange) VALUES(NOW(), :nagios, :nagios_txt, :novell, :wsus, :sauvegarde, :mib, :vmware, :server, :exchange)'); 

/*    'wsus'  => $_POST['wsus'],
    'save'  => $_POST['sauvegarde'],
    'mib'  => $_POST['mib'],
    'vmware'  => $_POST['vmware'],
    'servers'  => $_POST['server'],
    'exchange'  => $_POST['exchange'],
    'nagios'  => $_POST['nagios'],*/



?>
