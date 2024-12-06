<?php

include('../php/conexao.php');
include('../php/permission.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script>
        function confirmarDelecao(codigo) {
            if (confirm("Você tem certeza que deseja excluir este usuário?")) {
                window.location.href = 'deletaUsuario.php?deleta=' + codigo;
            }
        }
    </script>
</head>
<style>
    * {
        margin:0;
        padding:0;
    }
    h1 {
        padding-top: 80px
    }
    table {
        max-width: 1024px;
        width: 100%;
    }
    th, td {
        text-align: center;
        border: solid 1px black;
    }

    button {
        cursor: pointer;
        border: none;
        color: #fff;
        border-radius: 3px;
    }

    .btn-sucess {
        background-color: #007f00;
    }
    .btn-danger {
        background-color: #ff0000;
    }
</style>
<body>
    <h1 align="center">Lista de Usuários</h1>
    <br>
    <div align="center">
        <table id="tabelaUsers" class="table">
            <tr class="text">
                <th scope='col'>ID</th>
                <th scope='col'>Nome Completo</th>
                <th scope='col'>CPF</th>
                <th scope='col'>E-mail</th>
                <th scope='col'>Admin</th>
                <th scope='colgroup' colspan="2">Ação</th>
            </tr>
            <?php
                $query = 'SELECT * FROM usuariocadastro WHERE admin="0"';
                $result = mysqli_query($connect, $query);
                if($result AND $result->num_rows != 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo"<tr class='text-center'>
                            <td>".$row['codigo']."</td>
                            <td>".$row['nome_completo']."</td>
                            <td>".$row['cpf']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['admin']."</td>
                        ";

                        echo '<td>
                        <button class="btn-sucess" 
                        onclick="location.href=\'editarUsuario.php?editar='.$row["codigo"].'\'">EDITAR</button>
                        <button class="btn-danger" 
                        onclick="confirmarDelecao('.$row["codigo"].')">EXCLUIR</button>
                        </td>';
                        
                    }
                }
            ?>
        </table>
    </div>
    <h1 align="center">Lista de Adminstradores</h1>
    <br>
    <div align="center">
        <table id="tabelaUsers" class="table">
            <tr class="text">
                <th scope='col'>ID</th>
                <th scope='col'>Nome Completo</th>
                <th scope='col'>CPF</th>
                <th scope='col'>E-mail</th>
                <th scope='col'>Admin</th>
                <th scope='colgroup' colspan="2">Ação</th>
            </tr>
            <?php
                $query = 'SELECT * FROM usuariocadastro WHERE admin="1"';
                $result = mysqli_query($connect, $query);
                if($result AND $result->num_rows != 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo"<tr class='text-center'>
                        <td>".$row['codigo']."</td>
                        <td>".$row['nome_completo']."</td>
                        <td>".$row['cpf']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['admin']."</td>
                    ";

                        echo '<td>
                        <button class="btn-sucess" 
                        onclick="location.href=\'editarUsuario.php?editar='.$row["codigo"].'\'">EDITAR</button>
                        <button class="btn-danger" 
                        onclick="confirmarDelecao('.$row["codigo"].')">EXCLUIR</button>
                        </td>';

                    }
                }
            ?>
        </table>
    </div>
</body>
</html>