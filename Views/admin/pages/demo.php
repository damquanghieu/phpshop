<?php

view("admin/layouts/header");
?>
<style>
    .content {
        margin-top: 70px;
        padding: 40px;
        background-color: #fff;
        border-radius: 10px;
    }

    .image {
        width: 100%;

        object-fit: cover;
    }

    .content-right h6 {
        margin-top: 60px;
    }

    .content-right p {
        margin-top: 50px;
    }

    .content-comment {
        background-color: #f9f9f9;
        width: 90%;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 80px;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="content-table">
            <div class="title-table">
                <span>Sản phẩm |</span>
                <span>Chi tiết sản phẩm:</span>
            </div>
        </div>

        <div class="content">
            <div class="row ">
                <div class="col-md-4">
                    <div class="content-image">
                        <img class="image" src="<?php echo $porduct['image'] ?>" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-right">
                        <h2><?php echo  $porduct['name'] ?></h2>
                        <h6>500.000d</h6>
                        <p><?php echo  $porduct['content'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <h5 style="margin-top: 30px; margin-bottom:30px">Comment</h5>
                <div class="col-md-12">

                    <?php foreach ($comments as $comment) {
                        # code...
                    ?>
                    <div class="content-comment">
                        <h6><?php echo $comment['name'] ?></h6>
                        <p><?php echo $comment['comment'] ?></p>
                        <p><?php echo $comment['created_at'] ?></p>
                    </div>
                    <?php }   ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-group" action="index.php?controller=product&action=demoadd" method="post">
                        <label for="name">Tên:</label>
                        <input class="form-control" type="text" name="name">
                        <label for="name">Nội dung:</label>
                        <input class="form-control" type="text" name="comment">
                        <button class="btn btn-primary">Thêm cmt</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>