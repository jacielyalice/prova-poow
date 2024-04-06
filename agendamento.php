<?php
include './actions/config.php';

$stmt = $conn->query("SELECT s.id, s.nome_sala FROM salas s WHERE s.status = 'disponivel' ORDER BY s.nome_sala");
$salas = $stmt->fetchAll();
?>

<?php include './layout/header.php'; ?>

<div class="container">
    <div class="mt-3 d-flex justify-content-between">
        <div>
            <h4>Agendar Sala</h4>
            <hr>
        </div>
    </div>
    <form class="row g-3" method="POST" action="./actions/agendamento.php">
    <div class="col-md-4">
            <label for="sala" class="form-label">Salas Disponiveis</label>
            <select required name="sala" id="sala" class="form-select">
                <option value="">Selecione uma sala</option>
                <?php if($salas) : ?>
                    <?php 
                    foreach ($salas as $sala) {
                        echo "<option value='".$sala['id']."'>".$sala['nome_sala']."</option>";
                    }
                    ?>
                <?php else : ?>
                    <option>Não tem sala disponivel</option>
                <?php endif ?>
            </select>
        </div>
        <div class="col-12">
            <label for="organizador" class="form-label">Nome Organizador</label>
            <input required type="text" name="organizador" class="form-control" id="organizador">
        </div>
        <div class="col-12">
            <label for="assunto" class="form-label">Assunto da reunião</label>
            <input required name="assunto" type="text" class="form-control" id="assunto">
        </div>
        <div class="col-12">
            <label for="qtd_participantes" class="form-label">Numero de Participantes</label>
            <input required name="qtd_participantes" type="number" class="form-control" id="qtd_participantes">
        </div>
        <div class="col-md-6">
            <label for="data_reuniao" class="form-label">Data</label>
            <input required name="data_reuniao" type="date" class="form-control" id="data_reuniao">
        </div>
        <div class="col-md-4">
            <label for="hora_reuniao" class="form-label">horário</label>
            <select required name="hora_reuniao" id="hora_reuniao" class="form-select">
                <option value="" selected>Escolher Horário</option>
                <option value="13:30">13:30</option>
                <option value="14:30">14:30</option>
                <option value="16:00">16:00</option>

            </select>
        </div> 
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Agendar</button>
        </div>
    </form>
</div>


<?php include './layout/footer.php'; ?>