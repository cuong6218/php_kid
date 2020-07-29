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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    switch ($page) {
        case 'list-kid':
            $kidController->viewKid();
            break;
        case 'add-kid':
            $kidController->addKid();
            break;
        case 'update-kid':
            $kidController->updateKid();
            break;
        case 'delete-kid':
            $kidController->deleteKid();
            break;
        case 'search-kid':
            $kidController->searchKidName();
            break;
        default:
            $kidController->viewKid();
    }
    ?>
</body>

</html>