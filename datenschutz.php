<!DOCTYPE html>

<?php
// Check if the 'lang' parameter exists in the URL
if (isset($_GET['lang'])) {
  $currentLanguage = $_GET['lang'] === "de" ? "de" : "en";
} else {
  $currentLanguage = 'de'; // Default to German
}

if ($currentLanguage === "en") {
  include('lang/en.php');
  $param = '?lang=en';
  $buttonText = 'Deutschland'; // Set button text to "Deutschland"
} elseif ($currentLanguage === "de") {
  include('lang/de.php');
  $param = '?lang=de';
  $buttonText = 'English'; // Set button text to "English"
}
?>

<html lang=<?php echo $currentLanguage; ?>>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NAZET GmbH - <?php echo $translations["title"]; ?></title>
  <meta content="<?php echo $translations["metaDescription"]; ?>" name="description">
  <meta content="<?php echo $translations["metaKeywords"]; ?>" name="keywords">
  <meta content="Peter B. Kostandy [www.linkedin.com/in/peterkostandy]" name="Author">

  <!-- meta -->
  <meta property="og:title" content="NAZET GmbH - <?php echo $translations["title"]; ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="<?php echo $translations["metaDescription"]; ?>">
  <meta property="og:url" content="https://nazet.de/" />
  <meta property="og:image" content="assets/img/meta-cover.webp" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="800" />

  <!-- twittermeta -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="NAZET GmbH - <?php echo $translations["title"]; ?>">
  <meta name="twitter:site" content="@nazet.de">
  <meta name="twitter:description" content="<?php echo $translations["metaDescription"]; ?>">
  <meta name="twitter:image" content="assets/img/meta-cover.webp">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="#">NAZET GmbH</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href=<?php echo "index" .  $param . "#hero" ?>><?php echo $translations["Home"]; ?></a></li>
          <li><a class="nav-link scrollto" href=<?php echo "index" .  $param . "#about" ?>><?php echo $translations["About"]; ?></a></li>
          <li><a class="nav-link scrollto" href=<?php echo "index" .  $param . "#services" ?>><?php echo $translations["Services"]; ?></a></li>
          <li><a class="nav-link scrollto" href=<?php echo "index" .  $param . "#contact" ?>><?php echo $translations["Contact Us"]; ?></a></li>
          <li>
            <button id="lang-btn" type="button" class="get-started-btn" onclick="changeLanguage()"><?php echo $buttonText; ?></button>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $translations["Data Protection"]; ?></h2>
          <ol>
            <li><a href="index"><?php echo $translations["Home"]; ?></a></li>
            <li><?php echo $translations["Data Protection"]; ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <p class="pre_class fst-italic"><?php echo $translations["Data Protection Text"]; ?></p>
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up"">

    <div class=" section-title">
        <h2><?php echo $translations["Contact"]; ?></h2>
        <p><?php echo $translations["Contact Us"]; ?></p>
      </div>

      <div id="map" class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.3867051488055!2d8.5261873!3d49.4205027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4797c8f6f4bd89b5%3A0x898e2bca8ac38d3c!2sLeutweinstra%C3%9Fe%2096%2C%2068219%20Mannheim%2C%20Germany!5e0!3m2!1sen!2seg!4v1731325355420!5m2!1sen!2seg" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3><?php echo $translations["Our Address"]; ?></h3>
                <p>Leutweinstraße 96, <br>68219 Mannheim, Germany</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3><?php echo $translations["Email Us"]; ?></h3>
                <p>
                  <a href="mailto:info@nazet.de">info@nazet.de</a>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3><?php echo $translations["Call Us"]; ?></h3>
                <p><a href="tel:4917634634179">+49 176 34634179</a></p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <form action="forms/contact" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo $translations["Your Name"]; ?>" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $translations["Your Email"]; ?>" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="<?php echo $translations["Subject"]; ?>" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="<?php echo $translations["Message"]; ?>" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading"><?php echo $translations["Loading"]; ?></div>
              <div class="error-message"><?php echo $translations["There was an error in sending your message"]; ?></div>
              <div class="sent-message"><?php echo $translations["Your message has been sent. Thank you"]; ?></div>
            </div>
            <div class="text-center"><button type="submit"><?php echo $translations["Send Message"]; ?></button></div>
          </form>
        </div>

      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php
    include 'partials/footer.php';
    include('partials/cookie.php');
    include('partials/wpp-mobile.php');
  ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>