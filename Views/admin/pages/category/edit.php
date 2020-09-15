<?php
// echo "<pre>";
// print_r($category);
// ?>
<div class="row">
    <div class="col-md-8">
        <div class="conten-add">
            <div class="title-add">
                <h2>Edit</h2>
            </div>
            <form class="form-group" action="index.php?controller=category&action=update" method="post">
                <input type="hidden" name ="id" value="<?php echo $category['id'] ?>">
                <label for="name">Name:</label>
                <input class="form-control" type="text" value="<?php echo $category['name'] ?>" name="name" id="name">

                <label for="status">Status:</label>
                <input class="form-control" type="text" value="<?php echo $category['name'] ?> " name="status" id="status">

                <button class="btn btn-sm btn-add" type="submit">Add</button>
            </form>

        </div>

    </div>
</div>