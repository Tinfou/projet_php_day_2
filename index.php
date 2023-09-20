<?php
    $etudiants = [
        [
            'nom' => 'mahery',
            'note' => 12,
            'validation' => true,
        ],

        [
            'nom' => 'hasina',
            'note' => 9,
            'validation' => true,
        ],

        [
            'nom' => 'stelly',
            'note' => 18,
            'validation' => true,
        ],
    ];
    foreach ($etudiants as $etudiant){
        //echo $etudiant['nom'] .$etudiant['note'].$etudiant['validation'];
        if(($etudiant['validation'] == true)&& $etudiant['note']>=10){
            echo $etudiant['nom']." afaka" ."<br/>";
        }
        else{
            echo $etudiant['nom']. " tsy afaka"."<br/>";
        }
    }
?>