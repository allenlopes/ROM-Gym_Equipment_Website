<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>ROM - Full Range Of Motion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="header">
      <div class="containner">
        <div class="navbar">
          <div class="logo">
            <a href="index.php"><img src="Images/homepage/logo.png" width="50%" alt="" /></a>
          </div>
          <nav>
            <ul id="MenuItems">
              <li><a href="index.php">Home</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Register</a></li>
            </ul>
          </nav>

          <a href="cart.php">
          <img
            src="Images/homepage/cart.png"
            width="25px"
            height="25px"
            alt=""
          />
        </a>

          <img
            src="Images/homepage/menu.png"
            class="menu-icon" onclick="menutoggle()"
            width="60px"
            height="30px"
          />

        </div>
        <div class="row">
          <div class="col2">
            <h1>Give Your Workout<br />A New Style!</h1>
            <p>
              Success isn't always about greatness. It's about consistency.
              Consistent<br />
              hard work gains success. Greatness will come.
            </p>
            <a href="products.php" class="btn">Explore Now &#8677;</a>
          </div>
          <div class="col2">
            <img src="Images/homepage/gym-removebg-preview.png" width="1300px" alt="" />
          </div>
        </div>
      </div>
    </div>

    <!--Featured Categories-->
    <div class="categories">
      <div class="small-containners">
        <div class="row">
          <div class="col3">
            <img src="Images/bars and plates/DSC07485_400x.webp" alt="" />
          </div>
          <div class="col3">
            <img src="Images/combo/UltimateHomeGym_400x.webp" alt="" />
          </div>
          <div class="col3">
            <img src="Images/gears/CollectionPack_400x.webp" alt="" />
          </div>
        </div>
      </div>
    </div>

    <!--Featured products-->
    <div class="small-containners">
      <h2 class="title">Featured Products</h2>
      <div class="row">
        <div class="col4">
          <img src="Images/gears/2RedKneeSleeve_400x.webp" alt="" />
          <h4>Red Knee Sleeves</h4>
          <p>$25.00</p>
          </div>
          <div class="col4">
            <img src="Images/bars and plates/rubber-weight-plate-500x500_400x.webp" alt="">
            <h4>Rubber coated Plates</h4>
            <p>$35.00</p>
          </div>
          <div class="col4">
            <img src="Images/dumbells/HexDumbbell1_400x.webp" alt="">
            <h4>Dumbbells</h4>
            <p>$10.00</p>
          </div>
        </div>
        <h2 class="title">Recents Added Products</h2>
        <div class="row">
          <div class="col4">
            <img src="Images/bars and plates/3-cut-double-color-weight-lifting-plate-500x500_400x.webp" alt="" />
            <h4>Rubber Coated Plate</h4>
            <p>$15.00</p>
            </div>
            <div class="col4">
              <img src="Images/bench and rack/BenchMain_400x.webp" alt="">
              <h4>Adjustable Bench</h4>
              <p>$35.00</p>
            </div>
            <div class="col4">
              <img src="Images/gears/1Resistanceband_400x.webp" alt="">
              <h4>Resistance Band</h4>
              <p>$30.00</p>
            </div>
            <div class="row">
              <div class="col4">
                <a href="product-details.php"><img src="Images/combo/Front_400x.webp" alt="" />
                <h4>Combo</h4>
                <p>$45.00</p></a>
                </div>
                <div class="col4">
                  <img src="Images/bench and rack/JK-1000Main_400x.webp" alt="">
                  <h4>Squat Rack</h4>
                  <p>$50.00</p>
                </div>
                <div class="col4">
                  <img src="Images/dumbells/NewGreySuper_400x.webp" alt="">
                  <h4>Dumbbells</h4>
                  <p>$20.00</p>
                </div>
              </div>
          </div>
      </div>
           <!--Offers Products-->
           <div class="offer">
            <div class="small-containers">
              <div class="row">
                <div class="col2">
                  <img src="Images/gears/2Camo_1_400x.webp" class="offer-img" alt="">
                </div>
                <div class="col2">
                  <p>Exclusively available on ROM</p>
                  <h1>Knee Sleeves</h1>
                  <small>This Knee Sleeves can hold a alot of pressure while squating.
                    Specially designed for Powerlifters to go beyond their limits!<br> </small>
                    <a href="" class="btn">Buy Now &#8677</a>
                </div>
              </div>
            </div>
          </div>
    </div>


       <!--Brands-->

       <div class="brands">
        <div class="small-conntainers">
          <div class="row">
            <div class="col5">
              <div class="">
                <img src="Images/Brands/5cc043cf0e469_thumb900.webp" width="300px" alt="">
              </div>
            </div>
            <div class="col5">
              <img src="Images/Brands/c728a0a94907ddcd4c815cf98ad10ee8--brand-identity-pack-crossfit.jpg" width="300px" alt="">
            </div>
            <div class="col5">
              <img src="Images/Brands/images.png" width="300px" alt="">
            </div>
            <div class="col5">
              <img src="Images/Brands/MuscleBlaze MB Logo final 1 March 2018-05.png" width="300px" alt="">
            </div>
            <div class="col5">
              <img src="Images/Brands/722ff5d3ffb9b69d7280ad22527baa93.webp" width="300px" alt="">
            </div>
          </div>
        </div>
      </div>

      <!--Footer-->

      <div class="footer">
        <div class="containner">
          <div class="row">
            <div class="footer-col1">
              <h3>Downlaod Our App</h3>
              <p>Downlaod App for Android and Ios mobile phones</p>
              <div class="app-logo">
                <img src="Images/homepage/play-store.png" width="40px" height="46px" alt="">
                <img src="Images/homepage/app-store.png" width="40px" height="46px" alt="">
              </div>
            </div>
            <div class="footer-col2">
              <img src="Images/homepage/logo.png" width="200px" height="120px" alt="">
              <p>Our purpose Is to Sustainably Make the Pleasure and
                Benefits of Fitness Accessible to the Many. </p>
            </div>
            <div class="footer-col3">
              <h3>Useful Links</h3>
              <ul>
                <li>Coupons</li>
                <li>Blog Post</li>
                <li>Return Policy</li>
                <li>Join Affliate</li>
              </ul>
            </div>
            <div class="footer-col4">
              <h3>Follow Us</h3>
              <ul>
                <li> Facebook</li>
                <li> Instagram</li>
                <li> Twitter</li>
                <li> Youtube</li>
              </ul>
            </div>
          </div>
          <hr>
          <p class="copyright">Copyright 2021 - ROM</p>
        </div>
      </div>


      <!---------------js for toggle menu--------------->
      <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
          if( MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px"
          }
          else{
            MenuItems.style.maxHeight = "0px";
          }
        }
      </script>
  </body>
</html>
