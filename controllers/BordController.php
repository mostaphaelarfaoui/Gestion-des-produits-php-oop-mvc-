<?php

include './models/bord.php';

class bordsController
{
    public function getAllBords()
    {
        $employes = Bord::getAll();
        return $employes;
    }

    public function getOnBord()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
        }
        $employe = Bord::getBord($data);
        return $employe;
    }


    public function addBord()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'categ'      => $_POST['categ'],
                'prod'       => $_POST['prod'],
                'prod_ven'   => $_POST['prod_ven'],

            );
            $result = Bord::add($data);
            if ($result === 'ok') {
                Session::set('success', 'Bien Ajouté');
                Redirect::to('hooome1');
            } else {
                echo $result;
            }
        }
    }

    public function updateBord()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id'       => $_POST['id'],
                'categ'    => $_POST['categ'],
                'prod'     => $_POST['prod'],
                'prod_ven' => $_POST['prod_ven'],

            );
            $result = Bord::update($data);
            if ($result === 'ok') {
                Session::set('success', 'Tableau Bord Modifier');
                Redirect::to('hooome1');
            } else {
                echo $result;
            }
        }
    }

  
}