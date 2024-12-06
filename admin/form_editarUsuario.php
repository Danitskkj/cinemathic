<?php
include('../php/conexao.php');

$codigo = $_POST['codigo'];
$nome = $_POST['nomeCompleto'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = md5(md5($_POST['senha'])); 
$admin = $_POST['admin'];

$sql = "UPDATE usuariocadastro SET nome_completo='$nome', cpf='$cpf', email='$email', senha='$senha', admin='$admin' WHERE codigo='$codigo'";


if (mysqli_query($connect, $sql)) {
    ?>
    <script type="text/javascript">
        alert("Usuário editado com sucesso!");
        window.location.href="admin.php";
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
        alert("Ocorreu um erro ao editar!");
        window.location.href="admin.php";
    </script>
    <?php
}
?>