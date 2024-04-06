<?php include("./layout/header.php"); ?>
<div class="container">
    <div class="mt-3 d-flex justify-content-between">
        <div>
            <h4>Cadastrar Sala</h4>
            <hr>
        </div>
    </div>
    <form action="./actions/processarsala.php" method="post">
        <div class="form-group mb-3 col-md-6">
            <label for="nome_sala">Nome da Sala</label>
            <input required type="text" name="nome_sala" class="form-control" id="nome_sala">
        </div>
        <div class="form-group mb-3 col-md-2">
            <label for="capacidade">Capacidade</label>
            <input required type="number" name="capacidade" class="form-control" id="capacidade">
        </div>
        <div class="form-group mb-3">
            <label for="recursos_disponiveis">Recursos Disponiveis</label>
            <input required type="text" name="recursos_disponiveis" class="form-control" id="recursos_disponiveis">
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>

<?php include("./layout/footer.php"); ?>