<?php 
trait HomeModel {
    public function hot_product() {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT name,price,img,id FROM tbl_product WHERE product_hot = 1 ORDER BY id DESC");
        return $query->fetchAll();

    }

    public function new_product() {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT name,price,img,id FROM tbl_product  ORDER BY id DESC LIMIT 0,5");
        return $query->fetchAll();

    }
}
?>