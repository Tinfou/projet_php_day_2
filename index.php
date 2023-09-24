
<form action="./index.php" method="post">
    <p><input type="text" placeholder="Nom" name="nom" required></p>
    <p><input type="text" placeholder="Prenom" name="prenom" required></p>
    <p><input type="number" placeholder="Note" name="note" required></p>
    <p><button type="submit" > valider </button></p>
</form>

<?php
//$note = isset($_POST['note']);
    if(isset($note)){
        $note = $_POST['note'];
    }
function resultat($note){
    if($note>=10){
        echo " <br> Admis";
    }
    else{
        echo " <br> Non admis";
    }
}
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['note'])){
        echo "Voici votre resultat";
        echo " <br> Nom : ".$_POST['nom']."<br>";
        echo "Prenom : ".$_POST['prenom']."<br>";
        echo "note : ".$_POST['note']."<br>";
        echo resultat($note);
    }
    else{
        echo "Vide";
    }
?>