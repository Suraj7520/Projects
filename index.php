<?php
session_start();

if(!isset($_SESSION['Username'])){
    // header("location:login.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SG CAFE</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>


<?php 
session_start();
$count = 0;
if(isset($_SESSION['cart'])){
    $count = count(($_SESSION['cart']));
}

?>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">
            <img src="images/logo.png" alt="">
        </a>
        <div class="user" style="color: white; font-size: 30px;">
            <p><?php 
            if(isset($_SESSION['Username'])){
                // header("location:login.php");
                echo "Hello,  ". $_SESSION['Username'];
            
            }else{
                echo"hello, user";
            }
            
            ?></p>
        </div>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">Menu</a>
            <!-- <a href="#products">products</a> -->
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <?php
            if (!isset($_SESSION['Username'])) {
                ?>
                <a href="login.php">
                    <button type="button" class="btn ">Login</button>
                </a>
                <?php
            } else {
                ?>
                <a href="logout.php">
                    <button type="button" class="btn ">Logout</button>
                </a>
                <?php
            }
            ?>
        </nav>

       

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn" href = ""><a href="viewcart.php" style="color: white;">Cart (<?php echo $count ?>)</a></div>
            <!-- <div class="fa-solid fa-lock" id = "admin-btn">admin</div> -->

            <!-- <div class="fas fa-bars" id="menu-btn"></div> -->
        </div>



        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <!-- <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-1.png" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">Rs.299/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-2.png" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">Rs.249/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-3.png" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">Rs.399/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-4.png" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">Rs.249/-</div>
            </div>
        </div>
        <a href="payment.html" class="btn">checkout now</a>
    </div> -->

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>WELCOME TO , SG CAFE SHOP</h3>

            <a href="#" class="btn">get yours now</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/about-img.jpeg" alt="">
            </div>

            <div class="content">
                <h3>what makes our coffee special?</h3>
                <p>Our Coffee Shop and Gallery offers a unique coffee house environment unlike any other in Macon. We
                    are not only a place to drop in and get your morning cup of coffee (although you are more than
                    welcome to do that), we are a place where you can sit down and enjoy that tailor-made cup of coffee.
                    If you need to work, we have a seating area created specifically for you. If you need to rest, we
                    have a soft-seating area in front of a stone fire place that is perfect for your weary mind and
                    body. We offer a delicious variety of coffee from Safehouse Coffee made by our professionally
                    trained baristas. We have everything from classic coffee to our house made specialty beverages.</p>

                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->


    <section class="menu" id="menu">

        <h1 class="heading"> our <span>Menu</span> </h1>
        <div class="box-container">

        <div class="box">
                <img src="images/menu-1.png" alt="">
                <h3>Coffee</h3>
                <!-- <div class="price">Rs299 <span>Rs.249</span></div> -->
                <a href="coffee.php" class="btn">Go to order</a>
            </div>
        
        <div class="box">
                <img src="images/product-1.png" alt="">
                <h3>Coffee-beens</h3>
                <!-- <div class="price">Rs299 <span>Rs.249</span></div> -->
                <a href="coffee_beens.php" class="btn">Go to order</a>
            </div>
        
        <div class="box">
                <img src="images/cold-beverage.jpg" alt="">
                <h3>Cold-beveragee</h3>
                <!-- <div class="price">Rs299 <span>Rs.249</span></div> -->
                <a href="cold_beverages.php" class="btn">Go to order</a>
            </div>
        

            <!-- <div class="box">
                <img src="images/cold-beverage.jpg" alt="">
                <h3>Cold-beverages</h3>
                <a href="#" class="btn">Go There</a>
            </div>

            <div class="box">
                <img src="images/product-3.png" alt="">
                <h3>coffee beens</h3>
                <a href="#" class="btn">Go There</a>
            </div> -->

           
    </section>


    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>. I really like the atmosphere, good coffee, and nice interior. This is a good place to study or
                    chill with friends. The drinks and foods were all tasty and worthwhile. If you’re up for a fresh
                    place with beautiful architecture then this is a must to visit.</p>
                <img src="images/pic-1.png" class="user" alt="">
                <h3>Aman</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p> Will go again.I only popped in to get take-away cappuccinos, but I was struck by how friendly the
                    service was. The cappuccinos were wonderful too! And very well priced.</p>
                <img src="images/pic-2.png" class="user" alt="">
                <h3>Priya</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>I would probably say that this coffee shop is a must for coffee lovers! The service was good, and the
                    variety of coffee served in the ambiance was very satisfying. If you like your coffee shops, then
                    this is a must-visit! We will be back again!</p>
                <img src="images/pic-3.png" class="user" alt="">
                <h3>Rahul</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy"></iframe>

            <form action="">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number">
                </div>
                <input type="submit" value="contact now" class="btn">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">menu</a>
            
            <a href="#">review</a>
            <a href="#">contact</a>
            <a href="#">blogs</a>
            <a href="admin/mystore.php">Admin</a>
        </div>

        <div class="credit">created by <span>Suraj</span> | all rights reserved</div>

    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>