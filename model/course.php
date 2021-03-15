<?php
    class Course {
        public $id;
        public $full_name;
        public $phone;
        public $email;
        public $date_regist;
        public $type_course;

        static function all(){
            $sql = "SELECT * FROM course";

            
        $smpt = Dbh::getInstance()->prepare($sql);
        $smpt->execute();

        $rawData = $smpt->fetchAll();

        $list = [];

        foreach($rawData as $row) {
            $entity =  new Course();
            $entity->id = $row["id"];
            $entity->fulll_name = $row["full_name"];
            $entity->phone = $row["phone"];
            $entity->email = $row["email"];
            $entity->date_regist = $row["date_regist"];
            $entity->type_course = $row["type_course"];

            $list[] = $entity;
        }
        return $list;
        }

        public function saveRegistCourse()
    {
        $sql = "INSERT INTO course(
            full_name,phone,email,date_regist,type_course   
            ) VALUE (:full_name, :phone, :email,:date_regist,:type_course)";
        $smpt = Dbh::getInstance()->prepare($sql);
        return $smpt->execute([
            "full_name" => $this->full_name,
            "phone" => $this->phone,
            "email" => $this->email,
            "date_regist" => $this->date_regist,
            "type_course" => $this->type_course
        ]);
    }
    }


?>