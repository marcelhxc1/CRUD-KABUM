<?php
include './includes/header.php';
require '../conn/conn.php';

$id = $_POST['id'];

$PDO = db_connect();

$PDO = db_connect();
$sql1 = "UPDATE clientes SET ativo = 0 WHERE id = " . " '$id' "  ;
$stmt = $PDO->prepare($sql1);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


header('Location: /listar-clientes.php');
?>