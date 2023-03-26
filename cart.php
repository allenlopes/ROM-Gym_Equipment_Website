<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>


    <!------------------------Cart Item Details------------------>
    <div class="small-containners cart-page">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>SubTotal</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="Images/combo/Front_400x.webp" alt="" />
              <div>
                <p>Combo</p>
                <small>Price: $45.00</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>$45.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="Images/bench and rack/BenchMain_400x.webp" alt="" />
              <div>
                <p>Combo</p>
                <small>Price: $45.00</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>$45.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="Images/gears/1Resistanceband_400x.webp" alt="" />
              <div>
                <p>Combo</p>
                <small>Price: $45.00</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>$45.00</td>
        </tr>
      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>SubTotal</td>
            <td>$200.00</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>$35.00</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>$230.00</td>
          </tr>

          <tr>
          <td>Pay Now</td>
          <div class="col2">
            <td>
            <span onclick="login()"><a class="btn" href="https://rzp.io/i/DS9JaHQ0X">Click To Pay</a></span>
          </td>
            </div>
          </tr>
        </table>
      </div>
    </div>


    <!--Footer-->

    <?php include('footer.php'); ?>


  </body>
</html>
