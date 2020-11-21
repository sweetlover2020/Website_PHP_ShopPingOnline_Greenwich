<!-- Connect Database -->
<?php
require_once 'admin/connectDB.php';
$conn = connectDB();
$sql = "select proId, proName, proImage, proContent, proCost from product";
$result = mysqli_query($conn, $sql);

function findProByCat($id)
{
    global $conn;
    $sql = "select * from product where cateId=" . $id;
    $pro = mysqli_query($conn, $sql);
    return $pro;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <title>Dress Store Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
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
                    <li><a href="admin/" target="_blank"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Products -->
    <div class="container">
        <div class="row">
            <p class="pathway"><b>Trang Chủ</b></p>
            <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-sm-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><?php echo $row['proName'] ?></div>
                            <div class="panel-body"><img src="img/<?php echo $row['proImage'] ?>" class="img-responsive" style="height: 300px;" alt="Image"></div>
                            <div class="fa1"><a href="#">Mua</a></div>
                            <div class="fa1"><a href="product-detail.php?proId=<?php echo $row["proId"] ?> ">Chi tiết</a></div>
                            <div class="panel-footer" id="procontent"><?php echo $row['proContent'] ?></div>

                        </div>

                    </div>
            <?php
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
    <br>
    <!-- /Products -->

    <!-- Footer -->
    <?php require_once 'layouts/footer.php' ?>