<?php
trait CartModel {
    public function joinCart($start,$limit) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT fullname,phone,address,email,create_at,status,order_id FROM tbl_customer,tbl_order 
        WHERE tbl_customer.customer_id = tbl_order.customer_id LIMIT $start,$limit");
        return $query->fetchAll();
    }

    public function totalRecord() {
        $conn = Connection::getInstance(); 
        $query = $conn->query("SELECT * FROM tbl_category");
        return $query->rowCount();
    }
    public function joinProduct($id) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT tbl_product.name,tbl_product.img,tbl_order_detail.price,tbl_order_detail.number,tbl_order.order_id FROM tbl_product,tbl_order_detail,tbl_order WHERE tbl_product.id = tbl_order_detail.product_id AND tbl_order.order_id=tbl_order_detail.order_id AND tbl_order_detail.order_id=$id");
        return $query->fetchAll();
    }
    public function updateCatr($id) {
        $conn = Connection::getInstance(); 
        $conn->query("UPDATE tbl_order SET status = 1 WHERE order_id = $id");
    }
}