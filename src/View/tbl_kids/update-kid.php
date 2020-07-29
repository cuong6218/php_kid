<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="exampleInputKidName1">Kid Name</label>
            <input type="kid_name" class="form-control" id="exampleInputKidName1" value="<?php echo $kid['kid_name']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputAge1">Age</label>
            <input type="age" class="form-control" id="exampleInputAge1" value="<?php echo $kid['age']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputAddress1">Address</label>
            <input type="address" class="form-control" id="exampleInputAddress1" value="<?php echo $kid['address']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>