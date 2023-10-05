<?php include('functions.php')?>
<?php include('variable.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="post">
        <p><input type="text" placeholder= "Identifiant" name="nom" required></p>
        <p><input type="password" placeholder= "password" name = "password" required></p>
        <p><button type= "submit">Valider</button></p>
    </form>

    <?php
        if(isset($_POST['nom'])&& isset($_POST['password'])){
            foreach($users as $user){
                if($_POST['nom'] === $user['nom'] && $_POST['password'] === $user['password']){
                    echo $user['nom'];
                    echo $user['password'];
                    var_dump($_POST);
                    echo "mety";
                }
                else{
                    echo "tsy mety";
                }
            }
        }
        

    ?>
</body>
</html>