<?php
    $voiture = ['bmw','hyundai','kia','honda'];

    for($var = 0; $var<=3; $var++){
        echo $voiture[$var] ."<br/>";
    }
    if(in_array('hasina', $voiture)){

        echo 'la clé  se trouve dans le tableau';
    }
    else{

        echo 'la clé ne se trouve pas dans le tableau';
    }
?>