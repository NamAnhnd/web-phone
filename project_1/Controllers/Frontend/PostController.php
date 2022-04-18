<?php 
include "Models/Frontend/PostModel.php";
class PostController extends Controller  {
    use PostModel;
   
    
    public function index() {
        $limit = 5;
        $page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? ($_GET['page']-1) :0;
        $totla_page =  $this->rowCount();
        $one = ceil($totla_page /5);
        $start = $page * $limit;
        $all_post =$this->all_post($start,$limit);
        $this->renderHTML("Views/Frontend/PostView.php",array('all_post'=>$all_post,'one'=>$one)); 
        
    }
    public function content() {
        $id = $_GET['id'];
        $result = $this->content_Post($id);
        $this->renderHTML("Views/Frontend/ContentPost.php",array('result'=>$result)); 

    }
}
?>