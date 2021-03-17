<?php

//khai báo sử dụng sesson
session_start();
// var_dump($_SESSION["auth"]);

$controller = $_GET["controller"] ?? null;
$action = $_GET["action"] ?? null;

//kiểm tra đã đăng nhập hay chưa?
if(!isset($_SESSION["auth"]) && $controller != "auth"){
    header("Location:?controller=auth&action=login");
}

if(isset($_SESSION["auth"])){
if(($_SESSION["admin"] !=true) && $controller == "admin") {
    header('Location:?controller=home&action=welcome');
}
}
//ham kiem tra duong dan
function showActive($controllerName, $actionName=null) {
    global $controller;
    if($controller == $controllerName){
        echo "active";
    }
}

require_once("dbh.php");
//nhúng file controller
require_once ("controllers/$controller"."_controller.php");

$controllerName = ucwords("$controller")."Controller";

//khởi tạo controller
$controllerInstance = new $controllerName;

//gọi action
$controllerInstance->$action();
?>