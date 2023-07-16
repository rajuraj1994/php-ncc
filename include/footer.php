<!-- footer start -->

<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>About Us</h4>
        <div>
          <p class="para">
            At Wild Swimming and Camping,
            we're passionate about providing
            unique and unforgettable outdoor
            experiences. Our team of experts
            has carefully curated a selection
            of the best wild swimming spots
            and campsites across the country,
            so you can discover the beauty of
            nature in a whole new way.
          </p>
        </div>

      </div>
      <div class="col-md-4">
        <h4>Contact Us</h4>
        <ul class="contact-info list-unstyled">
          <li><i class="fa fa-map-marker"><i class='bx bx-current-location'></i></i> chitwan national park
            near</li>
          <li><i class="fa fa-phone"><i class='bx bx-phone-call'></i></i> +977-9745372456</li>
          <li><i class="fa fa-envelope"><i class='bx bx-envelope'></i></i>
            info@wildswimmingandcamping.com</li>
            <li><a href="rssfeed.php" class="text-white text-decoration-none"><i class='bx bx-rss'></i>RSS</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Follow Us</h4>
        <ul class="social-icons d-flex list-unstyled">
          <li><a href="#" class="text-white fs-2"><i class='bx bxl-facebook-circle'></i></i></a></li>
          <li><a href="#" class="text-info fs-2"><i class='bx bxl-twitter'></i></a></li>
          <li><a href="#" class="text-dark fs-2"><i class='bx bxl-instagram'></i></i></a></li>
          <li><a href="#" class="text-danger fs-2"><i class='bx bxl-youtube'></i></i></i></a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <hr>
        <p class="copy">&copy; 2023 Wild Swimming and Camping. All rights reserved.</p>
      </div>
    </div>
  </div>
  <?php require('./counter.php'); ?>
  <div class="visitor_counter">
    <h2>visitor counter:
      <?php echo $counter['counter']; ?>
    </h2>
  </div>
</footer>

<script src="https://www.google.com/recaptcha/api.js?render=6LcNgDQlAAAAAOX3mCK-bAChPBdjQpn1ssfWTEy5"></script>
<script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.ready(function () {
      grecaptcha.execute('6LcNgDQlAAAAAOX3mCK-bAChPBdjQpn1ssfWTEy5', { action: 'submit' }).then(function (token) {
        // Add your logic to submit to your backend server here.
      });
    });
  }
</script>

<!-- footer end -->



<!-- bootsrap js external link -->
<script src="../js/bootstrap.min.js"></script>