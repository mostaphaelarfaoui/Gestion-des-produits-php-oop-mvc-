<?php

class CategoriesController{
    public function getAllCategories(){
        $employes = Categorie::getAll();
        return $employes;
    }

    public function getOnCategorie(){
        if(isset($_POST['id'])){
            $data = array(
                'id'=>$_POST['id']
            );
        }
        $employe = Categorie::getCategorie($data);
        return $employe;
    }

    public function findCategories(){
        if(isset($_POST['search'])){
            $data = array('search'=> $_POST['search']);
        }
        $employes = Categorie::searchCategorie($data);
        return $employes;
    }

    public function addCategorie(){
        if(isset($_POST['submit'])){
            $data = array(
                'carac_tech' =>$_POST['carac_tech'],
                'mode_uti'   =>$_POST['mode_uti'],
                'duree_vu'   =>$_POST['duree_vu'],
                'type_ga'    =>$_POST['type_ga'],
                'desc'       =>$_POST['desc'],
            );
            $result = Categorie::add($data);
            if($result === 'ok'){
                Session::set('success', 'Categories Ajouté');
                Redirect::to('categorie');
            }else{
                echo $result;
            }
        }
    }

    public function updateCategorie(){
        if (isset($_POST['submit'])) {
            $data = array(
                'id'         => $_POST['id'],
                'carac_tech' => $_POST['carac_tech'],
                'mode_uti'   => $_POST['mode_uti'],
                'duree_vu'   => $_POST['duree_vu'],
                'type_ga'    => $_POST['type_ga'],
                'desc'       => $_POST['desc'],
            );
            $result = Categorie::update($data);
            if ($result === 'ok') {
                Session::set('success', 'Categories Modifier');
                Redirect::to('categorie');
            } else {
                echo $result;
            }
        }
    }

    public function deleteCategorie(){
    if(isset($_POST['id'])){
        $data['id'] = $_POST['id'];
        $result = Categorie::delete($data);
        if($result === 'ok'){
                Session::set('success', 'Categories Supprimer');
                Redirect::to('categorie');
            } else {
                echo $result;
        }
    }
    }

}