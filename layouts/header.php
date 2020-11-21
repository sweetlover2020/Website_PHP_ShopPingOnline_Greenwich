<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="img/favicon.png"/>
<title>Dress Store Online</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.navbar {
    margin-bottom: 50px;
    border-radius: 0;
}
.jumbotron {
    margin-bottom: 0;
}
footer {
    background-color: #f2f2f2;
    padding: 25px;
}
.menu{
    height: 50px;
}
.menu li:hover .submenu{
    display: block;
}

.submenu{
    display: none;
    clear: both;
    width: 200px;
    z-index: 999999;
        background-color: #101010;
}
.submenu li{
    list-style: none;

}
.submenu li a{
    text-decoration: none;
    color: #9d9d9d;    
    display: block;
    border-top: 1px solid #ccc;
    line-height: 40px;
}
    .pathway{
        font-size: 20px;
    }
        .fa1{
        text-align: center;
        font-weight: bold;
        font-size: 17px;
    }
    #procontent{
        font-size: 17px;
        color: #981619;
    }
</style>
</head>
<body>
<div class="jumbotron">
    <div class="container text-center">
        <h1>Dress Store Online</h1>
    </div>
</div>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!--
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="#">Logo</a> </div>
        -->
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Trang chủ</a></li>
                <li><a href="gioi-thieu.php">Giới thiệu</a></li>
                <li><a href="sanpham.php">Sản Phẩm</a></li>
                <li><a href="lien-he.php">Liên hệ</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right menu">
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</a></li>
                <li><a href="admin/"><span class="glyphicon glyphicon-user"></span> Admin</a></li>          
            </ul>
        </div>
    </div>
</nav>