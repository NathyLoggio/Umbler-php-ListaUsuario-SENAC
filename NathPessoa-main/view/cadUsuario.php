<!DOCTYPE html>

<?php
    require_once '../controller/CUsuario.php';
    $cadUsuario = new CUsuario();
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Cadastro de Usuario</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> </link>
</head>
<body>
    <div class="container text-center">
    <h1>cadastro de usuario</h1>
    <form action="<?php $cadUsuario->inserir(); ?>" method="POST">
        <input class="form-control" type="text" name="nome" placeholder="Nome Aqui...">
        <br/><br/>
        <select class="form-select" name="perfilAcesso">
            <option value="">Selecione...</option>
            <option value="admin">Administrador</option>
            <option value="user">Usuário</option>
        </select>
        <br/><br/>
        <input class="form-control" type="text" name="usuario" placeholder="User Aqui...">
        <br/><br/>
        <input class="form-control" type="password" name="senha" placeholder="Senha Aqui..." minlength="8">
        <br/><br/>
        <input class="btn btn-primary" type="submit" name="salvar" value="Salvar">
        <input class="btn btn-secondary" type="reset" value="Limpar">
        <input class="btn btn-sucess" type="button" value="Voltar" onclick="location.href='../index.php'">
        <input  class="btn btn-outline-primary" type="button" value="lista de usuario" onclick="location.href='listaUsuario.php'">
    </form>
    
    <script src="../assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        </div>
    </body>
</html>
