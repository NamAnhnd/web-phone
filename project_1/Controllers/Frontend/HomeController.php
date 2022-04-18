<?php 
include "Models/Frontend/HomeModel.php";
class HomeController extends Controller  {
    use HomeModel;
    public function index() {
        $result = $this->hot_product();
        // echo "<pre>";
        // var_dump($result);
        // echo "</pre>";
        $new_product = $this->new_product();

        $this->renderHTML("Views/Frontend/HomeView.php",array('result'=>$result,'new_product'=>$new_product));
        
    }
}
?>