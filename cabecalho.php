<?php
define('BASE_URL', 'http://localhost/projeto_php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css"">
    <title>Projeto PHP - CRUD</title>
</head>

<body>
    <header>
        <h1>Sistema de Produtos</h1>
        <nav>
            <a href="<?= BASE_URL ?>/index.php">Início</a>
            <a href="<?= BASE_URL ?>/produtos/listar.php">Produtos</a>
            <a href="<?= BASE_URL ?>/login.php">Login</a>
            <a href="<?= BASE_URL ?>/logout.php">Sair</a>
        </nav>
    </header>