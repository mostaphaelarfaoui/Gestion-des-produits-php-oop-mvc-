<?php
include './controllers/ProductController.php';

if (isset($_POST['submit'])) {
    $newEmploye = new ProductsController();
    $newEmploye->addProduct();
}

?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Ajouter un produit
                    </h3>
                </div>
                <div class="card-body">
                    <form method="post" class="mr-1" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="product_title" required autocomplete="off"
                                placeholder="Titre" id="">
                        </div>
                        <div class="form-group">
                            <textarea row="5" cols="20" autocomplete="off" class="form-control"
                                name="product_description" placeholder="Description" id=""></textarea>
                        </div>
                        <div class="form-group">
                            <textarea row="5" cols="20" autocomplete="off" class="form-control" name="short_desc"
                                placeholder="Description Courte" id=""></textarea>
                        </div>

                        <div class="form-group">
                            <input type="number" autocomplete="off" class="form-control" name="product_price"
                                placeholder="Prix" id="">
                        </div>
                        <div class="form-group">
                            <input type="number" autocomplete="off" class="form-control" name="old_price"
                                placeholder="Ancien Prix" id="">
                        </div>
                        <div class="form-group">
                            <input type="number" autocomplete="off" class="form-control" name="product_quantity"
                                placeholder="Quantité" id="">
                        </div>
                        <!-- <div class="form-group">
                            <input type="file" class="form-control" name="image">
                        </div> -->
                        <div class="form-group">
                            <button name="submit" class="btn btn-primary">
                                Valider
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>