<?php
require_once './config.php';

if(!$_POST['id'] && !$_GET['id']){
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
}else if($_POST['id']){
    $name_sala = $_POST['nome_sala'];
    $capacidade = $_POST['capacidade'];
    $recursos_disponiveis = $_POST['recursos_disponiveis'];
    $id = $_POST['id'];
    
    
    $stmt = $conn->prepare('update salas set nome_sala=:nome,capacidade=:capacidade,recursos_disponiveis=:recursos where id=:id');
    $stmt->execute(array(
        ':nome'=>$name_sala,
        ':capacidade'=>$capacidade,
        ':recursos'=>$recursos_disponiveis,
        ':id'=>$id
    ));
}else if($_GET['id']){
    $id = $_GET['id'];

    $stmt = $conn->prepare('delete from agendamentos where sala_id=:id');
    $stmt->execute(array(
        ':id'=>$id
    ));
    $stmt = $conn->prepare('delete from salas where id=:id');
    $stmt->execute(array(
        ':id'=>$id
    ));
}

header("Location: /sistema_prova/");
die();
?>