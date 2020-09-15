<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="http://localhost/phpshop/">
    <!-- css -->
    <link rel="stylesheet" href="Public/admin/css/index.css">
    <link rel="stylesheet" href="Public/admin/css/table.css">
    <link rel="stylesheet" href="Public/admin/css/form_add.css">
    <link rel="stylesheet" href="Public/admin/bootstrap_4/css/bootstrap.min.css">
    <!-- fonrawesome -->
    <link href="Public/admin/fontawesome-free-5.13.1/css/fontawesome.min.css" rel="stylesheet" >
	<link href="Public/admin/fontawesome-free-5.13.1/css/brands.css" rel="stylesheet" >
    <link href="Public/admin/fontawesome-free-5.13.1/css/solid.css" rel="stylesheet" >
    <title>Home</title>
</head>
<style>
    .sub-menu {
        padding-left: 30px;
        display: none;
        border-radius: 10px;
        background-color: #fff;

    }
    .sub-menu li{
        background: 

    }
    .menu-items li:hover .sub-menu{
        display: block;
    }
</style>
<body>
    <div id="content">
       
        <div class="side-bar">
            <div style="asas" class="logo">
               <span>Hiếu</span>
            </div>
            <ul class="menu-items">
                <a href="#"><li><i class="fas fa-tachometer-alt"></i>DashBoard</li></a>
                <a href="index.php?controller=category"><li><i class="fas fa-align-justify"></i>Category
                <a href="index.php?controller=product"><li><i class="fas fa-tshirt"></i>Product</li></a>
                <a href="#"><li><i class="fas fa-sliders-h"></i>Slide</li></a>
                <a href="#"> <li><i class="fas fa-users"></i>Users</li></a>
            </ul>
        </div>

        <div class="right">
            <div class="container">
                <div  class="row">
                    <div class="col-md-12">
                        <div class="navbar">
                            <div class="navbar-left">
                                <i class="fas fa-user-plus"></i>
                                <i class="fas fa-comments"></i>
                                <i class="fas fa-inbox"></i>
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="navbar-right">
                                <i class="fas fa-bell"></i>
                                <i class="fas fa-user-plus"></i>
                                <i class="fas fa-comments"></i>
                                <img class="avata-img" src="Public/avatar.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>