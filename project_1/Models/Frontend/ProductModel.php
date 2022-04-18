<?php
trait ProductModel {
    public function rowCount() {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_product ");
        // $query->execute(array('start'=>$start,'limit'=>$limit));
        return $query->rowCount();
    }
    public function rowCount_id($id) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_product WHERE category_id=$id");
        return $query->rowCount();
    }
    public function all_Product($start,$limit) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_product LIMIT $start, $limit");
        return $query->fetchAll();
    }
    public function list_Product($id,$start,$limit) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT tbl_product.name as 'product_name',img ,price,tbl_product.id as 'product_id'
         FROM tbl_product WHERE  tbl_product.category_id = $id LIMIT $start,$limit ");
        
        return $query->fetchAll();                        
    }
    public function category_name($id) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_category WHERE id = $id");
        return $query->fetch();
    }
    public function product_detail($id) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_product WHERE id = $id");
        return $query->fetch();
    }
    //sản phẩm liên quan
    public function product_related($category_id, $id) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT tbl_product.name as 'product_name',img,price, tbl_product.id as 'product_id' FROM tbl_product 
        WHERE  tbl_product.category_id = $category_id AND tbl_product.id NOT IN ('$id') ");
        return $query->fetchAll();
    }
    //lấy category_id trong tbl_product qua id
    public function id_category($id) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_product WHERE tbl_product.id=$id");
        
        return $query->fetch();   
    }
}
?>