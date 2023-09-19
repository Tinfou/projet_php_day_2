<?php
//exercice sur les conditions
    $age = 1;
    $isBillet = true;
    $isVerification = true;

    if(($age>=18 && $isBillet == true) || $isVerification == true){
        echo "vous avez l'âge, vous pouvez entrer";
    }
    else{
        echo "vous n'avez pas l'âge ou votre billet n'est pas valide";
    }
 
?>