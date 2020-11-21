
<?php
require_once '../connectDB.php';

$conn = connectDB();

$sql = "select text from gioithieu";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <style>

    </style>
</head>
<body>

<h2>PRODUCT FORM </h2>
<p>This is function of adminstrator to insert, edit, delete one product.</p>
<p><a href="../index.php"> Back to Page Admin</a></p>
<table style="width:100%" border = "1">
  <tr>
    <th>Product Id</th>
    <th>Product Name</th> 
    <th>Product Image</th> 
    <th>Product Content</th> 
    <th>Modify Date</th>
    <th>Price</th>
	<th></th>
    <th></th>
  </tr>

<?php if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr> 
            <td><?php echo $row['proId']?> </td> 
            <td><?php echo $row['proName']?></td>
            <td style="text-align: center"><img src="../img/<?php echo $row['proImage']?>" width="100px"></td>
            <td><?php echo $row['proContent']?></td>
            <td><?php echo $row['modifyDate']?></td>
			<td><?php echo $row['proCost']?></td>
            <td><a href="delete_product.php?id=<?php echo $row['proId']?>">Delete</a></td>
            <td><a href="Adding_Product.php?id=<?php echo $row['proId']?>">Edit</a></td>
        </tr>
    <?php }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>
</body>
</html>