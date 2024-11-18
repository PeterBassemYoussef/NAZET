  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3><a href="#" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid" width="100"></a></h3>
              <p>
                Leutweinstraße 96, <br>
                68219 Mannheim, Germany<br><br>
                <strong><?php echo $translations["Phone"]; ?>:</strong> <a href="tel:4917634634179"> +49 176 34634179</a>
                <br>
                <strong><?php echo $translations["Email"]; ?>:</strong><a href="mailto:info@nazet.de"> info@nazet.de</a>
                <br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://maps.app.goo.gl/Dv1Ybk2VioSjvkKr9" class="linkedin" target="_blank"><i class="bx bx-map"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4><?php echo $translations["Useful Links"]; ?></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href=<?php echo "index" .  $param . "#hero" ?>><?php echo $translations["Home"]; ?></a></li>
                <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href=<?php echo "index" .  $param . "#about" ?>><?php echo $translations["About"]; ?></a></li>
                <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href=<?php echo "index" .  $param . "#services" ?>><?php echo $translations["Services"]; ?></a></li>
                <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href=<?php echo "index" .  $param . "#contact" ?>><?php echo $translations["Contact Us"]; ?></a></li>
            </ul>
          </div>

          <div class="col-lg-6 col-md-6 footer-newsletter">
            <h4><?php echo $translations["Our Newsletter"]; ?></h4>
            <p><?php echo $translations["Subscribe to our newsletter"]; ?></p>
            <form action="forms/subscribe" method="post" class="php-email-form">
              <input type="email" name="email"><input type="submit" value="<?php echo $translations["Subscribe"]; ?>">
            </form>
          </div>

        </div>

        <div class="row">
          <br>
          <div class="links-container">
              <ul>
                  <li><a href=" <?php echo "datenschutz" . $param ?>"><?php echo $translations["Data Protection"]; ?></a></li>
                  <li><a href="<?php echo "impressum" . $param ?>"><?php echo $translations["Imprint"]; ?></a></li>
                  <li><a href=" <?php echo "AGB" . $param ?>"><?php echo $translations["GTC"]; ?></a></li>
              </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <?php echo $translations["Copyright 2024"]; ?> <strong><span>NAZET GmbH</span></strong>. <?php echo $translations["All Rights Reserved"]; ?></div>
      <!-- <div class="credits">
        <?php echo $translations["Designed by"]; ?> <strong><a href="https://eg.linkedin.com/in/peterkostandy" target="_blank">Peter B. Youssef</a></strong>
    </div> -->
    </div>
  </footer><!-- End Footer -->