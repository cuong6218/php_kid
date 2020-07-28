<a href="index.php?page=add-kid">Add Kid</a>
<form method="post" action="index.php?page=search-kid">
    <input type="text" name="keyword_name" placeholder="keyword" />
    <button type="submit">Search</button>
</form>
<h1>List Kid</h1>
<table>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th colspan="2">Action</th>
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
                <td><a href="index.php?page=update-kid&id=<?php echo $kid->getId(); ?>">Update</a></td>
                <td><a href="index.php?page=delete-kid&id=<?php echo $kid->getId(); ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>