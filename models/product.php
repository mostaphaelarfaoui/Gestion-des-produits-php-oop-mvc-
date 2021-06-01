<?php

class Produit
{

    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM bord');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function getProduits($data)
    {
        $id = $data['id'];
        try {
            $query = 'SELECT * FROM bord WHERE id= :id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $employe = $stmt->fetch(PDO::FETCH_OBJ);
            return $employe;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO bord(categories, produits, produits_vendus ) 
      VALUES (:categ,:prod,:prod_ven)");

        $stmt->bindParam(':categ', $data['categ']);
        $stmt->bindParam(':prod',   $data['prod']);
        $stmt->bindParam(':prod_ven',   $data['prod_ven']);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }

    static public function update($data)
    {
        $stmt = DB::connect()->prepare('UPDATE bord SET 
        categories      =:categ,
        produits        =:prod,
        produits_vendus =:prod_ven
        WHERE id = :id');

        $stmt->bindParam(':id',         $data['id']);
        $stmt->bindParam(':categ', $data['categ']);
        $stmt->bindParam(':prod',   $data['prod']);
        $stmt->bindParam(':prod_ven',   $data['prod_ven']);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }
}