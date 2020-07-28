<a href="index.php?page=add-kid">Add Kid</a>
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
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>