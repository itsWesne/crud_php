<?php

include 'conection.php';

$id = $_GET['id'];

$sql = "DELETE FROM `produtos` WHERE `ID_PRODUTO` = $id";

$delete_product = mysqli_query($con, $sql);

header("location:../pages/list_products.php");