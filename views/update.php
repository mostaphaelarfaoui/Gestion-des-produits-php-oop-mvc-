<?php
include './controllers/EmployerController.php';

if (isset($_POST['id'])) {
    $existEmploye = new EmployesController();
    $employe = $existEmploye->getOnEmploye();
} else {
    Redirect::to('home');
}

if (isset($_POST['submit'])) {
    $existEmploye = new EmployesController();
    $existEmploye->updateEmploye();
}
?>

<div class="container">
    <div class="row my-4">
        <div class="col -md-8 mx-auto">
            <div class="card">
                <div class="card-header">Modifier </div>
                <div class="card-body bg-light">
                    <a class="btn btn-sm btn-secondary mr-2 mb-2"
                        href="<?php echo 'https://localhost/mvcc/categorie' ?> ">
                        <i class="fas fa-home"></i>
                    </a>
                    <form method="POST">

                        <div class="form-group mt-3">
                            <label class="mb-1" for="car_tech"> caractéristiques_techniques: </label>
                            <input class="form-control " placeholder="entrer caractéristiques_techniques" type="text"
                                name="carac_tech" value="<?php echo $employe->caracteristiques_techniques ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1" for="mode_uti"> mode_d’utilisation</label>
                            <input class="form-control " placeholder="entrer mode_d’utilisation" type="text"
                                name="mode_uti" value="<?php echo $employe->mode_dutilisation ?>">
                            <input type="hidden" name='id' value="<?php echo $employe->id; ?>">

                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1" for="du_vu"> durée_de_vie</label>
                            <input class="form-control " placeholder="entrer durée_de_vie" type="text" name="duree_vu"
                                value="<?php echo $employe->duree_de_vie ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1" for="type_ga"> type_de_garantie</label>
                            <input class="form-control " placeholder="entrer type_de_garantie" type="text"
                                name="type_ga" value="<?php echo $employe->type_de_garantie ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label class="mb-1" for="desc"> descriptif</label>
                            <input class="form-control " placeholder="entrer descriptif" type="text" name="desc"
                                value="<?php echo $employe->descriptif ?>">
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