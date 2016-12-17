<?php
session_start(); // On démarre la session AVANT toute chose
session_destroy()
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Titre de ma page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
 
    <p>Re-bonjour !</p>
 
    <p>
        Je me souviens de toi ! Tu t'appelles <?php echo $_COOKIE['pseudo']; ?> !<br />
        Et ton âge hummm... Tu as <?php echo $_COOKIE['pays']; ?> ans, c'est ça ? :-D
    </p>
    
    </body>
</html>