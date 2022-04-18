<?php
include "Models/Backend/PostModel.php";

class PostController extends Controller {
    use PostModel;

    public function index() {
        
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';

        $limit = 5;
        $total_limit = $this->rowcount();
        // echo $total_limit;
        $number = ceil($total_limit /$limit);

        $page = ((!empty($_GET['page']) && is_numeric($_GET['page'])) ? ($_GET['page']- 1) : 0 );

        $start = $limit * $page;
        // echo $number;
        
        
        $result = $this->all_Post($start,$limit);
        $formAction = "index.php?area=Backend&controller=Post&action=add";
        $this->renderHTML('Views/Backend/PostView.php',array('result'=>$result,'formAction'=>$formAction,'number'=>$number));
    }

    //Thêm 
    public function add() {
        $formAction = "index.php?area=Backend&controller=Post&action=doAdd";
        $this->renderHTML('Views/Backend/AddPostView.php',array('formAction'=>$formAction));
    }
    public function doAdd() {
        $name = $_POST['name'];
        $content = $_POST['content'];

        $file = $_FILES['img'];
        echo '<pre>';
        print_r($file);
        echo '</pre>';
        
        $file = $_FILES['img']['name'];
        $allow_Mb = 8 ;//cho phép truy cập dưới 8MB;
        $file = explode('.',$file);
        
        echo $ext = end($file);

        echo $new_file = md5(uniqid()).'.'.$ext;
        
        //Kiểm tra đuôi ảnh
        $allow_img = ['png','jpg','jpeg'];
        if(in_array($ext , $allow_img)) {
            echo $size = $_FILES['img']['size'] /1024/1024 ;
            if($size <= $allow_Mb ) {
                move_uploaded_file($_FILES['img']['tmp_name'] , "Assets/Backend/uploads/".$new_file);
            }
            
        }
        $this->add_Post($name,$content,$new_file);

        $_SESSION['check'] = "Thêm tin tức thành công";

        header("Location:index.php?area=Backend&controller=Post");
    }

    //Xoá
    public function delete() {
        $id = $_GET['id'];
        // echo $id;
        $this->delete_Post($id);

        $_SESSION['check'] = "Xoá tức thành công";

        header("Location:index.php?area=Backend&controller=Post");
    }

    //edit
    public function edit() {
        $id = $_GET['id'];
        $result = $this->edit_Post($id);

        $formAction = "index.php?area=Backend&controller=Post&action=update&id=$id";
        $this->renderHTML('Views/Backend/EditPostView.php',array('formAction'=>$formAction,'result'=>$result));
    }

    public function update() {
        $name = $_POST['name'];
        $content = $_POST['content'];
        $id = $_GET['id'];

        $file = $_FILES['img']['name'];
        echo '<pre>';
        print_r($file);
        echo '</pre>';

        $this->update_post($name,$content,$id);
        

        if($file != "") {

            $result= $this->edit_Post($id);
            // echo $result->img;
            if(!empty($result->img) && file_exists("Assets/Backend/uploads/".$result->img)) {
                unlink("Assets/Backend/uploads/".$result->img);
            }
            

            $file = $_FILES['img']['name'];
            
            $file = explode('.',$file);
            
            $ext = end($file);

            $new_file = md5(uniqid()).'.'.$ext;
            
            $allow_img = ['png','jpg','jpeg'];

            if(in_array($ext,$allow_img)) {
                move_uploaded_file($_FILES['img']['tmp_name'],'Assets/Backend/uploads/'.$new_file);
            }
            $this->update_img($new_file,$id);
        }

    
        
        $_SESSION['check'] = "Cập nhập tin tức thành công";

        header("Location:index.php?area=Backend&controller=Post");
    }
    
}
?>