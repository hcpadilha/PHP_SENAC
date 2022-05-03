<?php
session_start();
session_destroy();
 $usuario = $_POST['usuario'];
 $senha = $_POST['senha'];

 if(!$_POST['usuario'] || !$senha = $_POST['senha'])
 {
    header("Location: login.php");
    return;
 }
 
$pdo = new PDO('mysql:host=sql10.freemysqlhosting.net;dbname=sql10478888', 'sql10478888', '3eHD4chQ4D');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$consulta = $pdo->query("SELECT * FROM `Usuarios` WHERE (`email` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."')");


if($consulta->rowCount() == 0){
    echo "Login Invalido";
}

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "<div><b>Nome:</b> {$linha['nome']} <br /> 
    <b>Email:</b> {$linha['email']}<br /> 
    <b>Cpf:</b> {$linha['cpf']} <br />
    <b>Telefone:</b> {$linha['telefone']} <br /></div>";
}
?>

