<?php
$title_page = 'Estoque';
include '../models/header.php'; ?>

<body class="bg-primary-subtle bg-gradient">
    <div class="container rounded shadow p-3" style="background: white; margin-top: 40px">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <h1 class='display-6' style="user-select: none;">ESTOQUE</h1>
                <!--    <form class="d-flex justify-content-end" role="search">
                    <input class="form-control me-2 col-md-12" type="search" placeholder="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form> -->
            </div>
        </nav>
        <table class="table table-hover">
            <thead>
                <tr style="user-select: none;">
                    <th scope="col">COD</th>
                    <th scope="col">NOME</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col" class="text-end"></th>
                </tr>
            </thead>

            <?php
            include '../database/conection.php';
            $sql = "SELECT * FROM produtos";
            $search = mysqli_query($con, $sql);

            while ($colunms = mysqli_fetch_array($search)) {
                $id_stock = $colunms['ID_PRODUTO'];
                $cod_product = $colunms['COD_PRODUTO'];
                $product_name = $colunms['NOME_PRODUTO'];
                $product_description = $colunms['DESCRICAO_PRODUTO'];
                $category = $colunms['CATEGORIA'];
                $quantity = $colunms['QUANTIDADE'];
            ?>
                <tr style="user-select: text;">
                    <td> <?php echo $cod_product ?> </td>
                    <td><?php echo strlen($product_name) < 50 ? $product_name : mb_strimwidth($product_name, 0, 47, "..."); ?></td>
                    <td><?php echo strlen($product_description) <= 50 ? $product_description : mb_strimwidth($product_description, 0, 47, "..."); ?></td>
                    <td> <?php echo $category ?></td>
                    <td><?php echo $quantity ?></td>

                    <td class="text-end">
                        <a class="btn btn-primary btn-sm" href="../database/edit_product.php?id=<?php echo $id_stock ?>" role="button"><i class="fa-regular fa-pen-to-square"></i> Editar</a>
                        <a class="btn btn-danger btn-sm" href="../database/del_product.php?id=<?php echo $id_stock ?>" role="button"><i class="fa-solid fa-trash"></i> Excluir</a>
                    </td>
                <?php } ?>
                </tr>

        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="menu.php"><button class="btn btn-PRIMARY" type="button"><i class="fa-solid fa-house"></i> INICIO</button></a>
            <a href="register_product.php"><button class="btn btn-success" type="button"><i class="fa-solid fa-plus"></i> ADICIONAR</button></a>
        </div>
    </div>
    <?php include '../models/footer.php'; ?>