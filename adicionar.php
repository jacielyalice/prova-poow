<?php

?>

<?php include './layout/header.php'; ?>

<div class="container">
    <div class="mt-3 d-flex justify-content-between">
        <div>
            <h4>Agendar Consulta</h4>
        </div>
        <div>
            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
    <form class="row g-3" methood="post" actions="./actions/processAdicionar.php">
        <div class="col-12">
            <label for="inputEmail4" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome">
        </div>
        <div class="col-12">
            <label for="nome" class="form-label">CPF</label>
            <input type="number" nome="cpf" class="form-control" id="cpf">
        </div>
        <div class="col-12">
            <label for="E-mail" class="form-label">E-mail</E-mail></label>
            <input type="email" nome="]email" class="form-control" id="inputAddress" placeholder="E-mail">
        </div>
        <div class="col-12">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="DDD">
        </div>
        <div class="col-md-6">
            <label for="data" class="form-label">Data</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="horario" class="form-label">horário</label>
            <select id="inputState" class="form-select">
                <option selected>Escolher Horário</option>
                <option>...</option>
            </select>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Agendar</button>
        </div>
    </form>
</div>






<?php include './layout/footer.php'; ?>