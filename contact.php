<?php
include('header.php'); ?>

        </div>

        <br>
        <br>
        <br>


        <div class="contact">
          <form onsubmit="sendEmail(); reset();  false;">

                <h3 style="text-align: center;">GET IN TOUCH</h3>
                <input type="text" id="name" placeholder="Your Name" required>
                <input type="email" id="email" placeholder="Email Id" required>
                <input type="text" id="phone" placeholder="Phone No." required>
                <textarea id="message" rows="4" placeholder="How can we help you?"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>

<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
function sendEmail() {
    Email.send({
    Host : "smtp.gmail.com",
    Username : "202001015.allenlel@student.xavier.ac.in",
    Password : "password",
    To : 'name@gmail.com',
    From : document.getElementById("email").value,
    Subject : "New Contact Form Enquiry",
    Body : "Name" + document.getElementById("name").value
        + "<br> Email: " + document.getElementById("email").value
        + "<br> Phone no: " + document.getElementById("phone").value
        + "<br> Message: " + document.getElementById("message").value
}).then(
  message => alert("Mesage Sent Successfully!")
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