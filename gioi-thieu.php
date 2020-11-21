<!-- Connect Database -->
<?php
require_once 'admin/connectDB.php';
$conn = connectDB();
$gioiThieuText = "select text from gioithieu";
$result = mysqli_query( $conn, $gioiThieuText );
?>
<!-- Header -->
<?php require_once 'layouts/header.php' ?>

<!-- Gioi Thieu -->
<div class="container">
    <div class="row">
        <p class="pathway"><b>Trang Chủ/ Giới thiệu</b></p>
            <?php
            if ( mysqli_num_rows( $result ) > 0 ) {
                // output data of each row
                while ( $row = mysqli_fetch_assoc( $result ) ) {
                    ?>
            <div class="col-sm-12" align="justify">
                   <pre style="font-size: 17px; overflow-y:hidden;" ><?php echo $row['text']?></pre>
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
<!-- /Gioi Thieu -->

<!-- Footer -->
<?php require_once 'layouts/footer.php' ?>