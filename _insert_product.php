<?php
include 'conection.php';

$cod_product = $_POST['cod_product'];
$category = $_POST['category'];
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$product_description = $_POST['product_description'];

// echo $cod_product.PHP_EOL;
// echo $category.PHP_EOL;
// echo $product_name.PHP_EOL;
// echo $product_description.PHP_EOL;


$sql = "INSERT INTO `produtos`(`COD_PRODUTO`, `CATEGORIA`, `NOME_PRODUTO`, `QUANTIDADE`, `DESCRICAO_PRODUTO`) 
VALUES ($cod_product, '$category', '$product_name', $quantity, '$product_description')";

$insert_product = mysqli_query($con, $sql);

header("location:register_product.php?msg=produto_cadastrado");

