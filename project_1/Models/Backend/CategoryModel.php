<?php
    trait CategoryModel {

        public function all($start, $limit) {
            $conn = Connection::getInstance();
            $query = $conn->query("SELECT * FROM tbl_category LIMIT $start, $limit ");
            $result = $query->fetchAll();
            return $result;         
        }
        
        public function insert($name) {

            $conn = Connection::getInstance();
            $query= $conn->prepare("INSERT INTO tbl_category ( name) VALUE (:name)");
            $query->execute(array('name'=>$name));
            
            
        }
        public function editUser($id) {
            $conn = Connection::getInstance(); 
            $query = $conn->prepare("SELECT * FROM tbl_category WHERE id =:id");
            $query->execute(array('id'=>$id));
            return $query->fetch();
        }

        public function deleteUser($id) {
            $conn = Connection::getInstance(); 
            $query = $conn->prepare("DELETE FROM tbl_category WHERE id=:id");
            $query->execute(array('id'=>$id));

        }

        public function updateUser($id, $name) {
            $conn = Connection::getInstance(); 
            $query = $conn->prepare("UPDATE tbl_category SET name=:name WHERE  id=:id");
            $query->execute(array('id'=>$id,'name'=>$name));
        }

        public function totalRecord() {
            $conn = Connection::getInstance(); 
            $query = $conn->query("SELECT id FROM tbl_category");
            return $query->rowCount();
        }


    }
?>