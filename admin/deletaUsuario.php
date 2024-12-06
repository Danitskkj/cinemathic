<?php
include('../php/conexao.php');

$login = $_GET['deleta'];
$sql = "DELETE FROM usuariocadastro WHERE codigo = '$login';";

$result = $connect->query($sql);

if(mysqli_affected_rows($connect)) {
?>
<script type="text/javascript">
    alert("Usuario deletado com sucesso!");
    window.location.href="admin.php";
</script>
<?php
}
else {
?>
<script type="text/javascript">
    alert("Ocorreu um erro ao deletar!");
    window.location.href="admin.php";
</script>
<?php
}
?>