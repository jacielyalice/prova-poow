<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="nome_sala">Nome da Sala</label>
                <input type="text" name="nome_sala" class="form-control" id="nome_sala">
            </div>
            <div class="form-group">
                <label for="capacidade">capacidade</label>
                <input type="number" name="capacidade" class="form-control" id="capacidade">
            </div>
            <div class="form-group">
                <label for="recursos_disponiveis">Recursos Disponiveis</label>
                <input type="text" name="recursos_disponiveis" class="form-control" id="recursos_disponiveis">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>
    </div>
</body>

</html>