<?php

include_once("controllers/base_controller.php");

class HomeController extends BaseController
{
    public function welcome()
    {
        $this->render('home','welcome');
    }
}
