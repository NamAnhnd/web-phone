<?php
include "Models/Frontend/CartModel.php";
Class CartController extends Controller{
    use CartModel;
    
    public function __construct(){
        if(isset($_SESSION["cart"]) == false)
            $_SESSION["cart"] = array();

    }
    public function index() {
       
        $this->renderHTML("Views/Frontend/CartView.php");
    }
    public function add(){
        $id= isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
        //goij hafm cart_add trong model de them phan tu vao gio hang
        $this->cartAdd($id);
        // echo '<pre>';
        // print_r($_SESSION['cart']);
        // echo '</pre>';
        // unset($_SESSION['cart']);
        header("location:index.php?controller=Cart");

        
    }
    public function delete() {
        $id = (isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0);
        $this->cartDelete($id);
        header("location:index.php?controller=Cart");
    }

    public function update() {
        //  echo '<pre>';
        // print_r($_SESSION['cart']);
        // echo '</pre>';
        foreach( $_SESSION['cart'] as $product) {
            $qty = "product_".$product['id'];
            $number =  $_POST[$qty];

            if($number == 0) {
                unset( $_SESSION['cart'][$product['id']]);
            }
            else {
                $_SESSION['cart'][$product['id']]['number'] =  $number;
            }
            
        }
        header("location:index.php?controller=Cart");
    }
    public function allDelete() {
        unset( $_SESSION['cart']);
        header("location:index.php?controller=Cart");
    }
    public function in() {
        $this->renderHTML("Views/Frontend/CheckOutView.php");
    }
    public function checkOut() {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $content = $_POST['content'];
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        $conn = Connection::getInstance();
        $query = $conn->prepare("INSERT  INTO tbl_customer(fullname,email,address,phone,content) VALUES(:name,:email,:address,:phone,:content) ");
        $query->execute(array('name'=>$name,'email'=>$email,'address'=>$address,'phone'=>$phone,'content'=>$content));
        $customer_id = $conn->lastInsertId();


        $query = $conn->prepare("INSERT INTO tbl_order(customer_id,create_at) VALUES(:customer_id,now())");
        $query->execute(array('customer_id'=>$customer_id));
        //lấy id vừa mới insert
        $order_id = $conn->lastInsertId();

        foreach($_SESSION["cart"] as $product) {
            $query = $conn->prepare("INSERT INTO tbl_order_detail (order_id,product_id,price,number) VALUES(:order_id,:product_id,:price,:number)");
            $query->execute(array('order_id'=>$order_id,'product_id'=>$product['id'],'price'=>$product['price'],'number'=>$product['number']));
        }
        unset($_SESSION['cart']);
        $_SESSION['pay'] = "Thanh toán thành công";
        header("location:index.php?controller=Cart");
    }
    
}