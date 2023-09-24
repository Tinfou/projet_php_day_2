
<form action="./index.php" method="post">
    <p><input type="text" placeholder="Nom" name="nom" required></p>
    <p><input type="text" placeholder="Prenom" name="prenom" required></p>
    <p><input type="text" placeholder="Telephone" name="telephone" required></p>
    <p><button type="submit" > valider </button></p>
</form>


<?php

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['telephone'])){
        echo "Vous avez entrez les informations suivantes : <br>";
        echo " <br> Nom : ".$_POST['nom']."<br>";
        echo "Prenom : ".$_POST['prenom']."<br>";
        echo "Telephone : ".$_POST['telephone']."<br>";
    }
    else{
        echo "Vide";
    }
?>