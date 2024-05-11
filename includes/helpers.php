<?php


    function pp($data) {
        echo "<pre>"; print_r($data); echo "</pre>";
        //exit;
    }

    function getCategories($con) {

        $sql = "SELECT * FROM categories";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function getCategroyById($con, $id) {
        $sql = "SELECT * FROM categories WHERE id = $id";
        $result = mysqli_query($con, $sql);
        $categroy = mysqli_fetch_assoc($result);
        return $categroy;
    }



    function getProducts($con, $category = null, $id = null) {

        $sql = "SELECT * FROM products ";

            if($category != null) {
                $sql .= "WHERE category = '$category' ";
            }

            if($id != null && $category != null) {
                $sql .= "AND id = '$id' ";
            } else if($id != null && $category == null) {
                $sql .= "WHERE id = '$id' ";
            }

            $result = mysqli_query($con, $sql);

            //@todo  check if products are null then return false or null

            return $result;
    }

    function getImageUrl($folder, $image) {
        return "admin/images/$folder/$image";
    }


    function getFeatureProducts($con, $category = null, $id = null) {

        $sql = "SELECT * FROM products LIMIT 8";
            $result = mysqli_query($con, $sql);
            return $result;
    }


    
    function getLatestProducts($con) {

        $sql_latest = "SELECT * FROM products WHERE `status`= 2";
            $result_latest = mysqli_query($con, $sql_latest);

         
return $result_latest;
    }

    function getBestseller($con) {

        $sql_bestseller = "SELECT * FROM products WHERE `status`= 1";
            $result_bestseller = mysqli_query($con, $sql_bestseller);

            //@todo  check if products are null then return false or null
return $result_bestseller;
    }
    
    function getnextProducts($con, $category = null, $id = null) {

        $sql_all = "SELECT * FROM products LIMIT 8 OFFSET 4";
            $result_all = mysqli_query($con, $sql_all);
            return $result_all;
    }

    