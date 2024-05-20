<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "agenda_compromisso";
$con   = mysqli_connect($host, $user, $pass, $base);

if (!$con)
{
    die("Falha na Conexao".mysqli_connect_erro());
}


$sql = "SELECT * FROM tb_dados where nome='$nome' AND senha='$senha'";
$result= mysqli_query($con, $sql);



if(mysqli_num_rows($result) > 0) 
{
echo "<div id='sidebar-left'>
<ul>
    <li><a href='agenda.php'>Index</a></li>
    <li><a href='cadastrar.php'>Cadastar evento</a></li>
    <li><a href='Consultar.php'>Consultar evento</a></li>
    <li><a href='listar.php'>Listar todos os eventos</a></li>
    <li><a href='atualizar.php'>Atualizar evento</a></li>
    <li><a href='remover.php'>Remover evento</a></li>
</ul>
</div>

<div id='content'>
</div>

<div id='sidebar-right'>
</div>";
}
else 
{ 
echo "Usuários ou senhas Inválidos!";

}

mysqli_close($con);

?>
<div id="sidebar-left">
    <ul>
        <li><a href="agenda.php">Index</a></li>
        <li><a href="cadastrar.php">Cadastar evento</a></li>
        <li><a href="Consultar.php">Consultar evento</a></li>
        <li><a href="listar.php">Listar todos os eventos</a></li>
        <li><a href="atualizar.php">Atualizar evento</a></li>
        <li><a href="remover.php">Remover evento</a></li>
    </ul>
</div>

<div id="content">
</div>

<div id="sidebar-right">
</div>
</body>
</html>