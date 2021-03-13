<?php

    class User {
    public $id;
    public $full_name;
    public $email;
    private $password;
    public $last_login_at;

        static function findUser($email,$password) {
            $query = "SELECT * FROM users WHERE email = ? AND password = ?";

            $smpt = Dbh::getInstance()->prepare($query);
            $smpt->execute([$email,$password]);

            //mang liên kết
            $rawdata = $smpt->fetch();
            //kiem tra kieu dữ liệu của rawdata
            if(!$rawdata) {
                return null;
            }

            $user = New User();
            $user->id = $rawdata["id"];
            $user->full_name = $rawdata["full_name"];
            $user->email = $rawdata["email"];
            $user->password = $rawdata["password"];
            $user->last_login_at = $rawdata["last_login_at"];

            return $user;
        }

    //     static function storeAuthUser($user) {
    //         $_SESSION[AUTH_KEY] = serialize($user);
    //     }

    //     static function getAuthUser() {
    //         return isset($_SESSION[AUTH_KEY] ?? null;
    // }
}
