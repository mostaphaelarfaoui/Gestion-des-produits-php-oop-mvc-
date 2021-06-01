<?php
include './controllers/EmployerController.php';

if (isset($_POST['id'])) {
    $existEmploye = new EmployesController();
    $existEmploye->deleteEmploye();
}