<?php include './layout/header.php'; ?>


<div class="container">
    <div class="d-flex justify-content-between mt-5">
        <div>
            <h4>Salas Agendadas</h4>
        </div>
        <div>
            <a href="agendamento.php" class="btn btn-primary">Agendar Sala</a>
        </div>

    </div>
</div>
<div class="container">

    <div class="mt-5">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Nome do organizador</th>
                    <th>Número participantes</th>
                    <th>Assunto</th>
                    <th>sala</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>#</th>
                </tr>
                

            </thead>
            
            <tbody>
                <?php 
                    include_once './actions/config.php';
                    $sql = "SELECT a.*, s.nome_sala FROM agendamentos a INNER JOIN salas s on a.sala_id = s.id";
                    $listagem = $conn->query($sql);
                while($item = $listagem->fetch(PDO::FETCH_ASSOC)):?>
                <tr>
                    <td><?php echo $item["nome_organizador"]?></td>
                    <td><?php echo $item["numero_participantes"]?></td>
                    <td><?php echo $item["assunto"]?></td>
                    <td><?php echo $item["nome_sala"]?></td>
                    <td><?php echo $item["data"]?></td>
                    <td><?php echo $item["horario"]?></td>
                    <td><a class="btn btn-danger btn-sm" href="./actions/cancelarAgendamento.php?id=<?php echo $item["id"]?>">Cancelar</td>
                </tr>
                


            
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <?php include './layout/footer.php'; ?>