<?php
 echo "REQUEST : ";
   var_dump($_REQUEST);
echo "<br>GET : ";
var_dump($_GET);
echo "<br> POST : ";
var_dump($_POST);

echo "<br>";

echo " <br> bonjour ". $_GET["name"] ." ny surnom anao dia " . $_GET["surnom"] ;
?>