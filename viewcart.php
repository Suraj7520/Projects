<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewCart</title>
    <?php include "link.php"?>
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
    <a class="navbar-brand text-white"><h3>Coffee</h3></a>
    
    <span class="">
    <a href="index.php" class="text-decoration-none text-white mx-3 ">Home</a> 
    <i class="fas fa-shopping-cart mx-3" id="cart-btn">Cart (<?php echo $count ?>)</i>
    <i class="fa-solid fa-user-lock "></i>
    <a href="" class="text-decoration-none text-white ">Hello,<?php if($_SESSION['Username']){
        echo $_SESSION['Username'];
    }else{
        echo "Heloo";
    }?></a> 
   | <i class="fa-solid fa-right-from-bracket "></i>
    <a href="" class="text-decoration-none text-white ">Logout</a> |
    <a href="" class="text-decoration-none text-white mx-3">Userpanel</a>
    </span>
    
  </div>
</nav>
    <div class="container">
        <div class="row">
        <div class="col-lg-12 text-center bg-light mb-5">
            <h1 class="text-warning">MyCart</h1>
        </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table table-bordered text-center">
                    <thead class="table-primary text-white fs-5">
                        <th>Serial no.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php 
                        
                        
                        $ptotal = 0;
                        $total = 0;
                        $num = 0;
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key => $value){
                                $ptotal = $value['productPrice'] * $value['productQunt'];
                                $total += $value['productPrice'] * $value['productQunt'];
                                $num = $key + 1;
                                 
                                echo"

                            <form action='insertcart.php' method='POST'>

                            <tr>
                                <td>$num</td>
                                <td><input type='hidden' name='PName' value = '$value[productName]'>$value[productName]</td>
                                <td><input type='hidden' name='PPrice' value = '$value[productPrice]'>$value[productPrice]</td>
                                <td><input type='text' name='PQunt' value = '$value[productQunt]'></td>
                                <td>$ptotal</td>
                                <td><button name='update' class='btn btn-primary'>Update</button></td>
                                <td><button name='remove'  class='btn btn-danger'>Delete</button></td>
                                <td><input type='hidden' name = 'item' value='$value[productName]' ></td>
                                
                                </tr>
                                
                                </form>
                                
                                ";
                            }
                        }
                        
                        ?>
                        
                    </tbody>
                </table>
            </div>
            <div class="lg-3 text-center" style="width: 40%;">
                <h3>
                    TOTAL
                </h3>
                <h1 class="bg-danger text-white">
                       <a href="" class='text-white' style=' text-decoration: none;'> <?php echo number_format($total,2)?></a>
                </h1>
            </div>
        </div>
    </div>
</body>
</html>