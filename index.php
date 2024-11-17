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
          <p><?php echo $translations["Check our Services"]; ?></p>
        </div>

        <h5 class="fst-italic" data-aos="fade-up"><?php echo $translations["Services Start"]; ?></h5>
        <br />

        <div class="row" data-aos="fade-up">

          <div class="col-lg-4 col-md-6">
            <div class="service" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/services/service-1.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["Service 1"]; ?></h4>
                <span><?php echo $translations["Service Desc 1"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-2.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["Service 2"]; ?></h4>
                <span><?php echo $translations["Service Desc 2"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-3.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["Service 3"]; ?></h4>
                <span><?php echo $translations["Service Desc 3"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/services/service-4.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["Service 4"]; ?></h4>
                <span><?php echo $translations["Service Desc 4"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-5.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["Service 5"]; ?></h4>
                <span><?php echo $translations["Service Desc 5"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-6.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["Service 6"]; ?></h4>
                <span><?php echo $translations["Service Desc 6"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/services/service-7.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["Service 7"]; ?></h4>
                <span><?php echo $translations["Service Desc 7"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-8.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["Service 8"]; ?></h4>
                <span><?php echo $translations["Service Desc 8"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-9.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["Service 9"]; ?></h4>
                <span><?php echo $translations["Service Desc 9"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/services/service-10.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["Service 10"]; ?></h4>
                <span><?php echo $translations["Service Desc 10"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-11.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["Service 11"]; ?></h4>
                <span><?php echo $translations["Service Desc 11"]; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service">
              <div class="pic"><img src="assets/img/services/service-12.webp" class="img-fluid" alt=""></div>
              <div class="service-info">
                <h4><?php echo $translations["Service 12"]; ?></h4>
                <span><?php echo $translations["Service Desc 12"]; ?></span>
              </div>
            </div>
          </div>

        </div>

        <h5 class="fst-italic" data-aos="fade-up"><?php echo $translations["Services End"]; ?></h5>

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
    <!-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                  quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                  quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                  tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                  minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                  labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check our Portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Team Section -->

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
                <p><a href="tel:49***********">+49 *** ********</a></p>
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
                <strong><?php echo $translations["Phone"]; ?>:</strong> <a href="tel:49***********"> +49 *** ********</a>
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
              <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="#hero"><?php echo $translations["Home"]; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#about"><?php echo $translations["About"]; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#services"><?php echo $translations["Services"]; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#contact"><?php echo $translations["Contact Us"]; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="nav-link" href=<?php echo "datenschutz" .  $param ?>><?php echo $translations["Data Protection"]; ?></a></li>
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
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <?php echo $translations["Copyright 2023"]; ?> <strong><span>NAZET GmbH</span></strong>. <?php echo $translations["All Rights Reserved"]; ?></div>
      <!-- <div class="credits">
        <?php echo $translations["Designed by"]; ?> <strong><a href="https://eg.linkedin.com/in/peterkostandy" target="_blank">Peter B. Youssef</a></strong>
    </div> -->
    </div>
  </footer><!-- End Footer -->

  <?php
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