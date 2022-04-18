<?php 
trait PostModel {
    public function rowCount() {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_post ");
        // $query->execute(array('start'=>$start,'limit'=>$limit));
        return $query->rowCount();
    }
    public function Post() {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT name,content,img FROM tbl_post ORDER BY id DESC LIMIT 0,4 ");
        // $query->execute(array('start'=>$start,'limit'=>$limit));
        return $query->fetchAll();

        
    }
    public function all_Post($start,$limit) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_post ORDER BY id DESC LIMIT $start,$limit ");
        // $query->execute(array('start'=>$start,'limit'=>$limit));
        return $query->fetchAll();

        
    }
    public function content_Post($id) {
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM tbl_post WHERE id = $id");
        return $query->fetch();
    }
    

}
?>