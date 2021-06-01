<?php 

class Employe {
    
    static public function getAll(){
      $stmt = DB::connect()->prepare('SELECT * FROM catégorie');
      $stmt->execute();
      return $stmt->fetchAll();
    }

  static public function getEmploye($data)
  {
    $id = $data['id'];
    try {
      $query = 'SELECT * FROM catégorie WHERE id= :id';
      $stmt = DB::connect()->prepare($query);
      $stmt->execute(array(":id" => $id));
      $employe = $stmt->fetch(PDO::FETCH_OBJ);
      return $employe;
    } catch (PDOException $ex) {
      echo 'erreur' . $ex->getMessage();
    }
  }

  static public function searchEmploye($data){
    $search = $data['search'];
    try {
      $query = "SELECT * FROM catégorie WHERE id LIKE ?";
      $stmt = DB::connect()->prepare($query);
      $stmt->execute(array("%".$search."%" ));
      return $employes = $stmt->fetchAll();
    } catch (PDOException $ex) {
      echo 'erreur' . $ex->getMessage();
    }
  }

    static public function add($data){
      $stmt = DB::connect()->prepare("INSERT INTO catégorie(caracteristiques_techniques, mode_dutilisation, duree_de_vie, type_de_garantie, descriptif ) 
                                      VALUES (:carac_tech,:mode_uti,:duree_vu,:type_ga,:desc)");

  
    $stmt->bindParam(':carac_tech', $data['carac_tech']);
    $stmt->bindParam(':mode_uti',   $data['mode_uti']);
    $stmt->bindParam(':duree_vu',   $data['duree_vu']);
    $stmt->bindParam(':type_ga',    $data['type_ga']);
    $stmt->bindParam(':desc',       $data['desc']);

      if($stmt->execute()){
        return 'ok';
      }else{
        return 'error';
      }

    }

  static public function update($data)
  {
    $stmt = DB::connect()->prepare('UPDATE catégorie SET 
        caracteristiques_techniques =:carac_tech,
        mode_dutilisation           =:mode_uti,
        duree_de_vie                =:duree_vu,
        type_de_garantie            =:type_ga,
        descriptif                  =:desc
        WHERE id = :id');
    
    $stmt->bindParam(':id',         $data['id']);
    $stmt->bindParam(':carac_tech', $data['carac_tech']);
    $stmt->bindParam(':mode_uti',   $data['mode_uti']);
    $stmt->bindParam(':duree_vu',   $data['duree_vu']);
    $stmt->bindParam(':type_ga',    $data['type_ga']);
    $stmt->bindParam(':desc',       $data['desc']);

    if($stmt->execute()) {
      return 'ok';
    } else {
      return 'error';
    }

  }

    static public function delete($data){
    $id = $data['id'];
    try {
      $query = "DELETE FROM catégorie WHERE id= :id";
      $stmt = DB::connect()->prepare($query);
      $stmt->execute(array(":id" => $id));
      if ($stmt->execute()) {
        return 'ok';
      } 
    } catch (PDOException $ex) {
      echo 'erreur' . $ex->getMessage();
    }
    }
    
}