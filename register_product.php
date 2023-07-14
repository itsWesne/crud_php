<html>

<head>
    <meta charset="utf-8">
    <title> Formulário de Cadastro </title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container" id="width-Container">
        <h1 class="display-6">FORMULÁRIO DE CADASTRO</h1>
        <form action="_insert_product.php" method="post" style="margin-top: 20px">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Cod</span>
                <input type="number" class="form-control" name="cod_product" placeholder="Código do produto." autocomplete="off" required>
                <span class="input-group-text" id="basic-addon1">Categoria</span>

                <select class="form-select" name="category" aria-label="Default select example" autocomplete="off" required>
                    <option selected>Escolha uma categoria</option>
                    <option>Controles</option>
                    <option>Teclados</option>
                    <option>Mouses</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nome</span>
                <input type="text" class="form-control" name="product_name" placeholder="Insira o nome do produto." autocomplete="off" required>
                <span class="input-group-text" id="basic-addon2">QTD</span>
                <input type="number" class="form-control" name="quantity" placeholder="Quantidade.">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Descrição do produto</span>
                <textarea class="form-control" name="product_description" aria-label="With textarea" autocomplete="off"></textarea>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="list_products.php"><button class="btn btn-warning" type="button">ESTOQUE</button></a>
                <button class="btn btn-success" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>