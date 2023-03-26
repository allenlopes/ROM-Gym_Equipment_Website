<?php
include('header.php'); ?>


<!DOCTYPE html>
<html lang="en">
  <head>

  <br>
        <br>
        <br>


        <div class="contact">
          <form onsubmit="sendEmail(); reset();  false;">

                <h3 style="text-align: center;">Please enter your username and email address, <br>
                You will receive an email message with instructions on how to reset your password</h3>
                <input type="text" id="username" placeholder="Your username" required>
                <input type="email" id="email" placeholder="Email Id" required>
                <button type="submit">Send</button>
            </form>
        </div>

<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
function sendEmail() {
    Email.send({
    Host : "smtp.gmail.com",
    Username : "username@gmail.com",
    Password : "password",
    To : 'name@gmail.com',
    From : document.getElementById("email").value,
    Subject : "New Contact Form Enquiry",
    Body : "Name" + document.getElementById("username").value
        + "<br> Email: " + document.getElementById("email").value
}).then(
  message => alert("Password Reset Query Sent Successfully!")
);
}
</script>

            <br>
            <br>

        </div>
    </div>
</div>


<!--Footer-->

<?php include('footer.php'); ?>


</body>
</html>