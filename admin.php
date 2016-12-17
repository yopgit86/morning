<?php
// On démarre la session AVANT d'écrire du code HTML
//session_start();
include 'inc\db.php';
?>

<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/bs.css">


<body>
<div class="container">
<form method="post" action="insert.php">
 
   <fieldset>
       <legend><h2>Ajouter un technicien</h2></legend> <br/>

       <label for="nom">Nom </label>
       <input type="text" name="nom" id="nom" value="" required/>
 
       <label for="prenom">Prénom </label>
       <input type="text" name="prenom" id="prenom" value="" required/>

		<p>
          <legend> Selectionner l'équipe :</legend>

           	<input type="radio" name="id_equipes" value="1" id="1" required/> <label for="1">Systeme</label>
           	<input type="radio" name="id_equipes" value="2" id="2" required/> <label for="2">Telecom & Reseaux</label>
       </p>
    		<input type="submit" class="btn btn-danger" name="bouton_techniciens" value="Envoyer" />
   </fieldset>


</form>
<div class="panel panel-primary">
  <div class="panel panel-heading">
      <h3> Formaulaire <h3>
  </div>
  <div class="panel panel-body">
    <form method="post" action="insert.php">
 
   <fieldset>
       <legend><h2>Ajouter un logiciel</h2></legend> <br/>

       <label for="nom_logiciel">Nom du logiciel</label>
       <input type="text" name="nom_logiciel" id="nom_logiciel" value="" required/> 
  <br/>
  <br/>
      mop
      <TEXTAREA NAME="mop" id="mop" ROWS="3" COLS="20"></TEXTAREA>
      mop actions
      <TEXTAREA NAME="mop_actions" id="mop_actions" ROWS="3" COLS="20"></TEXTAREA>
      

    <p>
          <legend> Selectionner l'équipe :</legend>

            <input type="radio" name="id_equipes" value="1" id="1" required/> <label for="1">Systeme</label>
            <input type="radio" name="id_equipes" value="2" id="2" required/> <label for="2">Telecom & Reseaux</label>
       </p>
        <input type="submit" name="bouton_logiciels" value="Envoyer" />
   </fieldset>
</form>
  </div>
</div>
<p>
	<fieldset>
	<legend><h2>STIT Systemes</h2></legend>
<?php	
$reponse = $bdd->query('SELECT techniciens.nom, prenom FROM techniciens LEFT JOIN equipes ON equipes.id=id_equipes WHERE id_equipes=1');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . ' ' . $donnees['prenom'] . ' <br />';
}

$reponse->closeCursor();
?>

</fieldset>
</p>
<p>
  <fieldset>
  <legend><h2>Logiciels Systemes</h2></legend>
<?php 
$reponse = $bdd->query('SELECT nom_logiciel, mop, mop_actions FROM logiciels WHERE id_equipes=1');

while ($donnees = $reponse->fetch())
{
  echo '<li>'.$donnees['nom_logiciel'] . ' ' . $donnees['mop'] . '  ' . $donnees['mop_actions'] . '</li> <br />';
}

$reponse->closeCursor();
?>
</fieldset>

</p>

<p>
	
	<fieldset><legend><h2>STIT Telecom & Reseaux</h2></legend>
<?php	
$reponse = $bdd->query('SELECT techniciens.nom, prenom FROM techniciens LEFT JOIN equipes ON equipes.id=id_equipes WHERE id_equipes=2');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . ' ' . $donnees['prenom'] . ' <br />';
}

$reponse->closeCursor();
?>
</p>
</fieldset>
<p><a href="index.php">Retour</a></p>
</div>
</body>
</html> 