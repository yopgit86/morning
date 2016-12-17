<?php 
include 'inc\db.php';

if(isset($_POST['bouton'])){
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


<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />


<body>

<form method="post" action="#">
 
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
    		<input type="submit" name="bouton" value="Envoyer" />
   </fieldset>

</body>
</html>