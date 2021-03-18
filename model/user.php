<?php

class User
{
    public $id;
    public $full_name;
    public $email;
    public $password;
    public $rate;

    static function findUser($email, $password)
    {
        $query = "SELECT * FROM users WHERE email = ? AND password = ?";

        $smpt = Dbh::getInstance()->prepare($query);
        $smpt->execute([$email, $password]);

        //mang liên kết
        $rawdata = $smpt->fetch();
        //kiem tra kieu dữ liệu của rawdata
        if (!$rawdata) {
            return null;
        }

        $user = new User();
        $user->id = $rawdata["id"];
        $user->full_name = $rawdata["full_name"];
        $user->email = $rawdata["email"];
        $user->password = $rawdata["password"];
        $user->rate = $rawdata["rate"];

        return $user;
    }

    static function all()
    {
        $sql = "SELECT * FROM users";


        $smpt = Dbh::getInstance()->prepare($sql);
        $smpt->execute();

        $rawData = $smpt->fetchAll();

        $list = [];

        foreach ($rawData as $row) {
            $entity =  new User();
            $entity->id = $row["id"];
            $entity->full_name = $row["full_name"];
            $entity->email = $row["email"];
            $entity->password = $row["password"];
            $entity->rate = $row["rate"];


            $list[] = $entity;
        }
        return $list;
    }


    //     static function storeAuthUser($user) {
    //         $_SESSION[AUTH_KEY] = serialize($user);
    //     }

    //     static function getAuthUser() {
    //         return isset($_SESSION[AUTH_KEY] ?? null;
    // }

    static function find($id)
    {
        $sql = "SELECT * FROM users WHERE id = $id";

        $smpt = Dbh::getInstance()->prepare($sql);
        $smpt->execute();

        $rawData = $smpt->fetch();

        $user = new User();
        $user->id = $rawData["id"];
        $user->full_name = $rawData["full_name"];
        $user->email = $rawData["email"];
        $user->password = $rawData["password"];
        $user->rate = $rawData["rate"];

        return $user;
    }

    public function updateUser()
    {
        $sql = "INSERT INTO users(
            id,full_name,email,password,rate   
            )   
            VALUE(?,?,?,?,?)
            ON DUPLICATE KEY UPDATE
            full_name=?,
            email=?,
            password=?,
            rate=?
        ";

    $smpt = Dbh::getInstance()->prepare($sql);
    return $smpt->execute(
        [
            $this->id,
            $this->full_name,
            $this->email,
            $this->password,
            $this->rate,

            $this->full_name,
            $this->email,
            $this->password,
            $this->rate
        ]
    );
    }

    public function saveUser()
    {
        $sql = "INSERT INTO users(
            full_name,email,password,rate 
            ) VALUE (:full_name, :email, :password,:rate)";
        $smpt = Dbh::getInstance()->prepare($sql);
        return $smpt->execute([
            "full_name" => $this->full_name,
            "email" => $this->email,
            "password" => $this->password,
            "rate" => $this->rate,
        ]);
    }
}
