<?php
require_once './config.php';

$sala_id = $_POST['sala'];
$organizador = $_POST['organizador'];
$assunto = $_POST['assunto'];
$qtd_participantes = $_POST['qtd_participantes'];
$data_reuniao = $_POST['data_reuniao'];
$hora_reuniao = $_POST['hora_reuniao'];

$stmt = $conn->prepare('insert into agendamentos(nome_organizador,numero_particpantes,assunto,data,hora,sala_id) values(:nome_organizador,:numero_particpantes,:assunto,:data,:hora,:sala_id)');
$stmt->execute(array(
    ':nome_organizador'=>$organizador,
    ':numero_particpantes'=>$qtd_participantes,
    ':assunto'=>$assunto,
    ':data' => $data_reuniao,
    ':hora' => $hora_reuniao,
    ':sala_id' => $sala_id
));
$data_update = [
    'sala_id' => $sala_id,
    'status' => "indisponivel"
];
$sql = "update salas set status=:status WHERE id=:sala_id";
$conn->prepare($sql)->execute($data_update);

header("Location: /sistema_prova/");
die();
?>