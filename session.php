<?php

$cookieFin = time()+60*60*24 ;

setcookie ("login", "joris",$cookieFin) ;

echo $_COOKIE["login"] ;





?>

