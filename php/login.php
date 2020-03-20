<?php
 
// inclui o arquivo de inicialização
require '../conn/conn.php';
 
// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['senha']) ? $_POST['senha'] : '';

if (empty($email) || empty($password))
{
    echo "Preencha todos os campos";
    exit;
}
 
// cria o hash da senha
$passwordHash = make_hash($password);

$PDO = db_connect();

$sql = "SELECT id, name FROM users WHERE email = :email AND password = :senha";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $passwordHash);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);



if (count($users) <= 0)
{
    echo "Corrija a senha ou e-mail , estão incorretos";
    exit;
}
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];
 
header('Location: /clientes.php');