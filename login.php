	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    
	    <!-- Bootstrap CSS -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	    
	    <link href="fontawesome/css/all.css" rel="stylesheet">
	     
<?php
session_start();
// echo $a;
?>
<!DOCTYPE html>
<html>
<head>
  <title>login form</title>
 
<style>
 .login_form{
  width: 300px;
  height: 450px;
  position: relative;
  top: 150px;
  left: 30%;
  border: 1px solid black;

    }
    .login{
      background: url(images/coffeebg2.jpg); no-repeat;
      background-size: cover;
    }
    .form input{
      background: none;
      outline: none;
      border: none;
      border-bottom: 1px solid black;
      width: 100%;
      margin: 0 0px 15px;
      padding: 8px;
      font-size: 14px;
    }

    #submit{
      width: 100%;
    }
</style>
</head>
<body class="login">
 

 
<div class="" > 
<div class="login_form"  > 
 <form autocomplete="off" style="margin: 50px;" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
   <h3 style="text-align: center;">Login Form </h3><br>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" aria-describedby="emailHelp" name="email" required>     
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"placeholder="Enter password" name="pass" required>
  </div>
   
    <!-- <button type="submit" class="btn btn-default" name="Submit">Submit</button> -->
    <button type="submit" class="btn btn-primary " id="submit" name="Submit" >Submit</button>
 

  <div>
    <br><a href="registration.php"> <button type="button" class="btn btn-primary">Create an account</button></a>
    <br><a href=""> <button type="button" class="btn btn-danger" style="margin: 10px 0;">Google</button></a>
     
  </div>
</form>
</div>
 </div>
</body>
</html>
<!-- 630322474549-umat824hsopkel48lmdq0o89v1lgu6al.apps.googleusercontent.com  -->
<!-- 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  -->
 
 
<?php
function phpAlert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}

include 'conn.php';
if (isset($_POST['Submit'])) {
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $pass=mysqli_real_escape_string($con,$_POST['pass']);
   
$Loginquery="select * from registration where email='$email' AND password='$pass'";
//echo "$Loginquery";
$Lquery=mysqli_query($con,$Loginquery);
$Loginnquery = mysqli_num_rows($Lquery);
if ($Loginnquery>0) {
  $fetch=mysqli_fetch_assoc($Lquery);
  $_SESSION['Username']=$fetch['Name'];
  $_SESSION['id']=$fetch['id'];
  $a=$_SESSION['Username'];
   // echo $_SESSION['id'];
  ?>
      <script>
        location.replace("index.php")
      </script>
      <?php
}else{
  // echo "Invalid Email and password";
  phpAlert ("Invalid Email and password");
 }
}
 
?>
 


 