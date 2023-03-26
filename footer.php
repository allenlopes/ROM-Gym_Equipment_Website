 <!--Footer-->
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial scale = 1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>All Products - ROM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"

    />
  </head>
  <body>

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
