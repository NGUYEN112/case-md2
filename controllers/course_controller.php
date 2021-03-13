<?php 
require_once("controllers/base_controller.php");
class CourseController extends BaseController {
    public function guitar() {
        $this->render('course','guitar');
    }
    public function uku() {
        $this->render('course','uku');
    }
    public function registCource() {
        $this->render('course','regist');
    }
}