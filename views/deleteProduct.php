<?php
include './controllers/ProductController.php';

if (isset($_POST['id'])) {
    $existProduct = new ProductsController();
    $existProduct->deleteProduct();
}