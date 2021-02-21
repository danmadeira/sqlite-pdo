<?php

require_once 'conexao.php';

$query = "SELECT * FROM `contato`";
$stmt = $pdo->prepare($query);
$stmt->execute();
while($result = $stmt->fetch()){
    echo 'ID: ' . $result['contato_id'] . '<br />';
    echo 'Nome: ' . $result['nome'] . ' ' . $result['sobrenome'] . '<br />';
    echo 'Endereço: ' . $result['endereco'] . '<br />';
    echo 'Telefone: ' . $result['telefone'] . '<br />';
    echo 'E-mail: ' . $result['email'] . '<br />';
    echo 'Data de nascimento: ' . $result['nascimento'] . '<br />';
}

$id = 1;
$query = "SELECT * FROM `contato` WHERE `contato_id` = :contato_id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':contato_id', $id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
echo 'Nome: ' . $result['nome'] . ' ' . $result['sobrenome'] . '<br />';
echo 'Endereço: ' . $result['endereco'] . '<br />';
echo 'Telefone: ' . $result['telefone'] . '<br />';
echo 'E-mail: ' . $result['email'] . '<br />';
echo 'Data de nascimento: ' . $result['nascimento'] . '<br />';

$result = null;
$stmt = null;
$pdo = null;

