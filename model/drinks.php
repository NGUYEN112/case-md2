<?php
    class Drinks {
        public $id;
        public $name;
        public $image_url;
        public $price;

        static function all(){
            $sql = "SELECT * FROM drinks";

            
        $smpt = Dbh::getInstance()->prepare($sql);
        $smpt->execute();

        $rawData = $smpt->fetchAll();

        $list = [];

        foreach($rawData as $row) {
            $entity =  new Drinks();
            $entity->id = $row["id"];
            $entity->name = $row["name"];
            $entity->image_url = $row["image_url"];
            $entity->price = $row["price"];

            $list[] = $entity;
        }
        return $list;
        }
        
        static function find($id)
    {
        $sql = "SELECT * FROM drinks WHERE id = $id";

        $smpt = Dbh::getInstance()->prepare($sql);
        $smpt->execute();

        $rawData = $smpt->fetch();
        $drinks = new Drinks();
        $drinks->id = $rawData["id"];
        $drinks->name = $rawData["name"];
        $drinks->image_url = $rawData["image_url"];
        $drinks->price = $rawData["price"];

        return $drinks;
    }
    public function updateDrink()
    {
        $sql = "INSERT INTO drinks(
                id,name,image_url,price   
                )   
                VALUE(?,?,?,?)
                ON DUPLICATE KEY UPDATE
                name=?,
                image_url=?,
                price=?
            ";

        $smpt = Dbh::getInstance()->prepare($sql);
        return $smpt->execute(
            [
                $this->id,
                $this->name,
                $this->image_url,
                $this->price,

                $this->name,
                $this->image_url,
                $this->price
            ]
        );
    }
    }
