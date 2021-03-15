<link rel="stylesheet" href="/assets/styles/course-regist.css">
<?php
require_once("controllers/base_controller.php");
require_once("model/course.php");
class CourseController extends BaseController
{
    public function index()
    {
        $this->render('course', 'index');
    }
    public function regist()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->sendRegistCourse();
        } else {
            $this->showRegistCoursePage();
        }
        $this->render('course', 'regist');
    }

    protected function sendRegistCourse()
    {
        //lay data tu form
        $full_name = $_POST["full_name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $date_regist = date("Y-m-d");
        $type_course = $_POST["type_course"];

        //khoi tao doi tuong product
        $course = new Course();
        $course->full_name = $full_name;
        $course->phone = $phone;
        $course->email = $email;
        $course->date_regist = $date_regist;
        $course->type_course = $type_course;
        try {
            $storedSuccesful = $course->saveRegistCourse();
            if ($storedSuccesful) {
                $_SESSION["message"] = "Bạn đã đăng kí khóa thành công!";
            }
            $this->showRegistCoursePage();
        } catch (Exception $e) {
            $_SESSION["failmessage"] = "Có lỗi phát sinh vui lòng thử lại!";
            $this->showRegistCoursePage();
        }
    }

    protected function showRegistCoursePage()
    {
        $course = Course::all();
        $viewData = array("course" => $course);
        $this->render('course','regist',$viewData);
    }
}
