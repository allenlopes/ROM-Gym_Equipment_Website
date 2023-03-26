<?php
include('header.php'); ?>

    <!--------------------Single product details--------------->

    <div class="small-containners single-product">
      <div class="row">
        <div class="col2">
          <img
            src="Images/combo/Front_400x.webp"
            width="100%"
            id="ProductImg"
            alt=""
          />

          <div class="small-img-row">
            <div class="small-img-col">
              <img
                src="Images/combo/2_1_400x.webp"
                width="100%"
                class="small-img"
                alt=""
              />
            </div>
            <div class="small-img-col">
              <img
                src="Images/combo/1_600x.webp"
                width="100%"
                class="small-img"
                alt=""
              />
            </div>
            <div class="small-img-col">
              <img
                src="Images/combo/Front_400x.webp"
                width="100%"
                class="small-img"
                alt=""
              />
            </div>
            <div class="small-img-col">
              <img
                src="Images/combo/PB_6c9fbb22-99eb-415b-a490-e8aa42a4c926_400x.webp"
                width="100%"
                class="small-img"
                alt=""
              />
            </div>
          </div>
        </div>
        <div class="col2">
          <p>Home / Combo</p>
          <h1>Combo of Dumbbells,Plates and Barbells</h1>
          <h4>$45.00</h4>
          <select name="" id="">
            <option value="">Select Weight</option>
            <option value="">25Kg</option>
            <option value="">35Kg</option>
            <option value="">45Kg</option>
            <option value="">50Kg</option>
          </select>
          <input type="Number" value="1" />
          <a href="cart.php" class="btn">Add To Cart</a>
          <h3>Product-Details</h3>
          <br />
          <p>
            Give your Workout a new Hype! <br />
            From this Combo of adjustable Dumbbells, Plates and Barbells. This
            help you to take your workout to the next level.
          </p>
        </div>
      </div>
    </div>

    <!------------------Title--------------------->

    <div class="small-containners">
      <div class="row row2">
        <h2>Related Products</h2>
        <p>View More</p>
      </div>
    </div>

    <!-------------------Products-------------->
    <div class="small-containners">
      <div class="row">
        <div class="col4">
          <img src="Images/gears/2RedKneeSleeve_400x.webp" alt="" />
          <h4>Red Knee Sleeves</h4>
          <p>$25.00</p>
        </div>
        <div class="col4">
          <img
            src="Images/bars and plates/rubber-weight-plate-500x500_400x.webp"
            alt=""
          />
          <h4>Rubber coated Plates</h4>
          <p>$35.00</p>
        </div>
        <div class="col4">
          <img src="Images/dumbells/HexDumbbell1_400x.webp" alt="" />
          <h4>Dumbbells</h4>
          <p>$10.00</p>
        </div>
      </div>

      <div class="row">
        <div class="col4">
          <img
            src="Images/bars and plates/3-cut-double-color-weight-lifting-plate-500x500_400x.webp"
            alt=""
          />
          <h4>Rubber Coated Plate</h4>
          <p>$15.00</p>
        </div>
        <div class="col4">
          <img src="Images/bench and rack/BenchMain_400x.webp" alt="" />
          <h4>Adjustable Bench</h4>
          <p>$35.00</p>
        </div>
        <div class="col4">
          <img src="Images/gears/1Resistanceband_400x.webp" alt="" />
          <h4>Resistance Band</h4>
          <p>$30.00</p>
        </div>
      </div>
    </div>

    <!--Footer-->

    <?php include('footer.php'); ?>


    <!---------------------Js for product gallery--------------->

    <script>
      var ProductImg = document.getElementById("ProductImg");
      var SmallImg = document.getElementsByClassName("small-img");

      SmallImg[0].onclick = function () {
        ProductImg.src = SmallImg[0].src;
      };
      SmallImg[1].onclick = function () {
        ProductImg.src = SmallImg[1].src;
      };
      SmallImg[2].onclick = function () {
        ProductImg.src = SmallImg[2].src;
      };
      SmallImg[3].onclick = function () {
        ProductImg.src = SmallImg[3].src;
      };
    </script>
  </body>
</html>
