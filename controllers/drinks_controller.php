<?php

include_once("controllers/base_controller.php");
require_once("model/drinks.php");

class DrinksController extends BaseController{
    public function index() {
        $drink = Drinks::all();
        $viewData = array("drinks" => $drink);

        $this->render('drinks','index', $viewData);
    }
}

?>