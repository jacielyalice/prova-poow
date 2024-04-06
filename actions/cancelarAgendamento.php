<?php

require_once './config.php';

$id_agendamento = $_GET['id'];

$stmt = $conn->prepare("select a.sala_id from agendamentos a where a.id=:id");
$stmt->execute(['id' => $id_agendamento]);

$sala_id = $stmt->fetch()['sala_id'];

$stmt = $conn->prepare("delete from agendamentos where id=:id");
$stmt->execute(['id'=>$id_agendamento]);

$stmt = $conn->prepare("UPDATE salas SET status = 'disponivel' where id=:id");
$stmt->execute(['id'=>$sala_id]);

header("Location: /sistema_prova/");
die();
?>