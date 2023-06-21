<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <!-- links  -->
    <?php include "../link.php" ?>
    <?php include "conn.php" ?>
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-md-6 m-auto border mt-3 border-primary">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Product Detail:</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Product Name" name="name" required>
                    </div>
                

                <div class="mb-3">
                    <label class="form-label">Product Price</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Product price" name="price" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Product Image</label>
                    <input type="file" class="form-control" id="formGroupExampleInput" name="img" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">select product category</label>
                    <select class="form-select" name="pages">>
                       
                        <option value="home">Home</option>
                        <option value="one">coffee</option>
                        <option value="two">cold-beverage</option>
                        <option value="three">coffee beens</option>
                    </select>
                </div>
                <button name="submit" class="bg-danger fs-4 fw-bold my-2 form-control text-white">Upload

                </button>
                
            </form>
            <a class="btn btn-primary fs-4 fw-bold my-2 form-control text-white" href="insert.php" role="button">Link</a>
            </div>
        </div>
    </div>

    
</body>

</html>