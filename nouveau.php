<?php
try
{ //on se connecte a mysql 
$bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table SK
$reponse = $bdd->query("SELECT marque,prix,commentaire FROM SSK");


// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
                // j'affiche les données 
    echo 'ce skate est un '.$donnees['marque'].'<br>'.$donnees['prix'].'€'.'<br>'.'commentaires : '.$donnees['commentaire'].'<br>' ;
   

}

$reponse->closeCursor(); // Termine le traitement de la requête
    echo '<br>'.'<a href="minisite.php">Revenir au menu</a>';
?>
