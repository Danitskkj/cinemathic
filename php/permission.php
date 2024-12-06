<?php
session_start();

if (!isset($_SESSION['login'])) {
    echo "<script type='text/javascript'>
            alert('Você não está logado!\\nPor favor, realize o login');
            window.location.href='php/login.php';
          </script>";
    exit();
}
?>