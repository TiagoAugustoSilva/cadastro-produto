<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Tiago - Cadastrar em duas tabelas</title>
    <link rel="stylesheet" href="./cadastrar.css" </head>

<body>
    <div class="container">
    

    <form method="POST" action="processa.php">
    <h1>Cadastrar Produtos</h1>
    
        <h3>Dados básicos</h3>

        <label>Produto: </label>
        <input type="text" name="produto" id="produto" placeholder="nome produto"><br><br>

        <label>Descricao: </label>
        <input type="text" name="descricao" id="descricao" placeholder="descricao produto"><br><br>

        <label>Valor unitário: </label>
        <input type="text" name="valor_unitario" id="valor_unitario" placeholder="valor unitário"><br><br>


        <label>Unidade de medida: </label>
        <input type="text" name="unidade_medida" id="unidade_medida" placeholder="unidade de medida"><br><br>

        <input type="submit" value="Cadastrar" name="Cadproduto">


    </form>
    </div>

</body>

</html>