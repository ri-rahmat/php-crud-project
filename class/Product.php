<?php


class Product
{
    function insert_product($data){

        $link = mysqli_connect('localhost', 'root', '', 'php6');
        if ($link){
            $sql = "INSERT INTO products (product_name, product_description, product_price, product_quantity, alert_quantity) VALUES ('$data[product_name]', '$data[product_description]', '$data[product_price]', '$data[product_quantity]', '$data[alert_quantity]')";
            if (mysqli_query($link, $sql)){
                return "Product Added Successfully !!!";
            }
        }else{
            die("Connection Problem: ". mysqli_error($link));
        }
    }

    public function show_all_product()
    {
        $link = mysqli_connect('localhost', 'root', '', 'php6');
        $sql = "SELECT * FROM products";
        if ($data = mysqli_query($link, $sql))
        {
            return $data;
        } else{
            die("Connection Problem: ". mysqli_error($link));
        }
    }

    public function edit_product()
    {
        $id = $_GET['edit'];
        $link = mysqli_connect('localhost', 'root', '', 'php6');
        $sql = "SELECT * FROM products WHERE id = $id";

        if ($result = mysqli_query($link, $sql))
        {
            return $result;
        }else{
            die("Connection Problem: ". mysqli_error($link));
        }
    }

    public function update_product()
    {
        extract($_POST);
        $link = mysqli_connect('localhost', 'root', '', 'php6');
        $sql = "UPDATE products SET product_name = '$product_name', product_description= '$product_description', product_price = '$product_price', product_quantity = '$product_quantity', alert_quantity = '$alert_quantity'  WHERE id = '$id' ";

        if (mysqli_query($link, $sql))
        {
            header("Location: all_categroy.php");
        } else{
            die("Connection Problem: ". mysqli_error($link));
        }
    }

    public function delete_product($id)
    {
        $link = mysqli_connect('localhost', 'root', '', 'php6');
        $sql = "DELETE FROM products WHERE id = '$id'";
        if (mysqli_query($link,$sql))
        {
            header('Location: all_categroy.php');
        } else{
            die("Connection Product: ".mysqli_error($link));
        }
    }


}