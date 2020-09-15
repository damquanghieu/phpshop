<div class="row">
    <div class="col-md-8">
        <div class="conten-add">
            <div class="title-add">
                <h2>Add product</h2>
            </div>
            <form class="form-group" action="index.php?controller=product&action=store" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" id="name">

                <label for="image">Image:</label>
                <input class="form-control" type="file" name="image" id="image">
                <input type="hidden" name="image" >

                <label for="image_details">Image_Details</label>
                <input class="form-control" type="file" multiple="multiple" name="image_details[]" id="image_details">

                <label for="content">Content:</label>
                <input class="form-control" type="text" name="content" id="content">

                <label for="category_id">Category_id:</label>
                <input class="form-control" type="text" value="1" name="category_id" id="category_id">

                <button class="btn btn-sm btn-add" type="submit">Add</button>
            </form>

        </div>

    </div>
</div>