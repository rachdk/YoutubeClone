<?php
ob_start(); //Turns on output buffering

date_default_timezone_set("America/Vancouver");

try{
    $con = new PDO('mysql:dbname=RDKannel;host=localhost','root','');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOExeption $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>