<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
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
    <div class="container">
        <h1>Cadastrar Novo Evento</h1>
        <form method="post" action="valida_cadastro.php">        
            <div class="form-group">
                <label for="nome">Nome do Evento:</label>
                <input type="text" id="nome" name="nome">
            </div>

            <div class="form-group">
                <label for="data">Data do Evento:</label>
                <input type="text" maxlength="10" id="data" pattern="\d{2}/\d{2}/\d{4}" placeholder="DD/MM/AAAA" name="data">
            </div>

            <div class="form-group">
                <label for="inicio">Hora de Início do Evento:</label>
                <input type="text" id="inicio" name="inicio">
            </div>

            <div class="form-group">
                <label for="fim">Hora de Fim do Evento:</label>
                <input type="text" id="fim" name="fim">
            </div>

            <div class="form-group">
                <label for="desc">Descrição do Evento:</label>
                <input type="text" id="desc" name="desc">
            </div>

            <div class="form-group">
                <label for="local">Local do Evento:</label>
                <input type="text" id="local" name="local">
            </div>

            <div class="form-group">
                <label for="resp">Responsável pelo Evento:</label>
                <input type="text" id="resp" name="resp">
            </div>

            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>
