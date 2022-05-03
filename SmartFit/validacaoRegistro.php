<?php
session_start();
if(!$email = $_POST['email'])
{
    header("Location: cadastro.php");
    return;
}
 $email = $_POST['email'];
 $nome = $_POST['nome'];
 $telefone = $_POST['telefone'];
 $cpf = $_POST['cpf'];
 $senha = $_POST['senha'];
try {
    $pdo = new PDO('mysql:host=sql10.freemysqlhosting.net;dbname=sql10478888', 'sql10478888', '3eHD4chQ4D');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('INSERT INTO Usuarios (nome, email, senha, telefone, cpf) 
  VALUES(:nome,:email,:senha,:telefone,:cpf)');
  $stmt->execute(array(
    ':nome' => $nome,
    ':email' => $email,
    ':senha' => sha1($senha),
    ':telefone' => $telefone,
    ':cpf' => $cpf,

  ));

    if($stmt->rowCount() == 1)
    {
    $_SESSION['mensagem'] = "Usuario cadastrado com sucesso!";
    header("Location: login.php");
  
    }
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
   ?>