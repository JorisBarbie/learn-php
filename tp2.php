<html>
    <head>
    </head>
        <body>
        Sur quelle ville souaithaient vous avoir des précisions ? <br>  
         
<?php
$ville[0] = "toulouse" ; 
$ville[1] = "marseille" ; 
$ville[2] = "paris" ;
$ville[3] = "montpellier" ;

for ($i=0;$i<4;$i++)
{
echo'<a href="villesome.php?'.$ville[$i].'=oui">'.$ville[$i].'</a>'."<br>"; 
}
?>
