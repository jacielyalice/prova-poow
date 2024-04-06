<?php
require_once './config.php';

$name_sala = $_POST['nome_sala'];
$capacidade = $_POST['capacidade'];
$recursos_disponiveis = $_POST['recursos_disponiveis'];


$stmt = $conn->prepare('insert into salas(nome_sala,capacidade,recursos_disponiveis,status) values(:nome,:capacidade,:recursos,:status)');
$stmt->execute(array(
    ':nome'=>$name_sala,
    ':capacidade'=>$capacidade,
    ':recursos'=>$recursos_disponiveis,
    ':status' => 'disponivel'
));

header("Location: /sistema_prova/");
die();
?>