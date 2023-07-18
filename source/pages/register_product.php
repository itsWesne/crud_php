<?php
$title_page = 'Formulario de cadastro';
include '../models/header.php'; ?>

<body class="bg-primary-subtle bg-gradient" onselectstart="return false">
    <div class="container rounded shadow p-3" style="background: white; margin-top: 40px">
        <h1 class="display-6 bg-body-tertiary">FORMULÁRIO DE CADASTRO</h1>

        <form action="../database/_insert_product.php" method="post" style="margin-top: 20px">

            <div class="input-group mb-3">
                <span class="input-group-text">Nome</span>
                <input type="text" class="form-control" name="product_name" placeholder="Insira o nome do produto." autocomplete="off" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Cod</span>
                <input type="number" class="form-control" name="cod_product" placeholder="Código do produto." autocomplete="off" required>

                <span class="input-group-text">QTD</span>
                <input type="number" class="form-control" name="quantity" placeholder="Quantidade.">

                <span class="input-group-text" id="basic-addon1">Categoria</span>
                <select class="form-select" name="category" autocomplete="off" required>
                    <option selected>Escolha uma categoria</option>
                    <option>Controles</option>
                    <option>Teclados</option>
                    <option>Mouses</option>
                    <option id='new category' disabled>+ Nova categoria</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Descrição do produto</span>
                <textarea class="form-control" name="product_description" rows="" style="resize: none;" autocomplete="off"></textarea>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="menu.php"><button class="btn btn-PRIMARY" type="button"><i class="fa-solid fa-house"></i> INICIO</button></a>
                <a href="list_products.php"><button class="btn btn-warning" type="button"><i class="fa-solid fa-database"></i> ESTOQUE</button></a>
                <button class="btn btn-success" type="submit"><i class="fa-solid fa-plus"></i> CADASTRAR</button>
            </div>

        </form>
    </div>


    <?php include '../models/footer.php'; ?>