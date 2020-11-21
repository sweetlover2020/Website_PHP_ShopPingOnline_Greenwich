<!-- Connect Database -->
<?php
require_once './connectDB.php';

$conn = connectDB();

$sql = "select * from product";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="img/favicon.png"/>
<title>Admin Page</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="jumbotron">
    <div class="container text-center">
        <h1>Admin Dress Store Online</h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row"> 
        <div class="col-lg-12">Admin page</div>
    </div>
</div>
<div class="container-fluid">
    <div class="row"> 
        <div class="col-lg-2">
            <table class="table1">
                <tr>
                    <th class="panel-heading">Danh Mục Quản lý</th>
                </tr>
                <tr>
                    <td><a href="select_category.php">Quản lý Category</a></td>
                </tr>
                <tr>
                    <td><a href="select_product.php">Quản lý Product</a></td>
                </tr>
                <tr>
                    <td><a href="../index.php">Đăng xuất</a></td>
                </tr>
            </table>
        </div>
        <div class="col-lg-10">
            <p class="pathway">Trang Chủ/ Sản phẩm</p>
            <p><a href="Adding_Product.php"> New Product</a></p>
            <table style="width:100%" border = "1">
                <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Content</th>
                   
                    <th>Price</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                if ( mysqli_num_rows( $result ) > 0 ) {
                    // output data of each row
                    while ( $row = mysqli_fetch_assoc( $result ) ) {
                        ?>
                <tr>
                    <td><?php echo $row['proId']?></td>
                    <td><?php echo $row['proName']?></td>
                    <td style="text-align: center"><img src="../img/<?php echo $row['proImage']?>" width="100px"></td>
                    <td><?php echo $row['proContent']?></td>
                   
                    <td><?php echo $row['proCost']?></td>
                    <td><a href="delete_product.php?id=<?php echo $row['proId']?>">Delete</a></td>
                    <td><a href="Adding_Product.php?id=<?php echo $row['proId']?>">Edit</a></td>
                </tr>
                <?php
                }
                } else {
                    echo "0 results";
                }

                mysqli_close( $conn );
                ?>
            </table>
        </div>
    </div>
</div>
<?php require_once 'layouts/footer.php' ?>
</body>
</html>