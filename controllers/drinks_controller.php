<?php

include_once("controllers/base_controller.php");
require_once("model/drinks.php");

class DrinksController extends BaseController{
    public function index() {
        $data = Drinks::all();
        $viewData = array("drinks" => $data);

        $this->render('drinks','index', $viewData);
    }
}

?>