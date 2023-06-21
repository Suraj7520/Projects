<?php

include "conn.php";
include "../link.php";

if (isset($_POST['submit'])) {
    $pname = ($_POST['name']);
    $pprice = ($_POST['price']);
    $pimg = ($_FILES['img']);
    // print_r($pimg);

    $img_loc = $_FILES['img']['tmp_name'];
    $img_name = $_FILES['img']['name'];
    $img_des = "img/" . $img_name;
    move_uploaded_file($img_loc, $img_des);

    $pcat = ($_POST['pages']);


    // insert product 

    $insertquery = "INSERT INTO product(PNAME, PPRICE, PIMG, PCAT) VALUES ('$pname',' $pprice', '$img_des',
    '$pcat')";

   $query=  mysqli_query($conn, $insertquery);


}

?>

<!-- fetch data -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <div class="">
    <table class="table container border-primary  m-auto border mt-3 border-primary table-hover ">
  <thead class=" fs-5 text-center table-primary">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <!-- <th scope="col">Update</th> -->
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody class="table text-center ">

  <?php 
  $selectquery = "select * FROM product";
    $record = mysqli_query($conn, $selectquery);

   

    while ( $row = mysqli_fetch_array($record)) {

         ?>
        
        <tr>
        <td><?php echo $row['id'] ?></td> 
        <td><?php echo $row['PNAME'] ?></td>
        <td><?php echo $row['PPRICE'] ?></td>
        <td><img src='<?php echo $row['PIMG']?>' alt='' height = '90px' width='150px'></td>
        <td><?php echo $row['PCAT'] ?></td>
        <!-- <td><a href='updates.php?ID=<?php echo $row['id']?>' class='btn btn-Warning'>Update</a></td> -->
        <td><a href='delete.php?ID=<?php echo $row['id']?>' class='btn btn-danger'>Delete</a></td>
      </tr>

      <?php


    }
   ?>
  </tbody>
</table>
    </div>
<div class="text-center" style="margin: 10px; padding: 10px; ">
    <a href="product.php" class="btn btn-primary  " style=" width: 50%; padding: 15px;"> Back to Product</a>
    </div>
</body>
</html>

