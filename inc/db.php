<!-- après password retirer pour mise en prod , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION -->
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=morning', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} 
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
