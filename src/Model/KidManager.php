<?php

namespace App\Model;

class KidManager
{
    private $database;
    function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }
    function getAll()
    {
        $sql = "SELECT * FROM `tbl_kids`";
        $statement = $this->database->query($sql);
        $data = $statement->fetchAll();
        $kids = [];
        foreach ($data as $person) {
            $kid = new Kid($person['kid_name'], $person['age'], $person['address']);
            $kid->setId($person['id']);
            array_push($kids, $kid);
        }
        return $kids;
    }
    function add($kid)
    {
        $sql = "INSERT INTO `tbl_kids` (`kid_name`, `age`, `address`) VALUES (:kid_name, :age, :address)";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':kid_name', $kid->getKidName());
        $statement->bindParam(':age', $kid->getAge());
        $statement->bindParam(':address', $kid->getAddress());
        $statement->execute();
    }
}
