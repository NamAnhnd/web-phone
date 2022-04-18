<?php
include "Models/Backend/ProductModel.php";
class ProductController extends Controller{
    use ProductModel;

    public function index() {
        $limit = 5;
        $total = $this->rowcount();

        $page = ceil($total / $limit);
        
        $p = (isset($_GET['page']) && is_numeric($_GET['page'])) ? ($_GET['page'] -1 ) :0;

        $start = $p * $limit;
        

        


        $result = $this->all_Product($start, $limit);
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';
        $category = $this->all_category();

        $formAction = "index.php?area=Backend&controller=Product&action=add";

        
        $this->renderHTML('Views/Backend/ProductView.php',array('result'=>$result,'formAction'=>$formAction,'category'=>$category,'page'=>$page));
    }

    public function add() {
        $result = $this->all_category();
        $this->renderHTML('Views/Backend/AddProductView.php', array('result'=>$result));

        // $this->add_Product($name,$content,$descripition,$product_hot,$price);
    }

    public function doAdd() {
        $name = $_POST['name'];
        $content = $_POST['content'];
        $descripition = $_POST['descripition'];
        $product_hot = $_POST['product_hot'];
        $price = $_POST['price'];
        $id = $_POST['category_id'];
        $file= $_FILES['img'];
        echo '<pre>';
         print_r($file);
         echo '</pre>';
        
        $allow_size = 10 ;//10 MB

        $fileName = $_FILES['img']['name']; 
        $new = '';
        foreach($fileName as $key => $item) {
            //ẽplode chuyển chuỗi thành mảng
            $arr = explode('.',$item);
            //lấy phần tử cuối của mảng
            $ext = end($arr);
            $new_file = uniqid().'.'.$ext;

            $allow_ext = ['png','jpg','jpeg','ppt'];

            $size = $file['size'][$key];

            if(in_array($ext,$allow_ext)) {
                $size = $size/1024/1024;
                if($size <= $allow_size) {
                    $uploads = move_uploaded_file($_FILES['img']['tmp_name'][$key] , 'Assets/Backend/uploads/'.$new_file);

                    if($uploads) {
                        $new .= $new_file.',';
                    }
                    
                }
               
            }
        }
        $new = trim($new,',') ;


       
        
       
        
        

        $result = $this->add_Product($name,$content,$descripition,$product_hot,$price,$id,$new);
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        if(empty($_SESSION['check'])) {
            $_SESSION['check'] = "Thêm sản phẩm thành công";
        }
        
        header("Location:index.php?area=Backend&controller=Product");
        
    }
    public function delete() {
        $id = $_GET['id'];
        $this->delete_product($id);

        if(empty($_SESSION['check'])) {
            $_SESSION['check'] = "Xoá sản phẩm thành công";
        }

        header("Location:index.php?area=Backend&controller=Product");

    }
    public function edit() {
        $id = $_GET['id'];
        $result = $this->edit_product($id);
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';
        $category = $this->all_category();

        $formAction = "index.php?area=Backend&controller=Product&action=update&id=$id";
        $this->renderHTML('Views/Backend/EditProductView.php',array('result'=>$result,'formAction'=>$formAction,'category'=>$category));
    }

    public function update() {
        $id = (isset($_GET['id']) && is_numeric($_GET['id'])) ? $_GET['id'] : 0;
        $name = $_POST['name'];
        $content = $_POST['content'];
        $descripition = $_POST['descripition'];
        $product_hot = $_POST['product_hot'];
        $price = $_POST['price'];
        $category_id = $_POST['category_id'];
        


        $this->update_product($id,$name,$content,$descripition,$product_hot,$price,$category_id);



        $file = $_FILES['img']['name'];
        // var_dump($file);
        $fileName = '';
        foreach($file as $a) {
            $fileName  .= $a;
        }

        if($fileName != '') {
            $img_succ = $this->edit_product($id);
            $allow_img = $img_succ->img;

            $img = explode(',',$allow_img);
        //      echo '<pre>';
        // print_r($img);
        // echo '</pre>';
            foreach($img as  $item) {
                if(!empty($item) && file_exists("Assets/Backend/uploads/".$item)) {
                    
                    unlink("Assets/Backend/uploads/".$item);  
                }
               
                
              
            }
            
            
            $allow_size = 10 ;//10 MB

            $fileName = $_FILES['img']['name']; 
            $new = '';
            foreach($fileName as $key => $item) {
                //ẽplode chuyển chuỗi thành mảng
                $arr = explode('.',$item);
                //lấy phần tử cuối của mảng
                $ext = end($arr);
                $new_file = uniqid().'.'.$ext;
    
                $allow_ext = ['png','jpg','jpeg','ppt'];
    
                $size = $_FILES['img']['size'][$key];
    
                if(in_array($ext,$allow_ext)) {
                    $size = $size/1024/1024;
                    if($size <= $allow_size) {
                        $uploads = move_uploaded_file($_FILES['img']['tmp_name'][$key] , 'Assets/Backend/uploads/'.$new_file);
    
                        if($uploads) {
                            $new .= $new_file.',';
                        }
                        
                    }
                   
                }
            }
            $new = trim($new,',') ;
            $this->upload_img($new,$id);
            
            
        }
       
        if(empty($_SESSION['check'])) {
            $_SESSION['check'] = "Cập nhập sản phẩm thành công";
        } 
        

        header("Location:index.php?area=Backend&controller=Product");
    }

   



}
?>