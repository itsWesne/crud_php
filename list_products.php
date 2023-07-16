<html>

<head>
    <title>
        Listagem de estoque.
    </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/76b42f17d3.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary-subtle bg-gradient">
    <div class="container rounded shadow p-3" style="background: white; margin-top: 40px">
        <h1 class='display-6'>ESTOQUE</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">COD</th>
                    <th scope="col">PRODUTO</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">AÇÃO</TH>
                </tr>
            </thead>

            <?php
            include 'conection.php';
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
                <tr>
                    <td> <?php echo $cod_product ?> </td>
                    <td><?php echo $product_name ?></td>
                    <td><?php echo $product_description ?></td>
                    <td> <?php echo $category ?></td>
                    <td><?php echo $quantity ?></td>
                    <td><a class="btn btn-primary btn-sm" href="edit_product.php?id=<?php echo $id_stock ?>" role="button"><i class="fa-regular fa-pen-to-square"></i>Editar</a>
                        <a class="btn btn-danger btn-sm" href="del_product.php?id=<?php echo $id_stock ?>" role="button"><i class="fa-solid fa-trash"></i>Excluir</a>
                    </td>

                <?php } ?>
                </tr>

        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="index.php"><button class="btn btn-PRIMARY" type="button">INICIO</button></a>
            <a href="register_product.php"><button class="btn btn-success" type="button">ADICIONAR</button></a>
        </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>