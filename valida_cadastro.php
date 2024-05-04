<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $result = explode('/',$data);
        $dia = $result[0];
        $mes = $result[1];
        $ano = $result[2];
        $data = $ano.'-'.$mes.'-'.$dia;
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
	$res = mysqli_query($con,"insert into agenda (nome_evento,data_evento,hora_inicio,hora_fim,desc_evento,local_evento,resp_evento) values('$nome','$data','$inicio','$fim','$desc','$local','$resp')");
    echo "Dados cadastrados com sucesso";
	mysqli_close($con);
?></h1>
</div>
</body>
</html>
