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
    header("Location: agenda.php");
    exit();
}
else 
{ 
    header("Location: index.php?erro=credenciais_incorretas");
    exit();

}

mysqli_close($con);

?>

