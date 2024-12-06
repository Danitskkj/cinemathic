<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1 align="center">Editar Usuario</h1>
    <?php
        include('../php/conexao.php');

        $login = $_GET['editar'];
        $sql = "SELECT * FROM usuariocadastro WHERE codigo = '$login'";

        $result = $connect->query($sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    ?>
    <form action="form_editarUsuario.php" method="POST" align="center">
            <label>Codigo:</label>
            <input type="text" name="codigo" value="<?php echo $row['codigo'] ?>" readonly> <br><br>
            <label>Nome Completo:</label>
            <input type="text" name="nomeCompleto" value="<?php echo $row['nome_completo'] ?>"> <br><br>
            <label>E-mail:</label>
            <input type="email" name="email" value="<?php echo $row['email'] ?>"><br><br>
            <label>CPF:</label>
            <input type="text" name="cpf" value="<?php echo $row['cpf'] ?>"><br><br>
            <label>Senha:</label>
            <input type="password" name="senha" value="<?php echo $row['senha'] ?>"><br><br>
            <label>Admin:</label>
            <input type="text" name="admin" value="<?php echo $row['admin'] ?>"><br>
            <p>0 = false, 1 = true</p><br>
            <button type="submit">Confirmar</button>
    </form>
</body>
<style>

</style>
</html>