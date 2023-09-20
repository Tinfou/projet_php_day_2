<?php
//exercice sur les conditions
    $age = -1;
    $isBillet = true;
    $isVerification = true;
    $var = 1;
    $ageApte = 18;
    $ageVerifier = null;

    /*if(($age>=18 && $isBillet == true) || $isVerification == true){
        echo "vous avez l'âge, vous pouvez entrer"."<br/>";
    }
    else{
        echo "vous n'avez pas l'âge ou votre billet n'est pas valide "."<br/>";
    }*/
    if($age>0){
        while($var<$age){
        $var++;
        }
            echo "Valeur marina <br/> ";
    }
    else{
        echo "valeur diso <br/> ";
    }
    $ageVerifier = $var;

    if($ageVerifier>=$ageApte){
        $isAdult = true;
    }
    else{
        $isAdult = false;
    }

    if($isAdult){
        echo "Vous avez ".$ageVerifier." vous etez autorisé ";
    }
    else{
        echo "NON vous n'etes pas autorisé ".$ageVerifier." "; 
    }


?>