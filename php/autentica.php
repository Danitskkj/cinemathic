<?php
session_start();

include("conexao.php");

header('Content-type:text/html; charset=UTF-8');

// Obtendo dados do formulário
$email = $_POST['email'];
$senha = md5(md5($_POST['senha']));

// Verifica se o usuário existe
$sqlLogin = "SELECT * FROM usuariocadastro WHERE email = '$email'";
$resultLogin = $connect->query($sqlLogin);

if ($resultLogin->num_rows == 0) {
    echo '<script type="text/javascript">
            alert("Usuário não existe na base de dados. Favor realizar o cadastro!");
            window.location.href="form.php";
          </script>';
    exit;
}

// Verifica se o e-mail e senha conferem
$sql = "SELECT * FROM usuariocadastro WHERE email = '$email' AND senha = '$senha'";
$result = $connect->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['login'] = $row['email'];
    $_SESSION['nome_completo'] = $row['nome_completo'];
    $_SESSION['admin'] = $row['admin'];

    if ($row['admin'] == 0) {
        echo '<script type="text/javascript">
                alert("Bem-vindo, Usuário ' . htmlspecialchars($row['nome_completo']) . '!");
                window.location.href="../reserva.php";
              </script>';
    } else {
        echo '<script type="text/javascript">
                alert("Bem-vindo, Administrador ' . htmlspecialchars($row['nome_completo']) . '!");
                window.location.href="../admin/admin.php";
              </script>';
    }
} else {
    echo '<script type="text/javascript">
            alert("E-mail ou senha não conferem.");
            window.location.href="login.php";
          </script>';
}
?>
