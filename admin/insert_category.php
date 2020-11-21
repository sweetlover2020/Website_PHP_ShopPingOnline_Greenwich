<?php
require_once 'connectDB.php';

$conn = connectDB();
if (isset($_POST['fid']) && 
    isset($_POST['fname'])) {
        // get data from FORM
        $controlUpdate = $_POST['controlUpdate'];
        $id = $_POST['fid'];
        $fname = $_POST['fname'];
        $isshowed = 0;
        if (isset($_POST['isshowed'])) {
            $isshowed = 1;
        }

        $new_date=date('Y-m-d'); 
        if ($controlUpdate == 1) {
            $sql = "UPDATE category SET cateName='$fname', isShow=$isshowed, modifyDate='$new_date' WHERE cateId=$id";
        } else {
            $sql = "insert into category(cateId, cateName, isShow, createDate, modifyDate) values($id, '$fname', $isshowed, '$new_date', '$new_date')";
        }
        
        if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
            header("Location:select_category.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        
    }

mysqli_close($conn);


?>