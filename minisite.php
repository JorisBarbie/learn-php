<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>SK SHOP</title>
        <style>
h1 {color:red;}
p {color:blue;}
</style>
    </head>

    <body background="htmlbackground.jpg">

        <p>
            <h1 align="center"><strong>SKATE SHOP</strong><h1>   
                <form action="Produits_Skate.php" method="GET" name="formulaire">
                    <h5 align="center"><samp>Matos de skate:</samp><h5> <br>
                        <?php
                            $marque[0] = 'Santa_Cruz';
                            $marque[1] = 'Elements';
                            $marque[2] = 'Globe';
                            $marque[3] = 'Plan_B';
                                for ($i=0;$i<=3;$i++)
             
                                     echo '<a href="Produits_Skate.php?'.$marque[$i].'=oui">'.$marque[$i].'</a>'.'<br>' ;
                  
                       ?> 
                   <h5 align="center"><font face="verdana"><a href="nouveau.php">Nouveautés</font></h4></a>
                        
                </form>   
  
        </p>

    </body>
    <footer>
    </footer>
</html>