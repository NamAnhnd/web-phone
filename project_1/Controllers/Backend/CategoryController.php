<?php
include 'Models/Backend/CategoryModel.php';

class CategoryController extends Controller {
    use CategoryModel;

    public function __construct(){
        //xac thuc dang nhap
        $this->authentication();

    }
    public function index() {

        //số bẩn ghi trên 1 trang
        $limit = 4;
        //Tổng số abnr ghi
        $totalRecord = $this->totalRecord();
        //tính số trang 
        $page = ceil($totalRecord / $limit);

        $id = (isset($_GET['id']) && is_numeric($_GET['id']) ? ($_GET['id']-1) : 0 );
        //trang bắt đầu
        $start = $id * $limit;
        
        $data = $this->all($start, $limit);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // foreach($data as $a) 
        //    echo  $a->name.'<br>';




        $this->renderHTML('Views/Backend/CategoryView.php',array("data"=>$data,"page"=>$page));
    }

    public function add() {
        $formAction = "index.php?area=Backend&controller=Category&action=doAdd";
        $this->renderHTML('Views/Backend/AddCategoryView.php',array('formAction'=> $formAction));
    }

    public function doAdd() {
        if(isset($_POST['add-submit'])) {
            $data = $_POST['name'];
            $this->insert($data);  
        }

        if(empty($_SESSION['conect'])) {
            $_SESSION['conect'] = "Thêm sản phẩm thành công";
        }
        

        header('Location:index.php?area=Backend&controller=Category');
        
    }
    public function delete() {
        $id = (isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 0);

        $this->deleteUser($id);
        if(empty($_SESSION['conect'])) {
            $_SESSION['conect'] = "Xoá sản phẩm thành công";
        }
        header('Location:index.php?area=Backend&controller=Category');
    }
    public function edit() {
        $id = (isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 0);

        $result = $this->editUser($id);

       

        $formAction = "index.php?area=Backend&controller=Category&action=update&id=$id";
        $this->renderHTML('Views/Backend/EditCategoryView.php',array('formAction'=> $formAction, 'result'=>$result));
    }
    public function update() {
        $id = (isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 0);
        // echo $id;
        $name = $_POST['name'];

        $this->updateUser($id,$name);
        
        if(empty($_SESSION['conect'])) {
            $_SESSION['conect'] = "Cập nhật sản phẩm thành công";
        }

        header('Location:index.php?area=Backend&controller=Category');
    }
}
?>