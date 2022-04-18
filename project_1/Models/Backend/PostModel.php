<?php 
trait PostModel {

    public function add_Post($name,$content,$img) {
        $conn = Connection::getInstance();
        $query = $conn->prepare("INSERT INTO tbl_post(name,content,img) VALUES (:name,:content,:img)");
        $query->execute(array('name'=>$name,'content'=>$content,'img'=>$img));
    }

    public function rowcount() {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_post  ");
        // $query->execute(array('start'=>$start,'limit'=>$limit));
        $result = $query->rowcount();
        return $result;    
    }
    public function all_Post($start,$limit) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_post ORDER BY id DESC LIMIT $start,$limit ");
        // $query->execute(array('start'=>$start,'limit'=>$limit));
        return $query->fetchAll();

        
    }
    public function delete_Post($id) {
        $conn = Connection::getInstance();
        $query = $conn->prepare("DELETE FROM tbL_post WHERE id=:id");
        $query->execute(array('id'=>$id));
    }

    public function edit_Post($id) {
        $conn = Connection::getInstance();
        $query =$conn->prepare("SELECT * FROM tbl_post WHERE id=:id");
        $query->execute(array('id'=>$id));
        return $query->fetch();
    }

    public function update_post($name,$content,$id) {
        $conn = Connection::getInstance();
        $query = $conn->prepare("UPDATE tbl_post SET name=:name, content=:content WHERE id=:id");
        $query->execute(array('name'=>$name,'content'=>$content,'id'=>$id));
        
    }
    public function update_img($img,$id) {
        $conn = Connection::getInstance();
        $query = $conn->prepare("UPDATE tbl_post SET img=:img WHERE id=:id");
        $query->execute(array('img'=>$img,'id'=>$id));
    }
    
}
?>