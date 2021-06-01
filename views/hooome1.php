<?php
include './controllers/CategorieController.php';


$data = new categoriesController();
$employes = $data->getAllCategories();

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

                                <div class="container">
                                    <button class="m-1 btn btn-info"> <a
                                            href="<?php echo 'https://localhost/mvcc/categorie' ?>" type="button">
                                            catégories</a>
                                        <!-- </button><button class="m-1 btn btn-info"> <a
                                            href="<php echo 'https://localhost/mvcc/product' ?>" type="button">
                                            product</a>
                                    </button> -->
                                        <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->
                                        <!-- <button type="button" class="btn btn-success">Success</button> -->
                                </div>

                                <i class=" me-2 fas fa-user"><?php echo $_SESSION['username']; ?>
                                </i>

                                <div>
                                    <a class="btn btn-sm btn-primary m-1" href="
                                    <?php echo 'https://localhost/mvcc/logout' ?>">Logout
                                    </a>
                                </div>
                            </div>
                    </nav>

                    <!-- 1er table -->

                    <h3 class="mb-3">Tableau de bord:</h3>
                    <table class="table  table-striped mb-5">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">total des catégories</th>
                                <th scope="col">total des produits</th>
                                <th scope="col">total des produits vendus</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employes as $employe) : ?>
                            <tr>
                                <th scope=" row"><?php echo $employe['id'] ?></th>
                                <td class="table-secondary">
                                    <?php echo $employe['categories'] ?></td>
                                <td class="table-success"><?php echo $employe['produits'] ?></td>
                                <td class="table-warning"><?php echo $employe['produits_vendus'] ?></td>

                                <td class="d-flex flex-row table-danger">
                                    <form class="mr-1" action="updatecateg" method="POST">
                                        <input type="hidden" name='id' value="<?php echo $employe['id']; ?>">
                                        <button class="btn btn-sm btn-warning "> <i class="fa fa-edit"></i></button>
                                    </form>

                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <!-- 2émé table -->


                </div>
            </div>
        </div>
    </div>
</div>