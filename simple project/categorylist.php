<?php
require ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> List Of Category</title>
</head>
<body>


<!-- Fetch the data from database -->
<?php


$sql = "SELECT * FROM category ";
$query = $conn->query($sql);


echo "<table border='1'><th>Id</th><th>Name of Category</th><th>Date</th><th>Action</th>";




  // output data of each row
  while($data = $query->fetch_assoc()) {
    $category_id          = $data['category_id'];
    $category_name        = $data['category_name'];
    $category_entrydate   = $data['entrydate'];
   


    echo "<tr>
    <td>$category_id</td>
    <td>$category_name</td>
    <td>$category_entrydate</td>
    <td><a href='editcategory.php?id=$category_id'>Edit</a></td>  
    </tr>";   //using EDIT btn for edit info

}
echo "</table>"
?>

</body>
</html>