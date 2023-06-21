<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <?php include "../link.php"?>
</head>
<body class = "bg-secondary">
<div class="container ">
        <div class="row">
            <div class="col-md-6 bg-white p-5 font-monospace shadow m-auto border mt-3 border-primary">
                <form action="login1.php" method="POST">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Admin Login:</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="Username" required>
                    </div>
                

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Password" name="password" required>
                </div>

               
                <button name="submit" class="bg-primary fs-4 fw-bold my-2 form-control text-white">LogIn

                </button>
                <button name="google" class="bg-danger fs-4 fw-bold my-2 form-control text-white">google

                </button>
                </form>
            </div>
        </div>
    </div>

    

</body>
</html>