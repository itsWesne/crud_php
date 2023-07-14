<?php
include 'conection.php';

$id = $_POST['id'];
$category = $_POST['category'];
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$product_description = $_POST['product_description'];

//echo "ID: {$id}" . PHP_EOL;
//echo "CATEGORIA: {$category}" . PHP_EOL;
//echo "NOME DO PRODUTO: {$product_name}" . PHP_EOL;
//echo "QUANTIDADE {$quantity}" . PHP_EOL;
//echo "DESCRIÇÃO {$product_description}" . PHP_EOL;


$sql = "UPDATE `produtos` SET `NOME_PRODUTO` = '$product_name',
 `CATEGORIA` = '$category', `QUANTIDADE` = $quantity WHERE `ID_PRODUTO` = $id";

$update = mysqli_query($con, $sql);
