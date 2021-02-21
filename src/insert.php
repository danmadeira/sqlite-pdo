<?php

require_once 'conexao.php';

$contato = array('nome'       => 'João',
                 'sobrenome'  => 'Silva',
                 'endereco'   => 'Rua Pindorama 89',
                 'telefone'   => '17 997542378',
                 'email'      => 'jsilva@mail.com',
                 'nascimento' => '1976-10-23');

$query = "INSERT INTO `contato` (nome, sobrenome, endereco, telefone, email, nascimento) VALUES(:nome, :sobrenome, :endereco, :telefone, :email, :nascimento)";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':nome', $contato['nome']);
$stmt->bindParam(':sobrenome', $contato['sobrenome']);
$stmt->bindParam(':endereco', $contato['endereco']);
$stmt->bindParam(':telefone', $contato['telefone']);
$stmt->bindParam(':email', $contato['email']);
$stmt->bindParam(':nascimento', $contato['nascimento']);
$stmt->execute();
echo 'Quantidades de registros: ' . $stmt->rowCount() . '<br />';
echo 'ID do último registro inserido: ' . $pdo->lastInsertId();

$stmt = null;
$pdo = null;

