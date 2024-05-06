<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Tudo</title>
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
        <h1>Alterar Evento</h1>
        <form method="post" action="valida_uptudo.php"> 
            <div class="form-group">
                <label for="id">Código do Evento:</label>
                <input type="text" id="id" name="id">
            </div>       
            <div class="form-group">
                <label for="nome">Nome do Evento:</label>
                <input type="text" id="nome" name="nome">
            </div>

            <div class="form-group" align="center">
                <label for="data" >Data e Horário de Inicio e Fim do Evento:</label>
                <input type="date" id="data" name="data">
                <input type="time" id="inicio" name="inicio">
                <input type="time" id="fim" name="fim">
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
