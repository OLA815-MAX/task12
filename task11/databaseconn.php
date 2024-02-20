<?php
$server_name="localhost";
$username="root";
$pw='';
$db="school";
try{
    $conn= new PDO("mysql:host=$server_name;dbname=$db",
    $username,
    $pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO:: ERRMODE_EXCEPTION );


echo"connected successfuly <br>";}
catch(PDOEXCEPTION $err){echo "connection faild:" .$err->getmessage();}