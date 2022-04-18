<?php
include 'Models/Backend/CartModel.php';
class CartController extends Controller {
    use CartModel;

    public function index() {
        $limit = 2;
        $page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? ($_GET['page'] - 1): null;
        $start = $page * $limit;
        
        $totalRecord =  $this->totalRecord();
        $a = ceil($totalRecord / $limit);

        $joinCart = $this->joinCart($start,$limit);
        // echo '<pre>';
        // print_r($joinCart);
        // echo '</pre>';
        $this->renderHTML('Views/Backend/CartView.php',array('joinCart'=>$joinCart,'a'=>$a));
    }

    public function donHang() {
        $id = $_GET['id'];
        $joinProduct = $this->joinProduct($id);
        //  echo '<pre>';
        // print_r($joinProduct);
        // echo '</pre>';
        $this->renderHTML('Views/Backend/CartDetailView.php',array('joinProduct'=>$joinProduct,'id'=>$id));
    } 

    public function xacNhan() {
        $id = $_GET['id'];
        $this->updateCatr($id);
        header("location:index.php?area=backend&controller=Cart");
    } 
}