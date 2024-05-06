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
<div id="content">
<div class="container">
        <h1>
<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];
    $desc = $_POST['desc'];   
    $local = $_POST['local'];
    $resp = $_POST['resp'];
	$host = "localhost";
    $port = "3306";
    $user = "root";
    $pass = "";
    $base = "agenda_compromisso";
    $con = mysqli_connect("$host:$port", $user, $pass, $base);
	$res = mysqli_query($con,"update agenda set nome_evento = '$nome', data_evento = '$data' ,hora_inicio = '$inicio',hora_fim = '$fim',desc_evento = '$desc',local_evento = '$local',resp_evento ='$resp' where cod_evento = $id");
    echo "Dados Alterados com sucesso";
	
	mysqli_close($con);
?></h1>
</div>
</div>
</body>
</html>