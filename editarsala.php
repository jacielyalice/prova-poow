<?php include("./layout/header.php");  include_once("./actions/config.php");
    if($_GET['id']){
        $id_sala = $_GET['id'];

        $stmt = $conn->prepare("select * from salas a where a.id=:id");
        $stmt->execute(['id' => $id_sala]);

        $sala = $stmt->fetch();
    }else{
        header("Location: /sistema_prova/");
        die();
    }
?>
<div class="container">
    <div class="mt-3 d-flex justify-content-between">
        <div>
            <h4>Editar Sala</h4>
            <hr>
        </div>
    </div>
    <form action="./actions/processarsala.php" method="post">
        <input name="id" value="<?php echo $_GET['id']?>" style="display: none;">
        <div class="form-group mb-3 col-md-6">
            <label for="nome_sala">Nome da Sala</label>
            <input value="<?php echo $sala['nome_sala']?>" required type="text" name="nome_sala" class="form-control" id="nome_sala">
        </div>
        <div class="form-group mb-3 col-md-2">
            <label for="capacidade">Capacidade</label>
            <input value="<?php echo $sala['capacidade']?>" required type="number" name="capacidade" class="form-control" id="capacidade">
        </div>
        <div class="form-group mb-3">
            <label for="recursos_disponiveis">Recursos Disponiveis</label>
            <input value="<?php echo $sala['recursos_disponiveis']?>" required type="text" name="recursos_disponiveis" class="form-control" id="recursos_disponiveis">
        </div>
        <a class="btn btn-light" href="./index.php">Cancelar</a>
        <button type="submit" class="btn btn-success">Gravar</button>
    </form>
</div>

<?php include("./layout/footer.php"); ?>