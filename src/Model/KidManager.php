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
        $sql = "SELECT * FROM `tbl_kids` ORDER BY `id` DESC";
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
    function update($kid)
    {
        $sql = "UPDATE `tbl_kids` SET `kid_name` = :kid_name, `age` = :age, `address` = :address WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $kid->getId());
        $statement->bindParam(':kid_name', $kid->getKidName());
        $statement->bindParam(':age', $kid->getAge());
        $statement->bindParam(':address', $kid->getAddress());
        $statement->execute();
    }
    function getKidById($id)
    {
        $sql = "SELECT * FROM `tbl_kids` WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch();
    }
    function delete($id)
    {
        $sql = "DELETE FROM `tbl_kids` WHERE `id` = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }
    function searchKidByName($keyword)
    {
        $sql = "SELECT * FROM `tbl_kids` WHERE `kid_name` LIKE :keyword";
        $statement = $this->database->prepare($sql);
        $statement->bindValue(':keyword', "%" . $keyword . "%");
        $statement->execute();
        $data = $statement->fetchAll();
        $kids = [];
        foreach ($data as $person) {
            $kid = new Kid($person['kid_name'], $person['age'], $person['address']);
            $kid->setId($person['id']);
            array_push($kids, $kid);
        }
        return $kids;
    }
}
