<?php

require_once 'conexao.php';

$contato = array('contato_id' => 1,
                 'nome'       => 'João',
                 'sobrenome'  => 'Silva',
                 'endereco'   => 'Rua Pindorama 89',
                 'telefone'   => '17 997542378',
                 'email'      => 'jsilva@mail.com',
                 'nascimento' => '1976-10-23');

$query = "UPDATE `contato` SET `nome` = :nome, `sobrenome` = :sobrenome, `endereco` = :endereco, `telefone` = :telefone, `email` = :email, `nascimento` = :nascimento WHERE `contato_id` = :contato_id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':nome', $contato['nome']);
$stmt->bindParam(':sobrenome', $contato['sobrenome']);
$stmt->bindParam(':endereco', $contato['endereco']);
$stmt->bindParam(':telefone', $contato['telefone']);
$stmt->bindParam(':email', $contato['email']);
$stmt->bindParam(':nascimento', $contato['nascimento']);
$stmt->bindParam(':contato_id', $contato['contato_id']);
$stmt->execute();
echo 'Quantidades de registros: ' . $stmt->rowCount() . '<br />';

$stmt = null;
$pdo = null;

