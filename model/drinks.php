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
    }
