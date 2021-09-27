<?php
var_dump($_POST);
$sql= "INSERT INTO usuarios VALUES (NULL, '".$_POST["nombre"]."', '".$_POST["email"]."', '".$_POST["clave"]."')";
echo $sql;
?>

