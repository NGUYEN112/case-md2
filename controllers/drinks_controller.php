<?php

include_once("controllers/base_controller.php");

class DrinksController extends BaseController{
    public function index() {
        $this->render('drinks','index');
    }
}

?>