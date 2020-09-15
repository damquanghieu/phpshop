<?php 
$username = "hieu";
$token = "auwdiaeawdawdawdmcawnx";
// $value = "hkwaAWDAWDAIJWDd";
// setcookie("username", $value, time()+100000);

if (isset($_COOKIE['username']) && isset($_COOKIE['token'])) {
    if ($_COOKIE['username'] == $username && $_COOKIE['token'] == $token) {
        header('location:', view('ui.logged'));
    }else{
        echo "<h1>Chưa đăng nhập</h1>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Public/admin/bootstrap_4/css/bootstrap.min.css">
    <!-- fonrawesome -->
    <link href="Public/admin/fontawesome-free-5.13.1/css/fontawesome.min.css" rel="stylesheet">
    <link href="Public/admin/fontawesome-free-5.13.1/css/brands.css" rel="stylesheet">
    <link href="Public/admin/fontawesome-free-5.13.1/css/solid.css" rel="stylesheet">
    <title>Login</title>
</head>
<style>
    .content-login{
        width: 600px;
        margin: 0 auto;
        margin-top: 100px;

    }
    .content-login form{
        width: 100%;
        line-height: 60px;

    }
    .content-login h2{
        text-align: center;
        margin-top: 10px;
        
    }
    .content-login button{
        margin-top: 40px;
        background-color: #639;
        color: #fff;
        
    }
    .content-login button:hover{
        background-color: #8c65b3;
    }
</style>

<!-- <body>
    <div class="content-login">
        <form  class="form-group" action="" method="post">
            <h2>Login</h2>
            <label for="userName">Username:</label>
            <input class="form-control"  type="text" name="username" id="userName">
            <label for="passWord"></label>
            <input class="form-control" type="password" name="password" id="passWord">
            <input type="check">
            <button class="btn btn-login">Login</button>
        </form>
    </div>
</body> -->

</html>