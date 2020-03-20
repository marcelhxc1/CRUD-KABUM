<?php
include './includes/header.php';
require '../conn/conn.php';

$id = $_POST['id'];
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


$PDO = db_connect();

$sql1 = "UPDATE clientes SET Nome = '" . $nome . "' , Data_de_Nascimento = '" . $datan . "' , Rg = '" . $rg . "' , Cpf = '" . $cpf . "', Telefone = '" . $telefone . "', endereco1 = '" . $endereco1 . "', endereco2 = '" . $endereco2 . "', endereco3 = '" . $endereco3 . "', endereco4 = '" . $endereco4 . "', endereco5 = '" . $endereco5 . "', endereco6 = '" . $endereco6 . "', endereco7 = '" . $endereco7 . "', endereco8 = '" . $endereco8 . "' , endereco9 = '" . $endereco9 . "', endereco10 = '" . $endereco10 . "'  WHERE id = '" . $id . "'";
$stmt = $PDO->prepare($sql1);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


header('Location: /listar-clientes.php');
?>