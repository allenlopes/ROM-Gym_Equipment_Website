<?php
include('header.php');

if (isset($_POST['login_user'])) {
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

  // if (empty($username)) {
  // 	// echo "<script> alert('Username is required'); window.location='login.php'; </script>";
  // }
  // if (empty($password)) {
  //   echo "<script> alert('Password is required'); window.location='login.php'; </script>";
  // }


  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}
    else
    {
  		echo "<span style='color:red';><center><br><b> Wrong username/password combination </b></center></span>";
  	}
}

?>


<!------------------------------- LOGIN FORM ------------------------------->
<div class="account-page">
    <div class="containners">
      <div class="row">
        <div class="col2">
          <img
            src="Images/homepage/gym-removebg-preview.png"
            width="100%"
            alt=""
          />
        </div>
        <div class="col2">
          <div class="form-containner">
            <div class="form-btn">
              <span onclick="login()"><h2>Login</h2></span>
              <hr id="Indicator" />
            <form method="post" action="login.php" id="LoginForm">
              <input type="text" name="username" placeholder="Username" required/>
              <input type="password" name="password" placeholder="Password" required />
              <button type="submit" class="btn" name="login_user">Login</button>
              <a href="forgetpassword.php">&nbsp; Forgot Password?</a>
              <br>
            </div>
            </form>
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
            <img
              src="Images/homepage/play-store.png"
              width="40px"
              height="46px"
              alt=""
            />
            <img
              src="Images/homepage/app-store.png"
              width="40px"
              height="46px"
              alt=""
            />
          </div>
        </div>
        <div class="footer-col2">
          <img
            src="Images/homepage/logo.png"
            width="200px"
            height="120px"
            alt=""
          />
          <p>
            Our purpose Is to Sustainably Make the Pleasure and Benefits of
            Fitness Accessible to the Many.
          </p>
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
            <li>Facebook</li>
            <li>Instagram</li>
            <li>Twitter</li>
            <li>Youtube</li>
          </ul>
        </div>
      </div>
      <hr />
      <p class="copyright">Copyright 2021 - ROM</p>
    </div>
  </div>

  <!---------------js for toggle menu--------------->
  <script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
      if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
      } else {
        MenuItems.style.maxHeight = "0px";
      }
    }
  </script>

  <!----------------------Js for toggle form------------------>
  <script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register() {
      RegForm.style.transform = "translateX(0px)";
      LoginForm.style.transform = "translateX(0px)";
      Indicator.style.transform = "translateX(100px)";
    }

    function login() {
      RegForm.style.transform = "translateX(300px)";
      LoginForm.style.transform = "translateX(300px)";
      Indicator.style.transform = "translateX(0px)";
    }
  </script>
</body>
</html>
