<?php
include("Models/Frontend/SearchModel.php");
class SearchController extends Controller {
    use SearchModel;

    public function index() {
        $search_post = $_POST['search'];
        if( $this->search($search_post) == true) {
           
            $search = $this->search($search_post);
            foreach($search as $category) {
                $category->category_id;
            }
            $id =  $category->category_id;
            $category_name = $this->category_name($id);
            //   echo '<pre>';
            // print_r($search);
            // echo '</pre>';
            $this->renderHTML("Views/Frontend/SearchView.php",array('search'=>$search,'category_name'=>$category_name)); 
        }else {
            header("Location:index.php");
        }
        
    
    }
}