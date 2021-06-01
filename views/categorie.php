<?php
include './controllers/EmployerController.php';

if (isset($_POST['find'])) {
    $data = new EmployesController();
    $employes = $data->findEmployes();
} else {
    $data = new EmployesController();
    $employes = $data->getAllEmployes();
}
?>

<div class="container">
    <div class="row my-4">
        <div class="col -md-10 mx-auto">

            <?php include('./views/includes/alerts.php'); ?>

            <div class="card">
                <div class=" card-body bg-light">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <a class="navbar-brand" href="<?php echo 'https://localhost/mvcc/' ?>"><i
                                            class="btn btn-sm btn-secondary mr-2 mb-2 fas fa-home"></i></a>
                                    <a class="navbar-brand" href="<?php echo 'https://localhost/mvcc/addcateg' ?>"><i
                                            class="btn btn-sm btn-primary mr-2 mb-2 fas fa-plus"></i></a>
                                </ul>
                                <i class=" me-2 fas fa-user"><?php echo $_SESSION['username']; ?>
                                </i>
                                <form class="d-flex" method="POST">
                                    <input class="form-control me-2" type="search"
                                        placeholder="Recherche dans Catégorie" name="search">
                                    <button class="btn btn-outline-success" name="find" type="submit">Recherche</button>
                                </form>
                                <div>
                                    <a class="btn btn-sm btn-primary m-1" href="
                                    <?php echo 'https://localhost/mvc/logout' ?>">Logout
                                    </a>
                                </div>
                            </div>
                    </nav>

                    <!-- 1er table -->

                    <!-- <h3 class="mb-3">Tableau de bord:</h3>
                    <table class="table table-dark table-striped mb-5">
                        <thead>
                            <tr>
                                <th scope="col">total</th>
                                <th scope="col">catégories</th>
                                <th scope="col">produits</th>
                                <th scope="col">produits vendus</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>20</td>
                                <td>12</td>
                                <td>33</td>
                            </tr>
                        </tbody>
                    </table> -->

                    <!-- 2émé table -->

                    <table class="table table-striped">
                        <thead>
                            <h3 class="mb-3">Tableau de Catégorie:</h3>
                            <tr class="table-primary">
                                <th scope="col">id</th>
                                <th scope="col">Caractéristiques_techniques</th>
                                <th scope="col">Mode_d’utilisation</th>
                                <th scope="col">Durée_de_vie</th>
                                <th scope="col">Type_de_garantie</th>
                                <th scope="col">Descriptif</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employes as $employe) : ?>
                            <tr>
                                <th scope=" row"><?php echo $employe['id'] ?></th>
                                <td class="table-secondary">
                                    <?php echo $employe['caracteristiques_techniques'] ?></td>
                                <td class="table-success"><?php echo $employe['mode_dutilisation'] ?></td>
                                <td class="table-warning"><?php echo $employe['duree_de_vie'] ?></td>
                                <td class="table-info"><?php echo $employe['type_de_garantie'] ?></td>
                                <td class="table-dark"><?php echo $employe['descriptif'] ?></td>
                                <td class="d-flex flex-row table-danger">
                                    <form class="mr-1" action="update" method="POST">
                                        <input type="hidden" name='id' value="<?php echo $employe['id']; ?>">
                                        <button class="btn btn-sm btn-warning "> <i class="fa fa-edit"></i></button>
                                    </form>
                                    <form class="mr-1" action="delete" method="POST">
                                        <input type="hidden" name='id' value="<?php echo $employe['id']; ?>">
                                        <button class="btn btn-sm btn-danger "> <i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>