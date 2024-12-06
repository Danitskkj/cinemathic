<?php

include("conexao.php");

header('Content-type:text/html; charset=UTF-8');

$nome = $_POST['nomeCompleto'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = MD5(MD5($_POST['senha']));

$sqlLogin = "SELECT * FROM usuariocadastro WHERE email = '$email'";
$resultLogin = $connect->query($sqlLogin);
$row = mysqli_fetch_array($resultLogin, MYSQLI_ASSOC);

if(is_null($row)) {

    $sql = "INSERT INTO usuariocadastro (codigo, nome_completo, cpf, email, senha)
    VALUES ('','$nome','$cpf','$email','$senha')";

    if(mysqli_query($connect, $sql)) {
        if(mysqli_affected_rows($connect) != 0) {
            ?>
            <script type="text/javascript">
                alert("Usuario Cadastrado com Sucesso!");
                window.location.href="login.php";
            </script>
            <?php
        }
        else {
            echo "ERROR:" .$sql ."<br>" .mysqli_error($connect);
        }
    }

}

if($resultLogin->num_rows == 1) {
    ?>
    <script type="text/javascript">
        alert("Usuário já cadastrado na Base de Dados!\n Cadastre-se Novamente")
        window.location.href="form.php"
    </script>
    <?php
}

$connect->close();

?>