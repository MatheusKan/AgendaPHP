<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Data</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div id="sidebar-left">
    <ul>
        <li><a href="index.php">Index</a></li>
        <li><a href="cadastrar.php">Cadastar evento</a></li>
        <li><a href="Consultar.php">Consultar evento</a></li>
        <li><a href="listar.php">Listar todos os eventos</a></li>
        <li><a href="atualizar.php">Atualizar evento</a></li>
        <li><a href="remover.php">Remover evento</a></li>
    </ul>
</div>

<div id="content">
    <h2></h2>
</div>

<div id="sidebar-right">

</div>

<div id="content">
<div class="container">
        <h1>Atualizar Data do Evento</h1>
    <form method="post" action="valida_updata.php">
    <div class="form-group">
                <label for="id">Código do Evento:</label>
                <input type="text" id="id" name="id">
            </div>

            <div class="form-group">
                <label for="data">Data do Evento:</label>
                <input type="text" maxlength="10" id="data" pattern="\d{2}/\d{2}/\d{4}" placeholder="DD/MM/AAAA" name="data">
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
    </form>
</div>
</div>
</body>
</html>