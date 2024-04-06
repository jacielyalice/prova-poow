<?php

?>

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
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome do organizador</th>
                    <th>Email</th>
                    <th>Data</th>
                    <th>Horário</th>
                </tr>
            </thead>

            <body>
                <tr>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>CPF</td>
                    <td>Telefone</td>
                    <td>Data</td>
                    <td>Horário</td>
                    <td>
                        <button class="btn btn-primary">Editar</button>
                        <button class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
            </body>
        </table>
    </div>

    <?php include './layout/footer.php'; ?>