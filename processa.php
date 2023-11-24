<?php
// Incluir a conexão com o BD
include_once "conexao.php";

// Receber os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Verificar se o usuário clicou no botão
if (!empty($dados['Cadproduto'])) {
    $query_produto = "INSERT INTO cadastrar_produto
                     (produto, descricao, valor_unitario, unidade_medida) VALUES
                     (:produto, :descricao, :valor_unitario, :unidade_medida)";

    $cad_produto = $conn->prepare($query_produto);
    $cad_produto->bindParam(':produto', $dados['produto'], PDO::PARAM_STR);
    $cad_produto->bindParam(':descricao', $dados['descricao'], PDO::PARAM_STR);
    $cad_produto->bindParam(':valor_unitario', $dados['valor_unitario'], PDO::PARAM_STR);
    $cad_produto->bindParam(':unidade_medida', $dados['unidade_medida'], PDO::PARAM_STR);
    
    // Execute a consulta
    if ($cad_produto->execute()) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o produto.";
    }
} else {
    echo "Erro: o botão não foi clicado.";
}
?>

