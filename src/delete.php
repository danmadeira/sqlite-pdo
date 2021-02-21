<?php

require_once 'conexao.php';

$id = 1;
$query = "DELETE FROM `contato` WHERE `contato_id` = :contato_id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':contato_id', $id, PDO::PARAM_INT);
$stmt->execute();
echo 'Quantidades de registros: ' . $stmt->rowCount() . '<br />';

$stmt = null;
$pdo = null;

