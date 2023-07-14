<html>

<head>
    <title>
        Listagem de estoque.
    </title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class='container'>
        <h1 class='display-6'>ESTOQUE</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">COD</th>
                    <th scope="col">PRODUTO</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">QUANTIDADE</th>
                </tr>
            </thead>

            <?php
            include 'conection.php';
            $sql = "SELECT * FROM produtos";
            $search = mysqli_query($con, $sql);

            while ($array = mysqli_fetch_array($search)) {
                $id_stock = $array['ID_PRODUTO'];
                $cod_product = $array['COD_PRODUTO'];
                $product_name = $array['NOME_PRODUTO'];
                $product_description = $array['DESCRICAO_PRODUTO'];
                $category = $array['CATEGORIA'];
                $quantity = $array['QUANTIDADE'];
            ?>
                <tr>

                    <td> <?php echo $cod_product ?> </td>
                    <td><?php echo $product_name ?></td>
                    <td><?php echo $product_description ?></td>
                    <td> <?php echo $category ?></td>
                    <td><?php echo $quantity ?></td>

        <?php } ?>
                </tr>

        </table>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>