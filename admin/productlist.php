<?php
include "class/product-class.php";
$product = new productclass();

if (isset($_GET['brand_id'])) {
    $brand_id = $_GET['brand_id'];
    $products = $product->get_product_by_brand($brand_id);
}
?>