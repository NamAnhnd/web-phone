<?php
include "Models/Backend/LoginModel.php";
class LoginController extends Controller {
    use LoginModel;

    
    public function index() {
        $this->renderHTML("Views/Backend/LoginView.php");
    }
    public function doLogin() {
        $record = $this->modelFetch();
        
        if(isset($record->email)) {   
           
            //gan session email
            
			$_SESSION["email"] = $record->email;
        }   
        
        // $_SESSION['login'] = true;
        // unset($_SESSION["email"]);
      
        header("Location:index.php?area=Backend");
        
    }
}

?>