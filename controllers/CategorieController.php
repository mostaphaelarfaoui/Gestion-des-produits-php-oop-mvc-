<?php

include './models/categorie.php';

class categoriesController
{
    public function getAllCategories()
    {
        $employes = Categorie::getAll();
        return $employes;
    }

    public function getOnCategorie()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
        }
        $employe = Categorie::getCategorie($data);
        return $employe;
    }


    public function addCategorie()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'categ'      => $_POST['categ'],
                'prod'       => $_POST['prod'],
                'prod_ven'   => $_POST['prod_ven'],

            );
            $result = Categorie::add($data);
            if ($result === 'ok') {
                Session::set('success', 'Catégorie Ajouté');
                Redirect::to('hooome1');
            } else {
                echo $result;
            }
        }
    }

    public function updateCategorie()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id'       => $_POST['id'],
                'categ'    => $_POST['categ'],
                'prod'     => $_POST['prod'],
                'prod_ven' => $_POST['prod_ven'],

            );
            $result = Categorie::update($data);
            if ($result === 'ok') {
                Session::set('success', 'Catégorie Modifier');
                Redirect::to('hooome1');
            } else {
                echo $result;
            }
        }
    }

  
}