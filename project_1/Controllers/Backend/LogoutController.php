<?php
class LogoutController {
    public function index() {
        session_destroy();

        header("location:index.php?area=backend");
    }
}
?>