<div class="row">
    <div class="col-md-12">
        <div class="content-table">
            <div class="title-table">
                <span>Products</span>
                <!-- <div class="button">
                    <a href="index.php?controller=product&action=create"><button
                            class="btn  btn-sm btn-add">Add</button></a>
                </div> -->
            </div>
            <div style="margin-top: 60px; margin-bottom:70px;" class="seach">
                <form action="" method="get">
                    <input class="form-control" type="text" name="seach">
                    <button class="btn btn-primary">Seach</button>
                </form>
                <?php if (isset($_GET['seach'])) {
                    echo "<span style='color:red;'>Kết quả tìm kiếm: </span>";
                    echo $_GET['seach'];
                } ?>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Content</th>
                        <th>Category_id</th>
                        <th>Create_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product) {?>
                    <tr>
                        <td><?php echo $product['id'] ?></td>
                        <td><?php echo $product['name'] ?></td>
                        <td><?php echo $product['image'] ?></td>
                        <td><?php echo $product['content'] ?></td>
                        <td><?php echo $product['category_id'] ?></td>
                        <td><?php echo $product['created_at'] ?></td>
                        <td>
                            <a href="index.php?controller=product&action=edit&id=<?php echo $product['id'] ?>"><i
                                    class="fas fa-edit"></i></a>
                            <a href=""><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php }?>


                </tbody>

            </table>
            <div style="margin-top: 20px;" class="paninate">

            </div>

        </div>

    </div>
</div>