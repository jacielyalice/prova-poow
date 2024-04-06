<?php include './layout/header.php'; ?>


<div class="container">
    <div class="d-flex justify-content-between mt-5">
        <div>
            <h4>Salas</h4>
        </div>
        <div>
            <a href="agendamento.php" class="btn btn-success">Criar Agendamento</a>
            <a href="agendamentos.php" class="btn btn-primary">Listar Agendamentos</a>
        </div>
    </div>
</div>
<div class="container">

    <div class="mt-5">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Nome da Sala</th>
                    <th>Capacidade</th>
                    <th>Recursos Disponíveis</th>
                    <th>Status</th>
                    <th>#</th>
                </tr>
                

            </thead>
            
            <tbody>
                <?php 
                    include_once './actions/config.php';
                    $sql = "select * from salas order by nome_sala";
                    $listagem = $conn->query($sql);
                while($item = $listagem->fetch(PDO::FETCH_ASSOC)):?>
                <tr>
                    <td><?php echo $item["nome_sala"]?></td>
                    <td><?php echo $item["capacidade"]?></td>
                    <td><?php echo $item["recursos_disponiveis"]?></td>
                    <td>
                        <?php if($item["status"] == "disponivel") :?>
                            <span class="badge text-bg-success">Disponível</span>
                        <?php else : ?>
                            <span class="badge text-bg-danger">Indisponível</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="./editarsala.php?id=<?php echo $item["id"]?>">Editar</a>
                        <a class="btn btn-danger btn-sm" href="./actions/processarsala.php?id=<?php echo $item["id"]?>">Excluir</a>
                    </td>
                </tr>
                


            
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <?php include './layout/footer.php'; ?>