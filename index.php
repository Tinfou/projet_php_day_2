<?php
     //$voitures = [8 ,6 ,13 ,19 , 14, 5, 3];

    /*$voitures = [
        "SUV" => "hyundai",
        "4*4" => ["land rover",["110","109"]], 
        "plaisir" =>["bmw","kia"],
    ];
    

    echo $voitures["4*4"][1][1];*/

    for ($var = 0; $var< count($voitures); $var++) {
        //echo $voitures[$var] ."<br>";
        if(($voitures[$var]%2) !=0){
            echo "impaire: ".$voitures[$var] ."<br>";
        }
        else{
            echo "paire: ".$voitures[$var] ."<br>";
        }
    }
?>