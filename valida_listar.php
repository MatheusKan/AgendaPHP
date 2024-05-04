<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
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
<?php
	$id = $_POST['id'];
	$host = "localhost";
    $port = "3306";
    $user = "root";
    $pass = "";
    $base = "agenda_compromisso";
    $con = mysqli_connect("$host:$port", $user, $pass, $base);
	$res = mysqli_query($con,"select * from agenda where cod_evento = $id");
	echo "<table border=3px><tr><th width='200px'>Código do Evento</th><th width='500px'>Nome do evento</th><th width='250px'>Data do Evento</th><th width='120px'>Hora de Inicio do Evento</th><th width='120px'>Hora de Fim do Evento</th><th width='500px'>Descrição do Evento</th><th width='300px'>Local do Evento</th><th width='300px'>Responsável Evento</th></tr>";

	while($escrever=mysqli_fetch_array($res)){
        $data = implode("/", array_reverse(explode("-", $escrever['data_evento'])));
    echo "<tr><td>".$escrever['cod_evento']."</td><td>".$escrever['nome_evento']."</td><td>".$data."</td><td>".$escrever['hora_inicio']."</td><td>".$escrever['hora_fim']."</td><td>".$escrever['desc_evento']."</td><td>".$escrever['local_evento']."</td><td>".$escrever['resp_evento']."</td></tr>";
	}
	echo "</table>";
	
	echo "</br></br>";
	
	mysqli_close($con);
?>
</div>
</body>
</html>