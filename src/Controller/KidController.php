<?php

namespace App\Controller;

use App\Model\KidManager;
use App\Model\Kid;

class KidController
{
    private $kidManager;
    function __construct()
    {
        $this->kidManager = new KidManager();
    }
    function viewKid()
    {
        $kids = $this->kidManager->getAll();
        include_once('src/View/tbl_kids/list-kid.php');
    }
    function addKid()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
            include_once('src/View/tbl_kids/add-kid.php');
        else {
            $kidName = $_REQUEST['kid_name'];
            $age = $_REQUEST['age'];
            $address = $_REQUEST['address'];
            $kid = new Kid($kidName, $age, $address);
            $this->kidManager->add($kid);
            header('location:index.php?page=list-kid');
        }
    }
    function updateKid()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $kid = $this->kidManager->getKidById($id);
            include_once('src/View/tbl_kids/update-kid.php');
        } else {
            $id = $_REQUEST['id'];
            $kidName = $_REQUEST['kid_name'];
            $age = $_REQUEST['age'];
            $address = $_REQUEST['address'];
            $kid = new Kid($kidName, $age, $address);
            $kid->setId($id);
            $this->kidManager->update($kid);
            header('location:index.php?page=list-kid');
        }
    }
    function deleteKid()
    {
        $id = $_REQUEST['id'];
        $this->kidManager->delete($id);
        header('location:index.php?page=list-kid');
    }
}
