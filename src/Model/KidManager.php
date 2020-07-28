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
}
