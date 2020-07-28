<?php

use App\Controller\KidController;

require __DIR__ . "/vendor/autoload.php";
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
$kidController = new KidController();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    switch ($page) {
        case 'list-kid':
            $kidController->viewKid();
            break;
        default:
            $kidController->viewKid();
    }
    ?>
</body>

</html>