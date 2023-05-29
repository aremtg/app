<?php
$servidor = "localhost";
$baseDeDatos="app";
$usuario= "root";
$contrasenia="";
// si no tiene problemas se ejecuta la conexion
try{
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
}catch(Exception $ex){
    // si tine problemas, muestra cual fue
    echo $ex->getMessage();
}
?>