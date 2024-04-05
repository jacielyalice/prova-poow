<?php

$servername="lacolhost";
$username= "root";
$passwod= "";
$dbname= "prova";

try{
    $conn= new PDO("mysql:horst=$servername;dbname=$dbname", $username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo"Erro na conexão:". $e->getMessage();
}
