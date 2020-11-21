<?php
session_start();
require_once 'admin/connectDB.php';

$conn = connectDB();

	$sql ="select * from product where proId=".$_GET["proId"];
	$pros = mysqli_query($conn, $sql);
	$pro = "";
	while($row=mysqli_fetch_array($pros)){
        $pro=$row;
    }


   function findProByCat($id){
   	global $conn;
   	$sql = "select * from product where cateId=".$id;	
   	$pro = mysqli_query($conn, $sql);
   	return $pro;
   }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="img/favicon.png"/>
<title>Dress Store Online</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
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

<!-- Product detail -->
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="span5">
			<div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">
                  
                  <div class="item active">
                     <a href="#"> <img src="img/<?php echo $pro["proImage"]?>" alt="floral set 1" width="330" height="172"/></a>
                  </div>a
                  
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>
			</div>
        </div>
        <div class="col-lg-8">
            <div class="span7">
				<h3><?php echo $pro["proName"]?></h3>
				
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
                      <label class="control-label"><span>Mô tả: <?php echo $pro["proContent"] ?>  </span></label><br>
					<label class="control-label"><span>Giá: <?php echo number_format($pro["proCost"],0,",",".") ?> VND</span></label>
					<div class="controls"><label class="control-label"><span>Số lượng: </span></label>
					<input type="number" class="span6" placeholder="Số lượng">
					</div>
				  </div>
				
				  <div class="control-group">
					<label class="control-label"><span>Địa chỉ: </span></label>
                      <input type="text" class="span6" placeholder="Địa chỉ">
					
				  </div>
				 
				  <br>
				<p>
				  <button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
				</p></form>
			</div>
        </div>
    </div>
    <div class="col-lg-12"></div>
</div>
<!-- /Product detail -->

<!-- Footer -->
<?php require_once 'layouts/footer.php' ?>