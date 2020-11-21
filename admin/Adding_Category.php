<?php
require_once 'connectDB.php';

$conn = connectDB();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} 
$cateId= "";
$cateName="";
$isShow = 0;
$isUpdated = 0;
if ($id !="") {
    $sql = "select cateId, cateName, isShow from category where cateId = $id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $cateId = $row['cateId'];
        $cateName = $row['cateName'];
        $isShow = $row['isShow'];
    }
    $isUpdated = 1;
}
?>
<h2>CATEGORY FORM</h2>
<p>This is function of adminstrator to insert, edit, delete one category.</p>
<p><a href="select_category.php">Back to Category page</a></p>
<div class="container">
  <form action="insert_category.php" method="POST">
  <input type="hidden" id="controlUpdate" name="controlUpdate" value="<?php echo $isUpdated?>" />
  <div class="row">
    <div class="col-25">
      <label for="fname">Category Id</label>
    </div>
    <div class="col-75">
      <input type="text" id="fid" name="fid" value="<?php echo $cateId?>" <?php if ($isUpdated == 1) echo "readonly";?> placeholder="category id..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">Category Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="fname" value="<?php echo $cateName?>" placeholder="category name..">
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
    mysqli_close($conn);
?>
