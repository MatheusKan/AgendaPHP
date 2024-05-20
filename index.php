<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        .container{
            margin-top:9%;
        }
    </style>
</head>
<body>
<div id="sidebar-left"> 
</div>

<div id="content">
    <h2></h2>
</div>

<div id="sidebar-right">

</div>
<div class="container">
        <h1>Login</h1>
        <form action="verificar.php" method="post">
<div class="form-group">
                <label for="usuario">Informe usuário:</label>
                <input type="text" id="nome" name="nome">
</div>
<div class="form-group">
                <label for="senha">Informe senha:</label>
                <input type="password" id="senha" name="senha">
</div>
<input type="submit" value="Entrar">
</form>
</div>
</body>
</html>