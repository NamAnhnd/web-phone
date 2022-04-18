<?php
include("Models/Frontend/ProductModel.php");
class ProductController extends Controller {
    use ProductModel;
    public function index() {
        $limit = 5;
        $page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? ($_GET['page']-1) :0;
        $totla_page =  $this->rowCount();
        $one = ceil($totla_page /5);
        $start = $page * $limit;
       

        $result = $this->all_Product($start,$limit);
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';
        $this->renderHTML("Views/Frontend/ProductView.php",array('result'=>$result,'one'=>$one)); 
    }
    public function product() {
        $category_id = $_GET['id'];
        // echo $id;

        $limit =5;
        $totla_page = $this->rowCount_id($category_id);
        $one = ceil($totla_page/$limit);
        
        $page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? ($_GET['page'] - 1) : 0;

        $start = $page * $limit;

       
        $result = $this->list_Product($category_id,$start,$limit);

        $category =  $this->category_name($category_id);
        

        $this->renderHTML("Views/Frontend/ListProduct.php",array('result'=>$result,'one'=>$one,'category'=>$category)); 
    }
    public function detail_product() {
        $id = $_GET['id'];
        $result = $this->product_detail($id);

        $id_category = $this->id_category($id);

        $cate_id = $id_category->category_id;
        
        $related = $this->product_related($cate_id,$id);

        $cate = $this->category_name($cate_id);
        // echo '<pre>';
        // print_r($related);
        // echo '</pre>';
        $this->renderHTML("Views/Frontend/DetailProduct.php",array('result'=>$result,'related'=>$related,'cate'=>$cate)); 
    }
  
}
?>