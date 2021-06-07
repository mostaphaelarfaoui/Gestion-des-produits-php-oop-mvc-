<?php
include './controllers/CategorieController.php';

if (isset($_POST['id'])) {
    $existEmploye = new CategoriesController();
    $existEmploye->deleteCategorie();
}