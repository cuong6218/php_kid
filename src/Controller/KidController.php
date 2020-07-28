<?php

namespace App\Controller;

use App\Model\KidManager;

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
}
