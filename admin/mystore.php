<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin home page</title>

    <!-- links -->
    <?php include "../link.php" ?>



</head>

<?php 

session_start();

if(!$_SESSION['admin']){
  header("location:login.php");
}

?>

<body>

    <!-- navbar -->

    <nav class="navbar bg-dark text-white">
  <div class="container-fluid">
    <a class="navbar-brand text-white"><h1>Products</h1></a>
    <span>
    <i class="fa-solid fa-user-lock"></i>
    Hello,<?php echo $_SESSION['admin']?> | <i class="fa-solid fa-right-from-bracket"></i>
    <a href="logout.php" class="text-decoration-none text-white">Logout</a> |
    <a href="" class="text-decoration-none text-white">Userpanel</a>
    </span>
    
  </div>
</nav>
    <div>

    <h2 class="text-center">Admin panel</h2>
    </div>
    <div class="bg-danger text-center col-md-6 m-auto">
        <a href="product.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Add product</a>
        <a href="" class="text-white text-decoration-none fs-4 fw-bold px-5">User</a>
    </div>
</body>
</html>