<?php

include 'conection.php';

$id = $_GET['id'];

?>

<?php
$title_page = 'Editar estoque';
include '../models/header.php'; ?>

<body class="bg-primary-subtle bg-gradient" onselectstart="return false">
    <div class="container rounded shadow p-3" style="background: white; margin-top: 40px">
        <h1 class="display-6 bg-body-tertiary">FORMULÁRIO DE EDIÇÃO</h1>
        <form action="_update_product.php" method="post" style="margin-top: 20px">
            <?php
            $sql = "SELECT * FROM produtos WHERE id_produto = $id";
            $search = mysqli_query($con, $sql);

            while ($columns = mysqli_fetch_array($search)) {
                $id_stock = $columns['ID_PRODUTO'];
                $cod_product = $columns['COD_PRODUTO'];
                $product_name = $columns['NOME_PRODUTO'];
                $product_description = $columns['DESCRICAO_PRODUTO'];
                $category = $columns['CATEGORIA'];
                $quantity = $columns['QUANTIDADE'];

            ?>
                <div class="input-group mb-3">
                    <span class="input-group-text">Cod</span>
                    <input type="number" class="form-control" name="cod_product" value=<?php echo $cod_product ?> disabled>
                    <input type="number" class="form-control" name="id" value=<?php echo $id ?> style="display: none">
                    <span class="input-group-text" id="basic-addon1">Categoria</span>

                    <select class="form-select" name="category" value="<?php echo $category ?>" required>
                        <option class="text-bg-primary"><?php echo $category ?></option>
                        <option>Controles</option>
                        <option>Teclados</option>
                        <option>Mouses</option>
                        <option>Placa de vídeo</option>
                        <option>Gabinetes</option>
                        <option>Livros</option>
                        <option>Jogos</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nome</span>
                    <input type="text" class="form-control" name="product_name" value=<?php echo str_replace(' ', '&#32', $columns['NOME_PRODUTO']) ?> autocomplete="off" required>
                    <span class="input-group-text" id="basic-addon2">QTD</span>
                    <input type="number" class="form-control" name="quantity" value=<?php echo $quantity ?>>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Descrição do produto</span>
                    <textarea class="form-control" name="product_description" aria-label="With textarea" autocomplete="off"><?php echo $product_description ?></textarea>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="../pages/list_products.php" class="btn btn-danger"><i class="fa-solid fa-xmark"></i> CANCELAR</a>
                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-arrows-rotate"></i> ATUALIZAR</button>
                </div>
            <?php } ?>
        </form>
    </div>

    <?php include '../models/footer.php'; ?>