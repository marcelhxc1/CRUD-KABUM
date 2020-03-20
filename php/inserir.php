<?php
 session_start();
// inclui o arquivo de inicialização
require '../conn/conn.php';
 
// resgata variáveis do formulário
$nome = $_POST['nome'];
$datan = $_POST['datan'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco1 = $_POST['endereco1'];
$endereco2 = $_POST['endereco2'];
$endereco3 = $_POST['endereco3'];
$endereco4 = $_POST['endereco4'];
$endereco5 = $_POST['endereco5'];
$endereco6 = $_POST['endereco6'];
$endereco7 = $_POST['endereco7'];
$endereco8 = $_POST['endereco8'];
$endereco9 = $_POST['endereco9'];
$endereco10 = $_POST['endereco10'];
$user = $_SESSION['user_name'];


$PDO = db_connect();
$sql1 = "SELECT * FROM users WHERE name =" . " '$user' ";
$stmt = $PDO->prepare($sql1);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


$sql = "INSERT INTO clientes (id, Nome, Data_de_nascimento, Rg, Cpf, Telefone, endereco1, endereco2, endereco3, endereco4, endereco5, endereco6, endereco7, endereco8,endereco9, endereco10, usuario) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $PDO->prepare($sql);
$stmt->execute(['', $nome, $datan, $rg, $cpf, $telefone, $endereco1, $enderco2, $enderecp3, $endereco4, $endereco5, $endereco6, $endereco7, $endereco8, $endereco9, $endereco10, $users[0]['id']]);

header('Location: /clientes.php');