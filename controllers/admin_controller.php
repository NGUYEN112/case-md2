<?php

include_once("controllers/base_controller.php");
require_once("model/user.php");
require_once("model/drinks.php");
require_once("model/event.php");
require_once("model/category.php");
require_once("model/course.php");




class AdminController extends BaseController
{
    public function dashBoard()
    {
        $this->render('admin', 'dashboard', [], 'admin-layout');
    }

    public function admin() {
        $user = User::all();
        $viewData = array("users" => $user);
        $this->render('admin', 'admin', $viewData, 'admin-layout');
    }

    public function drinks()
    {
        $data = Drinks::all();
        $viewData = array("drinks" => $data);
        $this->render('admin', 'drinks', $viewData, 'admin-layout');
    }

    public function editdrinks()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->updateDrinks();
        } else {
            $this->showEditPage();
        }
    }

    public function event()
    {
        $data = Event::all();
        $category = Category::all();

        $viewData = array(
            "event" => $data,
            "categories" => $category
        );

        $this->render('admin', 'event', $viewData, 'admin-layout');
    }

    public function eventdetail()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->updateStatus();
        } else {
            $this->showDetailPage();
        }
    }

    public function course()
    {
        $course = Course::all();
        $viewData = array("course" => $course);
        $this->render('admin', 'course', $viewData, 'admin-layout');
    }

    public function user()
    {
        $user = User::all();
        $viewData = array("users" => $user);
        $this->render('admin', 'user', $viewData, 'admin-layout');
    }

    public function editUser() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->updateUser();
        } else {
            $this->showEditUserPage();
        }

    }

    protected function updateDrinks()
    {
        $id = $_GET["id"];
        $drinks = Drinks::find($id);
        $drinks->name = $_POST["name"];
        $drinks->image_url = $_POST["image_url"];
        $drinks->price = $_POST["price"];

        try {
            $storedSuccesful = $drinks->updateDrink();
            if ($storedSuccesful) {
                $_SESSION["message"] = "Sửa thành công!";
            }
            header("Location:?controller=admin&action=drinks");
        } catch (Exception $e) {
            $_SESSION["failmessage"] = "Xảy ra lỗi vui lòng nhập lại!";
            $this->showEditPage();
        }
    }

    protected function showEditPage()
    {
        $id = $_GET["id"];
        $drinks = Drinks::find($id);

        $viewData = array(
            "drinks" => $drinks
        );

        $this->render('admin', 'editdrinks', $viewData, 'admin-layout');
    }

    protected function updateStatus()
    {
        $id = $_GET["id"];
        $event = Event::find($id);
        $event->name = $_POST["name"];
        $event->category_id = $_POST["category_id"];
        $event->number_ticket = $_POST["number_ticket"];
        $event->ticket_price = $_POST["ticket_price"];
        $event->date = $_POST["date"];
        $event->start_time = $_POST["start_time"];
        $event->email = $_POST["email"];
        $event->description = $_POST["description"];
        $event->status = $_POST["status"];

        try {
        $storedSuccesful = $event->updateStatus();
        if ($storedSuccesful) {
            $_SESSION["message"] = "Duyệt sự kiện thành công!";
        }
            header("Location:?controller=admin&action=event");
        }catch(Exception $e) {
            $_SESSION["failmessage"] = "Xảy ra lỗi, thử lại !";
            $this->showDetailPage();
        }

            // $event->updateStatus();
            // header("Location:?controller=admin&action=event");
        
        // try {
        //     $storedSuccesful = $event->updateStatus($status);
        //     if ($storedSuccesful) {
        //         $_SESSION["message"] = "Duyệt sự kiện thành công";
        //     }
        //     header("Location:?controller=admin&action=event");
        // } catch (Exception $e) {
        //     $_SESSION["failmessage"] = "Xảy ra lỗi vui lòng thử lại";
        //     $this->showDetailPage();
        // }
    }

    protected function showDetailPage()
    {
        $id = $_GET["id"];

        $event = Event::find($id);
        // $categoryName = Event::findCategoryName($category_id);
        $category = Category::all();

        $viewData = array(
            "regist" => $event,
            "categories" => $category
        );


        $this->render('admin', 'eventdetail', $viewData, 'admin-layout');
    }

    protected function updateUser()
    {
        $id = $_GET["id"];
        $user = User::find($id);
        $user->full_name = $_POST["full_name"];
        $user->email = $_POST["email"];
        $user->password = $_POST["password"];
        $user->rate = $_POST["rate"];
        try {
        $storedSuccesful = $user->updateUser();
        if ($storedSuccesful) {
            $_SESSION["message"] = "Thay đổi thông tin người dùng thành công!";
        }
            header("Location:?controller=admin&action=user");
        }catch(Exception $e) {
            $_SESSION["failmessage"] = "Thao tác thất bại!";
            $this->showEditUserPage();
        }
    }

    protected function showEditUserPage()
    {
        $id = $_GET["id"];

        $user = User::find($id);
        // $categoryName = Event::findCategoryName($category_id);

        $viewData = array(
            "users" => $user
        );

        $this->render('admin', 'edituser', $viewData, 'admin-layout');
    }
}
