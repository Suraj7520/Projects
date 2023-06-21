<?php 

session_start();

include "conn.php";


$admin_name = $_POST['Username'];
$admin_pass = $_POST['password'];

$selectquery = "select * from admin where Username = '$admin_name' and Password = '$admin_pass' ";


$result = mysqli_query($conn, $selectquery);

if(mysqli_num_rows($result)){

    $_SESSION['admin'] = $admin_name;

    echo "
    <script>
    alert('Login Succesfully');
    window.location.href='mystore.php';
    </script>
    ";

    
}else{
    echo"
    <script>
    alert('Invalid username / password');
    window.location.href='login.php';
    </script>
    ";
}
    
?>