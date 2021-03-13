<?php
require_once("controllers/base_controller.php");
require_once("model/user.php");

class AuthController extends BaseController {
    protected function getFolder() {
        return 'auth';
    }

    function logIn() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->submitLogin();
        }else {
            $this->showLoginPage();
        }
    }
    function logOut() {
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            //xoá thông tin đăng nhập khỏi session
            unset($_SESSION["auth"]);

            header("Location:?controller=auth&action=login");
        }
    }

    protected function submitLogin() {

        //Lấy thông tin từ form
        $email = $_POST["email"];
        $password = $_POST["password"];

        //Tìm user với thông tin đưa vào
        $user = User::findUser($email,$password);

        //nếu tồn tai thì đăng nhập
        if($user) {

            //lưu thông tin người dùng đã đăng nhập
            $_SESSION["auth"] = $user;
            header("Location:?controller=home&action=welcome");
        }else {
            $_SESSION["invalid_credentials"] = "Email hoặc mật khẩu không đúng!";
            header("Location:?controller=auth&action=login");
        }

        //nếu không -> login thất bại
        // echo " Email : $email | password : $password";
    }

    protected function showLoginPage() {

        //kiểm tra đăng nhập? - điều hướng về welcome
        if(isset($_SESSION["auth"])) {
            header("Location:?controller=home&action=welcome");
        }

        $this->render('auth','login',[],'auth-layout');
    }
}