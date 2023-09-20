<?php
    $etudiants = [
        [
            'nom' => 'mahery',
            'note' => '12',
            'validation' => true,
        ],

        [
            'nom' => 'hasina',
            'note' => '9',
            'validation' => false,
        ],

        [
            'nom' => 'stelly',
            'note' => '18',
            'validation' => true,
        ],
    ];
    foreach ($etudiants as $etudiant){
        //echo $etudiant['nom'] .$etudiant['note'].$etudiant['validation'];
        if($etudiant['validation'] == true){
            echo $etudiant['nom']." afaka" ."<br/>";
        }
        else{
            echo $etudiant['nom']. " tsy afaka"."<br/>";
        }
    }
?>