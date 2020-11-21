<?php
$target_dir = "../img/";

require_once 'connectDB.php';

$conn = connectDB();
if (isset($_POST['fid']) && 
    isset($_POST['fname'])&&
    isset($_POST['fcontent'])&&
	isset($_POST['fprocost']))
{
        // get data from FORM
        $controlUpdate = $_POST['controlUpdate'];
        $id = $_POST['fid'];
        $fname = $_POST['fname'];
        $fcontent = $_POST['fcontent'];
		$fprocost= $_POST['fprocost'];
        $isshowed = 0;
        if (isset($_POST['isshowed'])) {
            $isshowed = 1;
        }
        $target_file = $target_dir . basename($_FILES["fimage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
          $check = getimagesize($_FILES["fimage"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["fimage"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fimage"]["name"]). " has been uploaded.";
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
        }
        $fimage = $_FILES["fimage"]["name"];
        $new_date=date('Y-m-d'); 
        if ($controlUpdate == 1) {
            $sql = "UPDATE product SET proName='$fname', proImage='$fimage', proContent='$fcontent',proCost = $fprocost WHERE proId=$id";
        } else {
            $sql = "insert into product(proId, proName, proImage, proContent, proCost) values($id, '$fname', '$fimage', '$fcontent' ,$fprocost)";
        }
        
        if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
            header("Location:select_product.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        
    }

mysqli_close($conn);


?>