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
                <h3>Demo Reflected XSS</h3>
            </div>
        </div>
        <div style="margin-top: 60px; margin-bottom:70px;" class="seach">
          <form action="" method="get">
              <input class="form-control" type="text" name="seach">
              <button class="btn btn-primary">Seach</button>
          </form>
        </div>

    </div>
</div>