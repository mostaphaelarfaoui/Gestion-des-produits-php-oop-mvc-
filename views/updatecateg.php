<?php
include './controllers/CategorieController.php';

if (isset($_POST['id'])) {
    $existEmploye = new categoriesController();
    $employe = $existEmploye->getOnCategorie();
} else {
    Redirect::to('hooome1');
}

if (isset($_POST['submit'])) {
    $existEmploye = new categoriesController();
    $existEmploye->updateCategorie();
}
?>

<div class="container">
    <div class="row my-4">
        <div class="col -md-8 mx-auto">
            <div class="card">
                <div class="card-header">Modifier </div>
                <div class="card-body bg-light">
                    <a class="btn btn-sm btn-secondary mr-2 mb-2" href="<?php echo 'https://localhost/mvcc/' ?> ">
                        <i class="fas fa-home"></i>
                    </a>
                    <form method="POST">

                        <div class="form-group mt-3">
                            <label class="mb-1" for="car_tech"> total des catégories: </label>
                            <input class="form-control " placeholder="entrer total des catégories" type="text"
                                name="categ" value="<?php echo $employe->categories ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1" for="mode_uti"> total des produits</label>
                            <input class="form-control " placeholder="entrer total des produits" type="text" name="prod"
                                value="<?php echo $employe->produits ?>">
                            <input type="hidden" name='id' value="<?php echo $employe->id; ?>">

                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1" for="du_vu"> total des produits vendus</label>
                            <input class="form-control " placeholder="entrer total des produits vendus" type="text"
                                name="prod_ven" value="<?php echo $employe->produits_vendus ?>">
                        </div>
                        <div>
                            <button class="btn btn-primary mt-3" type="submit" name="submit">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>