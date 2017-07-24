<?php 
$nblignes = 0 ; 
while($nblignes<100) // première façon de faire une boucle
{
        echo $nblignes. 'je dois continuer <br /> ' ;
        $nblignes = $nblignes +1 ;


} 
for ($nblignes=0;$nblignes<100;$nblignes++) // seconde façon de faire une boucle
{
echo $nblignes. 'je dois continuer<br />' ; 

}   

$jeu[0] ="Starbound" ;
$jeu[1] ="minecraft" ;
$jeu[2] ="gta"; 


$nb_jeu = count($jeu) ;
 for($i=0;$i<$nb_jeu;$i++)
 {
 echo $jeu[$i] . '<br />' ;


 }
 
$mario ['type'] = 'plateforme' ;
$mario ['console'] = 'nitendo' ;
$mario ['public'] = 'tous ' ;


foreach ($mario as $clef => $valeur ) 
{
 echo $clef . " a la valeur " .$valeur. "<br / >" ;
}





?> 