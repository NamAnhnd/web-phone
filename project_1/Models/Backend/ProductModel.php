<?php

trait ProductModel {
    public function rowcount() {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_product ");
        return $query->rowcount();
    }

    public function all_Product($start, $limit) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_product ORDER BY id DESC LIMIT $start, $limit");
        $result = $query->fetchAll();
        return $result;
    }

    public function add_Product($name,$content,$descripition,$product_hot,$price,$id,$img) {
        $conn = Connection::getInstance();
        $query = $conn->prepare("INSERT INTO tbl_product (name,content,descripition,product_hot,price,category_id,img)
                        VALUES (:name,:content,:descripition,:product_hot,:price,:category_id,:img )");
        $query->execute(array('name'=>$name,'content'=>$content,'descripition'=>$descripition,
                            'product_hot'=>$product_hot,'price'=>$price,'category_id'=>$id,'img'=>$img));     
                                     
    }

    public function all_category() {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_category ");
        $result = $query->fetchAll();
        return $result;         
    }

    public function delete_product($id) {
        $conn = Connection::getInstance();
        $query= $conn->prepare("DELETE FROM tbl_product WHERE id = :id");
        $result = $query->execute(array('id'=>$id));
    }

    public function edit_product($id) {
        $conn = Connection::getInstance();
        $query = $conn->prepare('SELECT * FROM tbl_product WHERE id=:id');
        $query->execute(array('id'=>$id));
        return $query->fetch();
        
        // $result = $query->execute(array('id'=>$id));
    }
    public function update_product($id,$name,$content,$descripition,$product_hot,$price,$category_id) {
        $conn = Connection::getInstance();
        $query = $conn->prepare("UPDATE tbl_product SET name=:name,content=:content,descripition=:descripition,
        product_hot=:product_hot,price=:price,category_id=:category_id  WHERE id=:id");
        $query->execute(array('id'=>$id,'name'=>$name,'content'=>$content,'descripition'=>$descripition,
        'product_hot'=>$product_hot,'price'=>$price,'category_id'=>$category_id));
    }
    public function upload_img($img,$id) {
        $conn = Connection::getInstance();
        $query = $conn->prepare("update tbl_product set img=:img where id=:id");
		$query->execute(array("img"=>$img,"id"=>$id));
    }

    
}
?>