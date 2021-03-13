<?php
abstract class BaseController {
    protected function render($controller, $action ,$viewData = [], $file_layout_name = "layout") {
    
        $view_file = "views/$controller/$action.php";

        if (is_file($view_file)) {
            
            extract($viewData);

            ob_start();
            include_once($view_file);
            $content = ob_get_clean();


            include_once("views/shared/".$file_layout_name.".php");
        }
}
}