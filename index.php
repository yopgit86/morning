<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
include 'inc\db.php';
include 'login.php';

?>

<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Page publique</title>

<body>
<form action="#" method="post">
<input type="text" name="login" placeholder="login" required/>
&nbsp;<input type="password" name="password" placeholder="password" required/>
&nbsp; <input type="submit" name="connexion" value="Connexion"/>
</form>
<h1>Page publique</h1>

</body>
</html> 