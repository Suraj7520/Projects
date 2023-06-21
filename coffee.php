<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee-beens</title>
</head>
<body>
<?php 
session_start();
$count = 0;
if(isset($_SESSION['cart'])){
    $count = count(($_SESSION['cart']));
}

?>
<nav class="navbar bg-dark text-white">
  <div class="container-fluid">
    <a class="navbar-brand text-white"><h3>Coffee_Been</h3></a>
    
    <span class="">
    <a href="" class="text-decoration-none text-white mx-3 ">Home</a> 
    <i class="fas fa-shopping-cart mx-3" id="cart-btn" href = "viewcart.php"><a href="viewcart.php" style="color: white; text-decoration: none;">Cart (<?php echo $count ?>)</a></i>
    <i class="fa-solid fa-user-lock "></i>
    <a href="" class="text-decoration-none text-white ">Hello,</a> 
   | <i class="fa-solid fa-right-from-bracket "></i>
    <a href="" class="text-decoration-none text-white ">Logout</a> |
    <a href="" class="text-decoration-none text-white mx-3">Userpanel</a>
    </span>
    
  </div>
</nav>

<div class="container ">
            <div class=" col-md-12">
                <div class="row">

<?php 
    include "admin/conn.php";
    include "link.php";
    $selectq = "select * from product";
    $record = mysqli_query($conn, $selectq);
    $row = mysqli_fetch_array($record);

    while ($row = mysqli_fetch_array($record)) {
        $check_page = $row['PCAT'];
        if($check_page === 'one') {
        
        ?>
        <div class="col-md-6 col-lg-4 my-5">
        <form action="insertcart.php" method = "POST">
        <div class="card m-auto" style="width: 15rem;">
  <img src="admin/<?php echo $row['PIMG'] ?>" class="card-img-top " alt="..." >
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['PNAME']?></h5>
    <h3 class="card-title"><?php echo $row['PPRICE']?></h3>
    <input type="hidden" name="PName" value="<?php echo $row['PNAME']?>">
    <input type="hidden" name="PPrice" value="<?php echo $row['PPRICE']?>">
    <input type="number" placeholder="Quantity" name="PQunt" class="w-100 my-3 rounded-pill px-2">
  
    <input type="submit"  class="btn btn-primary text-white w-100 " name="addcart" value="Add to Cart">

    </div>
    </div>
    </form>
  </div>

                    <?php 
        
    }
}

?>

</div>
</div>
</div>

  </body>
</html>



