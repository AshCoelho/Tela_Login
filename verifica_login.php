
<?php
require_once 'conexao.php';

$cpf = $_POST['cpf'];
$data_nasc = $_POST['data_nascimento'];
$orgao = $_POST['orgao'];

$sql = "SELECT * FROM usuarios WHERE cpf=? AND data_nascimento=? AND orgao=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $cpf, $data_nasc, $orgao);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $pasta_destino = strtolower(str_replace(" ", "_", $orgao));
    header("Location: http://192.168.18.38:8080/$orgao.html");
    exit();
} else {
    echo "Dados inválidos. <a href='login.php'>Tente novamente</a>";
}
$conn->close();
?>
