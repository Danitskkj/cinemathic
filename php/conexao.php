<?php 

$servername = 'localhost';
$username = 'danits';
$password = 'dan123';
$dbname = 'cinemathic';

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Conexão falhou: " . $connect->connect_error);
}
?>

