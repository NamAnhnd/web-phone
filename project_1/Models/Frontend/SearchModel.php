<?php
trait SearchModel {
    public function search($search_post) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_product WHERE tbl_product.name LIKE '%$search_post%'");
        return $query->fetchAll();
    }
    public function category_name($id) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_category WHERE id =$id");
        return $query->fetch();
    }
}