<?php
include './controllers/CategorieController.php';

if (isset($_POST['submit'])) {
    $newEmploye = new CategoriesController();
    $newEmploye->addCategorie();
}

?>

<div class="container">
    <div class="row my-4">
        <div class="col -md-8 mx-auto">
            <div class="card">
                <div class="card-header">Ajouter </div>
                <div class="card-body bg-light">
                    <a class="btn btn-sm btn-secondary mr-2 mb-2"
                        href="<?php echo 'https://localhost/mvcc/categorie' ?> ">
                        <i class="fas fa-home"></i>
                    </a>
                    <form method="POST">

                        <div class="form-group mt-3">
                            <label class="mb-1" for="carac_tech"> caractéristiques_techniques</label>
                            <input class="form-control" placeholder="entrer caractéristiques_techniques" type="text"
                                name="carac_tech">
                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1" for="mode_uti"> mode_d’utilisation</label>
                            <input class="form-control " placeholder="entrer mode_d’utilisation" type="text"
                                name="mode_uti">
                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1" for="duree_vu"> durée_de_vie</label>
                            <input class="form-control " placeholder="entrer durée_de_vie" type="text" name="duree_vu">
                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1" for="type_ga"> type_de_garantie</label>
                            <input class="form-control " placeholder="entrer type_de_garantie" type="text"
                                name="type_ga">
                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1" for="desc"> descriptif</label>
                            <input class="form-control " placeholder="entrer descriptif" type="text" name="desc">
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