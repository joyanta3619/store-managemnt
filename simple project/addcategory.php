<?php
   $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "store";


   $conn = mysqli_connect($servername, $username, $password,$dbname);
   // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 echo "Connected";


?>




<!DOCTYPE html>            
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>
<body>
    <form action="addcategory.php" method="GET">
        <label for="name">Name :</label>
        <input type="text" name="category_name"><br><br>


        <label for="date">Date :</label>
        <input type="date" name="entry_date"><br><br>


        <input type="Submit" value="submit">


    </form>








    <?php


        if(isset($_GET["category_name"])){


       $category_name = $_GET["category_name"];
       $entrydate      = $_GET["entry_date"];




       $sql = "INSERT INTO category (category_name,entry_date) VALUES('$category_name','$entrydate')";
       
            // Check Inserted data


          if ($conn->query($sql) === TRUE) {
            echo "record created ";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                    }




        }
   
   
   
    ?>
</body>
</html>