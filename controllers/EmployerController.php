<?php

class EmployesController{
    public function getAllEmployes(){
        $employes = Employe::getAll();
        return $employes;
    }

    public function getOnEmploye(){
        if(isset($_POST['id'])){
            $data = array(
                'id'=>$_POST['id']
            );
        }
        $employe = Employe::getEmploye($data);
        return $employe;
    }

    public function findEmployes(){
        if(isset($_POST['search'])){
            $data = array('search'=> $_POST['search']);
        }
        $employes = Employe::searchEmploye($data);
        return $employes;
    }

    public function addEmploye(){
        if(isset($_POST['submit'])){
            $data = array(
                'carac_tech' =>$_POST['carac_tech'],
                'mode_uti'   =>$_POST['mode_uti'],
                'duree_vu'   =>$_POST['duree_vu'],
                'type_ga'    =>$_POST['type_ga'],
                'desc'       =>$_POST['desc'],
            );
            $result = Employe::add($data);
            if($result === 'ok'){
                Session::set('success', 'Employé Ajouté');
                Redirect::to('categorie');
            }else{
                echo $result;
            }
        }
    }

    public function updateEmploye(){
        if (isset($_POST['submit'])) {
            $data = array(
                'id'         => $_POST['id'],
                'carac_tech' => $_POST['carac_tech'],
                'mode_uti'   => $_POST['mode_uti'],
                'duree_vu'   => $_POST['duree_vu'],
                'type_ga'    => $_POST['type_ga'],
                'desc'       => $_POST['desc'],
            );
            $result = Employe::update($data);
            if ($result === 'ok') {
                Session::set('success', 'Employé Modifier');
                Redirect::to('categorie');
            } else {
                echo $result;
            }
        }
    }

    public function deleteEmploye(){
    if(isset($_POST['id'])){
        $data['id'] = $_POST['id'];
        $result = Employe::delete($data);
        if($result === 'ok'){
                Session::set('success', 'Employé Supprimer');
                Redirect::to('Categorie');
            } else {
                echo $result;
        }
    }
    }

}