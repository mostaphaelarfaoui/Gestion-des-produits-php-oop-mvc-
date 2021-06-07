<?php
include './controllers/BordController.php';

if (isset($_POST['submit'])) {
    $newEmploye = new bordsController();
    $newEmploye->addBord();
}

?>

<div class="container">
    <div class="row my-4">
        <div class="col -md-8 mx-auto">
            <div class="card">
                <div class="card-header">Ajouter </div>
                <div class="card-body bg-light">
                    <a class="btn btn-sm btn-secondary mr-2 mb-2" href="<?php echo 'https://localhost/mvcc/' ?> ">
                        <i class="fas fa-home"></i>
                    </a>
                    <form method="POST">

                        <div class="form-group mt-3">
                            <label class="mb-1">total des catégories</label>
                            <input class="form-control" placeholder="entrer Total catégories" type="text" name="categ">
                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1"> total des produits</label>
                            <input class="form-control " placeholder="entrer total des produits" type="text"
                                name="prod">
                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1"> total des produits vendus</label>
                            <input class="form-control " placeholder="entrer total des produits vendus" type="text"
                                name="prod_ven">
                        </div>
                        <div>
                            <button class="btn btn-primary mt-3" type="submit" name="submit">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>