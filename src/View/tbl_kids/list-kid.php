<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a class="btn btn-secondary" href="index.php?page=add-kid">Add Kid</a>
            </div>
            <div class="col-md-3">
                <form method="post" action="index.php?page=search-kid">
                    <input class="form-control" type="text" name="keyword_name" placeholder="keyword" />
                    <button class="btn btn-secondary" type="submit">Search</button>
                </form>
            </div>
        </div>
        <h1>List Kid</h1>
        <table class="table table-striped text-center">
            <tr class="bg-success">
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
            <?php if (empty($kids)) : ?>
                <tr>
                    <td>No data</td>
                </tr>
            <?php else : ?>
                <?php foreach ($kids as $key => $kid) : ?>
                    <tr>
                        <td><?php echo ++$key; ?></td>
                        <td><?php echo $kid->getKidName(); ?></td>
                        <td><?php echo $kid->getAge(); ?></td>
                        <td><?php echo $kid->getAddress(); ?></td>
                        <td><a href="index.php?page=update-kid&id=<?php echo $kid->getId(); ?>"><i class="fas fa-user-edit"></i>&nbsp;</i>Update</a></td>
                        <td><a href="index.php?page=delete-kid&id=<?php echo $kid->getId(); ?>"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                </svg>&nbsp;Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</body>

</html>