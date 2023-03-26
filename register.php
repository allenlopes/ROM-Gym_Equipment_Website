<?php include('header.php'); ?>


    <?php
session_start();

$errors = array();

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = htmlspecialchars($_POST['username']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
  $Confirm_Password = htmlspecialchars($_POST['Confirm_Password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $Confirm_Password) {
	echo "<script> alert('The two passwords do not match'); window.location='register.php'; </script>";
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      echo "<span style='color:red';><center><h2> <br> Username Already Exists! </h2></center></span>";
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";

    // header('location: index.html');
  }
}

?>


<!------------------------------- REGISTER FORM ------------------------------->

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
            <span><h2>Register</h2></span>
            <hr id="Indicator" />
            <form method="post" action="register.php" id="RegForm">
              <input type="text" name="username" placeholder="Username" />
              <input type="email" name="email" placeholder="Email"  />
              <input type="password" name="password" placeholder="Password" />
              <input type="password" name="Confirm_Password" placeholder="Confirm Password" />
              <button type="submit" class="btn" name="reg_user">Register</button>
              <p>
                Already a member? <a href="login.php"><b> Login</b></a>
            </p>
            </form>
            </div>
          </div>
        </div>
      </div>


      <?php include('footer.php'); ?>

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
