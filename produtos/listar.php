<?php
include __DIR__ . '/../conexao.php';
include __DIR__ . '/verifica_login.php';
include __DIR__ . '/../cabecalho.php';
?>

<main>
 <p>Bem-vindo(a), <?php echo $_SESSION['usuario_nome']; ?>!</p>
 <!-- conteúdo da página -->
</main>
<?php include '../rodape.php'; ?>