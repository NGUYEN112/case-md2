<?php
require_once("controllers/base_controller.php");

class ErrorController extends BaseController
{

    public function page()
    {
        $this->render('error','page', [], 'error_layout');
    }
}
