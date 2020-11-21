<!-- Connect Database -->
<?php
require_once 'admin/connectDB.php';
$conn = connectDB();
$sql = "select proId, proName, proImage, proContent, proCost,modifyDate from product";
$result = mysqli_query( $conn, $sql );
?>
 
<!-- Header -->
<?php require_once 'layouts/header.php' ?>
<!-- Products -->
<div class="container">
    <div class="row">
        <p class="pathway"><b>Trang Chủ/ Sản Phẩm</b></p></p>
        <?php
        if ( mysqli_num_rows( $result ) > 0 ) {
            // output data of each row
            while ( $row = mysqli_fetch_assoc( $result ) ) {
                ?>
        <div class="col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading"><?php echo $row['proName']?></div>
                <div class="panel-body"><img src="img/<?php echo $row['proImage']?>" class="img-responsive" style="height: 300px;" alt="Image"></div>
                <div class="fa1"><a href="#">Mua</a></div>
                <div class="fa1"><a href="product-detail.php?proId=<?php echo $row["proId"]?> ">Chi tiết</a></div>
                <div class="panel-footer" id="procontent"><?php echo $row['proContent']?></div>
            </div>
          
        </div>
        <?php
        }
        } else {
            echo "0 results";
        }

        mysqli_close( $conn );
        ?>
    </div>
</div>
<br>
<!-- /Products -->

<!-- Footer -->
<?php require_once 'layouts/footer.php' ?>
