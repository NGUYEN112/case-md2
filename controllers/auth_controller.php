<?php
require_once("controllers/base_controller.php");
require_once("model/user.php");

class AuthController extends BaseController
{
    protected function getFolder()
    {
        return 'auth';
    }

    function logIn()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->submitLogin();
        } else {
            $this->showLoginPage();
        }
    }
    function logOut()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //xoá thông tin đăng nhập khỏi session
            unset($_SESSION["auth"]);

            header("Location:?controller=auth&action=login");
        }
    }

    function register()
    { {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $this->submitRegist();
            } else {
                $this->showRegistPage();
            }
        }
    }

    protected function submitRegist()
    {
        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $rate = $_POST["rate"];

        //khoi tao doi tuong product
        $user = new User();
        $user->full_name = $full_name;
        $user->email = $email;
        $user->password = $password;
        $user->rate = $rate;

        try {
            $storedSuccesful = $user->saveUser();
            if ($storedSuccesful) {
                $_SESSION["message"] = "Bạn đã đăng kí thành công!";
            }
            header("Location:?controller=auth&action=login");
        }catch (Exception $e){
            $_SESSION["failmessage"] = "Có lỗi phát sinh mời đăng ký lại!";
            $this->showRegistPage();
        }
    }

    protected function showRegistPage()
    {
        $this->render('auth', 'register', [], 'auth-layout');
    }

    protected function submitLogin()
    {

        //Lấy thông tin từ form
        $email = $_POST["email"];
        $password = $_POST["password"];

        //Tìm user với thông tin đưa vào
        $user = User::findUser($email, $password);

        //nếu tồn tai thì đăng nhập
        if ($user) {
            $_SESSION["auth"] = $user;
            // $rate = $_GET["rate"];
            if ($user->rate == 0) {
                $_SESSION["admin"] = true;
                header("Location:?controller=admin&action=dashboard");
            } else {
                $_SESSION["admin"] = false;
                header("Location:?controller=home&action=welcome");
                //lưu thông tin người dùng đã đăng nhập
            }
        } else {
            $_SESSION["invalid_credentials"] = "Email hoặc mật khẩu không đúng!";
            header("Location:?controller=auth&action=login");
        }

        //nếu không -> login thất bại
        // echo " Email : $email | password : $password";
    }

    protected function showLoginPage()
    {

        //kiểm tra đăng nhập? - điều hướng về welcome
        if (isset($_SESSION["auth"])) {
            header("Location:?controller=home&action=welcome");
        }

        $this->render('auth', 'login', [], 'auth-layout');
    }
}
