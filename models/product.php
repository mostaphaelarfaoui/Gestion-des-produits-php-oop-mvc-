<?php

class Product
{

    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM Product');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function getProduct($data)
    {
        $id = $data['id'];
        try {
            $query = 'SELECT * FROM Product WHERE id= :id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $Product = $stmt->fetch(PDO::FETCH_OBJ);
            return $Product;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function searchProduct($data)
    {
        $search = $data['search'];
        try {
            $query = "SELECT * FROM Product WHERE id LIKE ?";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array("%" . $search . "%"));
            return $Products = $stmt->fetchAll();
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO Product (product_title, product_description, short_desc, product_price, old_price, product_quantity ) 
                                        VALUES (:product_title, :product_description, :short_desc, :product_price, :old_price, :product_quantity)");


        $stmt->bindParam(':product_title',       $data['product_title']);
        $stmt->bindParam(':product_description', $data['product_description']);
        $stmt->bindParam(':short_desc',          $data['short_desc']);
        $stmt->bindParam(':product_price',       $data['product_price']);
        $stmt->bindParam(':old_price',           $data['old_price']);
        $stmt->bindParam(':product_quantity',    $data['product_quantity']);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }

    static public function update($data)
    {
        $stmt = DB::connect()->prepare('UPDATE Product SET 
        product_title       =:product_title,
        product_description =:product_description,
        short_desc          =:short_desc,
        product_price       =:product_price,
        old_price           =:old_price,
        product_quantity    =:product_quantity,
        WHERE id = :id');

        $stmt->bindParam(':id',                  $data['id']);
        $stmt->bindParam(':product_title',       $data['product_title']);
        $stmt->bindParam(':product_description', $data['product_description']);
        $stmt->bindParam(':short_desc',          $data['short_desc']);
        $stmt->bindParam(':product_price',       $data['product_price']);
        $stmt->bindParam(':old_price',           $data['old_price']);
        $stmt->bindParam(':product_quantity',    $data['product_quantity']);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }

    static public function delete($data)
    {
        $id = $data['id'];
        try {
            $query = "DELETE FROM Product WHERE id= :id";
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