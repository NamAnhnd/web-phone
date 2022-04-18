<?php
    trait CartModel {
        public function cartAdd($id) {
            if(isset($_SESSION['cart'][$id])){
                $_SESSION['cart'][$id]['number']++; 
            }else {
                $conn = Connection::getInstance();
                $query = $conn->prepare("SELECT * FROM tbl_product WHERE id=$id");
                $query->execute(['id'=>$id]);
                $product = $query->fetch();

                $anh = explode(',',$product->img);

                $_SESSION['cart'][$id] =  array(
                    'id' =>$id,
                    'name'=>$product->name,
                    'number'=>1,
                    'img'=>$anh[0],
                    'price'=>$product->price
                );
            }
        }
        public function cartDelete($id) {
            unset($_SESSION['cart'][$id]);
        }

        public function cartTotal() {
            $total = 0;
            foreach($_SESSION['cart'] as $product) {
                $total += $product['price'] * $product['number'];
            }
            return $total;
        }

        public function cartNumber() {
            $number = 0;
            foreach($_SESSION['cart'] as $product) {
                $number += $product['number'];
            }
            return $number;
        }
    }