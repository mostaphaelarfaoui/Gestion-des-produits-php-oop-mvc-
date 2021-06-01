<?php

include './models/produit.php';

class produitsController
{
    public function getAllProduits()
    {
        $employes = Produit::getAll();
        return $employes;
    }

    public function getOnProduits()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
        }
        $employe = Produit::getProduits($data);
        return $employe;
    }


    public function addProduits()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'categ'      => $_POST['categ'],
                'prod'       => $_POST['prod'],
                'prod_ven'   => $_POST['prod_ven'],

            );
            $result = Produit::add($data);
            if ($result === 'ok') {
                Session::set('success', 'Produit Ajouté');
                Redirect::to('hooome1');
            } else {
                echo $result;
            }
        }
    }

    public function updateProduits()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id'       => $_POST['id'],
                'categ'    => $_POST['categ'],
                'prod'     => $_POST['prod'],
                'prod_ven' => $_POST['prod_ven'],

            );
            $result = Produit::update($data);
            if ($result === 'ok') {
                Session::set('success', 'Produit Modifier');
                Redirect::to('hooome1');
            } else {
                echo $result;
            }
        }
    }
}