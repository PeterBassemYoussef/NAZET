<!DOCTYPE html>

<?php
// Check if the 'lang' parameter exists in the URL
if (isset($_GET['lang'])) {
    $currentLanguage = $_GET['lang'] === "de" ? "de" : "en";
} else {
    $currentLanguage = 'de'; // Default to German
}

if ($currentLanguage === "en") {
    include 'lang/en.php';
    $param = '?lang=en';
    $buttonText = 'Deutsch'; // Set button text to "Deutschland"
} elseif ($currentLanguage === "de") {
    include 'lang/de.php';
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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

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
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="#">NAZET GmbH</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero"><?php echo $translations["Home"]; ?></a></li>
          <li><a class="nav-link scrollto" href="#about"><?php echo $translations["About"]; ?></a></li>
          <li><a class="nav-link scrollto" href="#services"><?php echo $translations["Services"]; ?></a></li>
          <li><a class="nav-link scrollto" href="#contact"><?php echo $translations["Contact Us"]; ?></a></li>
          <li>
            <button id="lang-btn" type="button" class="get-started-btn" onclick="changeLanguage()"><?php echo $buttonText; ?></button>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <img src="assets/img/logo.png" alt="NAZET GmbH Logo" class="mb-3 img-fluid" style="width: 350px;">
      <h1><?php echo $translations["welcome"]; ?></h1>
      <h2><?php echo $translations["welcomeDesc"]; ?></h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto"><?php echo $translations["Get Started"]; ?></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo $translations["About"]; ?></h2>
          <p><?php echo $translations["aboutUsTitle"]; ?></p>
        </div>

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/about.webp" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3><?php echo $translations["shortTitle"]; ?></h3>
            <p class="fst-italic"><?php echo $translations["description"]; ?></p>
            <div class="row">
              <div class="col-lg-12">
                <ul>
                  <li><i class="bx bx-check-double"></i> <?php echo $translations["powerKey1"]; ?></li>
                  <li><i class="bx bx-check-double"></i> <?php echo $translations["powerKey2"]; ?></li>
                  <li><i class="bx bx-check-double"></i> <?php echo $translations["powerKey3"]; ?></li>
                  <li><i class="bx bx-check-double"></i> <?php echo $translations["powerKey4"]; ?></li>
                </ul>
              </div>
            </div>
            <p class=""><?php echo $translations["closingText"]; ?></p>
            <br />
            <a href="#services" class="get-started-btn scrollto"><?php echo $translations["Our Services"]; ?></a>
            <br />
          </div>

        </div>

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-emoji-smile"></i>
                  <span data-purecounter-start="0" data-purecounter-end="125" data-purecounter-duration="1" class="purecounter"></span>
                  <p><?php echo $translations["Happy Clients"]; ?></p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-journal-richtext"></i>
                  <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                  <p><?php echo $translations["Projects"]; ?></p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-clock"></i>
                  <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
                  <p><?php echo $translations["Hours Of Support"]; ?></p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-award"></i>
                  <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="purecounter"></span>
                  <p><?php echo $translations["Hard Workers"]; ?></p>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/about-boxes-1.webp" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-brush-4-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo $translations["missionTitle"]; ?></a></h5>
                <p class="card-text"><?php echo $translations["missionDescription"]; ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="assets/img/about-boxes-2.webp" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-calendar-check-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo $translations["planTitle"]; ?></a></h5>
                <p class="card-text"><?php echo $translations["planDescription"]; ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="assets/img/about-boxes-3.webp" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-movie-2-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo $translations["visionTitle"]; ?></a></h5>
                <p class="card-text"><?php echo $translations["visionDescription"]; ?></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Boxes Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo $translations["Services"]; ?></h2>
          <p><?php echo $translations["ourServicesTitle"]; ?></p>
        </div>

        <h5 class="fst-italic" data-aos="fade-up"><?php echo $translations["ourServicesDesc"]; ?></h5>
        <br />

        <div class="row" data-aos="fade-up">

          <div class="col-lg-4 col-md-6">
            <div class="service" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/services/service-1.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["service1Title"]; ?></h4>
                <span><?php echo $translations["service1Desc"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-2.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["service2Title"]; ?></h4>
                <span><?php echo $translations["service2Desc"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-3.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["service3Title"]; ?></h4>
                <span><?php echo $translations["service3Desc"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/services/service-4.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["service4Title"]; ?></h4>
                <span><?php echo $translations["service4Desc"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-5.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["service5Title"]; ?></h4>
                <span><?php echo $translations["service5Desc"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-6.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["service6Title"]; ?></h4>
                <span><?php echo $translations["service6Desc"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/services/service-7.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["service7Title"]; ?></h4>
                <span><?php echo $translations["service7Desc"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-8.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["service8Title"]; ?></h4>
                <span><?php echo $translations["service8Desc"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-9.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["service9Title"]; ?></h4>
                <span><?php echo $translations["service9Desc"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/services/service-10.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["service10Title"]; ?></h4>
                <span><?php echo $translations["service10Desc"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-11.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["service11Title"]; ?></h4>
                <span><?php echo $translations["service11Desc"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-12.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["service12Title"]; ?></h4>
                <span><?php echo $translations["service12Desc"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="100">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-13.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["service13Title"]; ?></h4>
                <span><?php echo $translations["service13Desc"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-8 col-md-12" data-aos="fade-up" data-aos-delay="100">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-14.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4>Nazet Estrichbau</h4>
                <span class="fst-italic"><?php echo $translations["serviceClosingText"]; ?></span>
              </div>
            </div>
          </div>

        </div>

        <!-- <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-laptop"></i>
              <h4><a href="#">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                non provident</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Dolor Sitema</a></h4>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad
                limino ata</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Nemo Enim</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Magni Dolore</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-clock"></i>
              <h4><a href="#">Eiusmod Tempor</a></h4>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
                eligendi</p>
            </div>
          </div>
        </div> -->

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.webp" class="testimonial-img" alt="">
                <h3>Maximilian S.</h3>
                <h4>Bauherr</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Wir haben NAZET GmbH für den Estrichbau in unserem Neubauprojekt engagiert, und das Ergebnis hat uns beeindruckt. Der Zementestrich ist perfekt verlegt, stabil und hält auch stärkeren Belastungen stand. Die Zusammenarbeit war professionell und unkompliziert. Sehr zu empfehlen!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.webp" class="testimonial-img" alt="">
                <h3>Franziska K.</h3>
                <h4>Geschäftsführerin</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Für unser Bürogebäude brauchten wir schnellen und zuverlässigen Anhydritestrich – NAZET GmbH hat das hervorragend umgesetzt. Der Estrich war schnell trocken, und die Qualität ist top! Zudem hat das Team auch unsere Wärmedämmung perfekt eingebaut. Wir sind rundum zufrieden.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.webp" class="testimonial-img" alt="">
                <h3>Laura M.</h3>
                <h4>Hausbesitzer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Wir wollten in unserem Eigenheim eine Fußbodenheizung integrieren und haben uns für Heizestrich von NAZET GmbH entschieden. Die Arbeit wurde schnell und präzise durchgeführt, und die Wärmeverteilung ist gleichmäßig und effizient. Es war die beste Entscheidung für unser Projekt!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up"">

      <div class=" section-title pb-2">
        <h2><?php echo $translations["Contact Us"]; ?></h2>
        <p><?php echo $translations["contactTitle"]; ?></p>
      </div>

      <p class="fst-italic mb-4"><?php echo $translations["contactBeginning"]; ?></p>

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
                <p>
                  <a href="https://maps.app.goo.gl/Dv1Ybk2VioSjvkKr9">iLeutweinstraße 96, 68219 Mannheim, Germany</a>
                </p>
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

        <div class="col-lg-12 mt-5">
          <p class="fst-italic text-center"><?php echo $translations["contactEnd"]; ?></p>
        </div>

      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php
    include 'partials/footer.php';
    include 'partials/cookie.php';
    include 'partials/wpp-mobile.php';
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