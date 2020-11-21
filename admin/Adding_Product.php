<?php
require_once 'connectDB.php';
$conn = connectDB();
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
<head>
<style>
* {
    box-sizing: border-box;
}
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}
input[type=submit]:hover {
    background-color: #45a049;
}
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}
.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
.col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
}
}
</style>
</head>
<body>
<?php

$id = "";
if ( isset( $_GET[ 'id' ] ) ) {
    $id = $_GET[ 'id' ];
}
$proId = "";
$cateId = "";
$proName = "";
$proImage = "";
$proContent = "";
$isShow = 0;
$proCost = "";
$isUpdated = 0;
if ( $id != "" ) {
    $sql = "select proId, cateId, proName, proImage, proContent ,proCost, isShow from product where proId = $id";
    $result = mysqli_query( $conn, $sql );
    while ( $row = mysqli_fetch_assoc( $result ) ) {
        $proId = $row[ 'proId' ];
        $cateId = $row[ 'cateId' ];
        $proName = $row[ 'proName' ];
        $proImage = $row[ 'proImage' ];
        $proContent = $row[ 'proContent' ];
        $proCost = $row[ 'proCost' ];
        $isShow = $row[ 'isShow' ];
    }
    $isUpdated = 1;
}
?>
<h2>PRODUCT FORM</h2>
<p>This is function of adminstrator to insert, edit, delete one product.</p>
<p><a href="select_product.php">Back to product page</a></p>
<div class="container">
    <form action="insert_product.php" method="POST"  enctype="multipart/form-data">
        <input type="hidden" id="controlUpdate" name="controlUpdate" value="<?php echo $isUpdated?>" />
        <div class="row">
            <div class="col-25">
                <label for="fname">Product Id</label>
            </div>
            <div class="col-75">
                <input type="text" id="fid" name="fid" value="<?php echo $proId?>" <?php if ($isUpdated == 1) echo "readonly";?> placeholder="product id..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="fname">Category ID</label>
            </div>
            <div class="col-75">
                <input type="text" id="fcatid" name="fcatid" value="<?php echo $cateId?>" <?php if ($isUpdated == 1) echo "readonly";?> placeholder="category id..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="fname">Product Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="fname" value="<?php echo $proName?>" placeholder="product name..">
            </div>
        </div>
        
        <div class="row">
            <div class="col-25">
                <label for="fname">Image</label>
            </div>
            <div>
                <input type="file" id="fimage" name="fimage" value="<?php echo $proImage?>" placeholder="product Image.."/>
    
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="fname">Content</label>
            </div>
            <div class="col-75">
                <input type="text" id="fcontent" name="fcontent" value="<?php echo $proContent?>" placeholder="product Content..">
            </div>
        </div>
        
        <div class="row">
            <div class="col-25">
                <label for="fname">Price</label>
            </div>
            <div class="col-75">
                <input type="text" id="fprocost" name="fprocost" value="<?php echo $proCost?>" placeholder="product price..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Is showed?</label>
            </div>
            <div class="col-75">
                <input type="checkbox" id="isshowed" name="isshowed" <?php if ($isShow == 1) echo "checked";?> />
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Submit" />
        </div>
    </form>
</div>
</body>
</html>
<?php
mysqli_close( $conn );
?>
