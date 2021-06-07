<?php

class ProductsController
{
    public function getAllProducts()
    {
        $Products = Product::getAll();
        return $Products;
    }

    public function getOnProduct()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
        }
        $Product = Product::getProduct($data);
        return $Product;
    }

    public function findProducts()
    {
        if (isset($_POST['search'])) {
            $data = array('search' => $_POST['search']);
        }
        $Products = Product::searchProduct($data);
        return $Products;
    }

    public function addProduct()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'product_title'       => $_POST['product_title'],
                'product_description' => $_POST['product_description'],
                'short_desc'          => $_POST['short_desc'],
                'product_price'       => $_POST['product_price'],
                'old_price'           => $_POST['old_price'],
                'product_quantity'    => $_POST['product_quantity']

            );
            $result = Product::add($data);
            if ($result === 'ok') {
                Session::set('success', 'Product Ajouté');
                Redirect::to('product');
            } else {
                echo $result;
            }
        }
    }

    public function updateProduct()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id'                  => $_POST['id'],
                'product_title'       => $_POST['product_title'],
                'product_description' => $_POST['product_description'],
                'short_desc'          => $_POST['short_desc'],
                'product_price'       => $_POST['product_price'],
                'old_price'           => $_POST['old_price'],
                'product_quantity'    => $_POST['product_quantity'],
            );
            $result = Product::update($data);
            if ($result === 'ok') {
                Session::set('success', 'Product Modifier');
                Redirect::to('product');
            } else {
                echo $result;
            }
        }
    }

    public function deleteProduct()
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Product::delete($data);
            if ($result === 'ok') {
                Session::set('success', 'Product Supprimer');
                Redirect::to('product');
            } else {
                echo $result;
            }
        }
    }
}