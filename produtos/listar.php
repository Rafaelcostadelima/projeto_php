<?php
require __DIR__ . '/verifica_login.php';
require __DIR__ . '/../conexao.php';
$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);
?>
<?php require __DIR__ . '/../cabecalho.php'; ?>

<!-- Adicionado uma div wrapper para controle extra de overflow se necessário -->
<main class="container">
    <h2>Produtos cadastrados</h2>
    <div class="acoes-topo">
        <a class="produto-novo" href="cadastrar.php">Cadastrar novo produto</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Qtd.</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($produto = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <!-- O data-label é essencial para a responsividade CSS -->
                    <td data-label="Produto"><?php echo $produto['nome']; ?></td>
                    <td data-label="Descrição"><?php echo $produto['descricao']; ?></td>
                    <td data-label="Preço">R$ <?php echo $produto['preco']; ?></td>
                    <td data-label="Qtd."><?php echo $produto['quantidade']; ?></td>
                    <td data-label="Ações" class="botoes-acoes">
                        <a class="atualizar" href="atualizar.php?id=<?php echo $produto['id']; ?>">Editar</a>
                        <a class="excluir" href="excluir.php?id=<?php echo $produto['id']; ?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>

<?php require __DIR__ . '/../rodape.php'; ?>