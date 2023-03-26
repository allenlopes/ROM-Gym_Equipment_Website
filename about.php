<?php include('header.php'); ?>

        <br>
        <br>
        <br>
        <br>

        <div class="row">
            <div class="para">
              <h1 style="text-align: center;">About Us</h1>
              <br>
              <p style="text-align: center;">
            ROM is committed to serve fitness enthusiasts with top quality fitness equipment and accessories.
                We build the best home gym, office, and sports complex gym. We are also the pioneers of
                performance accessories in India, such as wrist support, BFR bands, squat shoes, knee sleeves and
                powerlifting belts. We believe in every aspect of life a person can perform- <b>FULL RANGE OF MOTION!</b> And our
                        made to last products will serve as a reminder for this power within you.
              </p>
              <br>
              <br>
              <br>
              <br>

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