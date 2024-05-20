<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <title>Contact - El-Shaddaï Church</title>
  <?php include('inc/header.php'); ?>
</head>

<body data-preloader="2">
  <div class="wrapper">
    <!-- Scroll to Top -->
    <div class="scrolltotop">
      <a class="button-circle button-circle-sm button-circle-black" href="#"><i class="ti-arrow-up"></i></a>
    </div>
    <!-- end Scroll to Top -->
    <!-- Header -->
    <div class="header fixed absolute-light">
      <div class="container">
        <div class="logo">
          <img class="logo-dark" src="assets/images/logo-dark.png" alt="dark-logo" />
          <img class="logo-light" src="assets/images/logo-light.png" alt="light-logo" />
        </div>
        <div class="header-menu-wrapper">
          <!-- Menu -->
          <ul class="header-menu">
            <li class="m-item">
              <a class="m-link" href="#">Home</a>
            </li>
            <li class="m-item">
              <a class="m-link" href="about-us">About Us</a>
            </li>
            <li class="m-item">
              <a class="m-link" href="our-goal">Our Goal</a>
            </li>
            <li class="m-item">
              <a class="m-link" href="belief">Belief</a>
            </li>
            <li class="m-item">
              <a class="m-link" href="youth">Youth</a>
            </li>
            <li class="m-item">
              <a class="m-link" href="media">Media</a>
            </li>
            <li class="m-item">
              <a class="m-link" href="donation">Donation</a>
            </li>
            <li class="m-item">
              <a class="m-link active" href="contact">Contact</a>
            </li>
          </ul>
          <button class="close-button">
            <span></span>
          </button>
        </div>
        <!-- end header-menu-wrapper -->
        <!-- Menu Toggle on Mobile -->
        <button class="m-toggle">
          <span></span>
        </button>
      </div>
      <!-- end container -->
    </div>
    <!-- end Header -->

    <div class="section-lg bg-image bg-image-gradient parallax-bg" data-bg-src="assets/images/bible.jpg">
      <section>
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-12 offset-lg-1 col-xl-12 offset-xl-4">
              <a class="button-ct-outline-white-2 button-ct-xl margin-top-40 lightbox-media-link" href="https://www.youtube.com/watch?v=W0koZxBTM-0?autoplay=1">
                <span class="button-circle button-circle-xl button-circle-white button-circle-animation-drop lightbox-media-link"><i class="fas fa-play"></i></span>
              </a>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>
    </div>

    <div class="section-xs text-center">
      <div class="container">
        <div class="margin-bottom-10">
          <p class="uppercase letter-spacing-2">Contact us</p>
        </div>
        <h1 class="display-4 font-weight-medium margin-0 pacifico-regular">
          Let's talk together.
        </h1>
      </div>
      <!-- end container -->
    </div>

    <div class=" padding-top-0 bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <h3 class="font-weight-bold margin-0 padding-y-20 pacifico-regular">Phone:</h3>
            <h6>+45 42959530</h6>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <h3 class="font-weight-bold margin-0 padding-y-20 pacifico-regular">Email:</h3>
            <h6><a href="mailto:elshaddaichurch@hotmail.dk">elshaddaichurch@hotmail.dk</a></h6>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <h3 class="font-weight-bold margin-0 padding-y-20 pacifico-regular">Address:</h3>
            <h6><a href="https://www.google.com/maps/dir//Frederikssundsvej+225,+2700+K%C3%B8benhavn/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x465251839909028d:0x73b86301ee35f596?sa=X&ved=1t:707&ictx=111" target="_blank">Frederikssundsvej 225, 2700 Brønshøj</a></h6>
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>

    <!-- Google Maps -->
    <!-- <div class="container-fluid padding-0">
      <div id="map1" class="gmap gmap-xl" data-latitude="55.706400" data-longitude="12.487840"></div>
    </div> -->
    <!-- end Google maps -->

    <!-- Contact Form -->
    <div class="section-lg">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-10  col-xl-12 text-lg-center">
            <form method="post" id="contactform" class="style-2">
              <div class="form-row">
                <div class="col-12 col-sm-6">
                  <input type="text" id="name" name="name" placeholder="Name" required />
                </div>
                <div class="col-12 col-sm-6">
                  <input type="email" id="email" name="email" placeholder="E-mail adress" required />
                </div>
              </div>
              <input type="text" id="subject" name="subject" placeholder="Your subject" required />
              <textarea name="message" id="message" placeholder="Your message"></textarea>
              <button class="button button-lg button-rounded button-dark" type="submit">
                Send Message
              </button>
            </form>
            <!-- Submit result -->
            <div class="submit-result">
              <span id="success">Thank you! Your Message has been sent.</span>
              <span id="error">Something went wrong, Please try again!</span>
            </div>
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end Contact Form -->

    <!-- Footer -->
    <?php include('inc/footer.php'); ?>
    <!-- Foter -->
  </div>
  <!-- end wrapper -->

  <!-- ***** JAVASCRIPTS ***** -->
  <script src="assets/plugins/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi4SV0ZRVGoIDH2E00YtJ8Gvg67eaPG5A"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
  <script src="assets/plugins/plugins.js"></script>
  <script src="assets/js/functions.js"></script>
</body>

</html>