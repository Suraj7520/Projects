<?php 
session_start();
// session_destroy();
if(isset($_SESSION['Username'])){

$product_name = $_POST['PName'];
$product_price = $_POST['PPrice'];
$product_quant = $_POST['PQunt'];

if(isset($_POST['addcart'])){

    $chech_product = array_column($_SESSION['cart'], 'productName');
    if(in_array($product_name, $chech_product)){
        echo "
        
        <script>
        alert('Product already added');
        window.location.href = 'index.php';
        </script>
        
        ";
    }else{

    $_SESSION['cart'][] = array('productName' => $product_name, 
                              'productPrice' => $product_price, 
                              'productQunt' => $product_quant);
                              header("location:viewcart.php");
                        }

}

// remove item 

if(isset($_POST['remove'])){
 foreach($_SESSION['cart'] as $key => $value){
    if($value['productName'] === $_POST['item']) {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values( $_SESSION['cart'] );
        header('location:viewcart.php');
    }
    
 }
 
}


// update product 


if(isset($_POST['update'])){
    foreach($_SESSION['cart'] as $key => $value){
       if($value['productName'] === $_POST['item']){
           $_SESSION['cart'][$key] = array('productName' => $product_name, 
                                           'productPrice' => $product_price, 
                                           'productQunt' => $product_quant);
                                            header("location:viewcart.php");
     }
       }
       
    }
    
}else{
    header("location:login.php");
}


?>
