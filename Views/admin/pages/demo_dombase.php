<?php

view("admin/layouts/header");
?>
<style>

</style>
<div class="row">
    <div class="col-md-12">
        <div class="content-table">
            <div class="title-table">
                <span>Sản phẩm |</span>
                <span>Chi tiết sản phẩm:</span>
            </div>
        </div>
        <form class="form-group" action="" method="post">
            <label for="userName">Username</label>
            <input class="form-control" type="text" name="username" id="userName">
            <label for="passWord">Password</label>
            <input class="form-control" type="text" name="userName" id="passWord">
            <h1 id="h1">ABC</h1>
            <script>
                document.write("<p>"+decodeURI(document.location.href.substring(document.location.href.indexOf("default=")+8))+"</p>");
                var x = document.location.href.substring(document.location.href.indexOf("default=")+8);
               // console.log(x);
               // document.getElementById("h1").innerHTML = document.location.href.substring(document.location.href.indexOf("default=")+8);
               
            </script>

        </form>

    </div>