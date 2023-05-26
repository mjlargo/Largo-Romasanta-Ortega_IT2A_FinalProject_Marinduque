<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Marinduque</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only"><?php echo "Loading..."?></span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class='fas fa-map-marker' style='font-size:45Spx;color:orange'></i><?php echo "Marinduque"?></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link"><?php echo "Home"?></a>
                        <a href="about.php" class="nav-item nav-link"><?php echo "About"?></a>
                        <a href="service.php" class="nav-item nav-link"><?php echo "Mayors"?></a>
                        <a href="menu.php" class="nav-item nav-link"><?php echo "Menu"?></a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo "Towns"?></a>
                            <div class="dropdown-menu m-0">
                                <a href="boac.php" class="dropdown-item"><?php echo "Boac"?></a>
                                <a href="mogpog.php" class="dropdown-item"><?php echo "Mogpog"?></a>
                                <a href="santacruz.php" class="dropdown-item active"><?php echo "Santa Cruz"?></a>
                                <a href="torrijos.php" class="dropdown-item"><?php echo "Torrijos"?></a>
                                <a href="gasan.php" class="dropdown-item"><?php echo "Gasan"?></a>
                                <a href="buenavista.php" class="dropdown-item"><?php echo "Buenavista"?></a>
                            
                            </div>
                        </div>
                        <a href="reviews.php" class="nav-item nav-link"><?php echo "Reviews"?></a>
                        <a href="contact.php" class="nav-item nav-link"><?php echo "Contact"?></a>
                    </div>
                    <a href="sign.php" class="btn btn-primary py-2 px-4"><?php echo "Sign In"?></a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo "Santa Cruz Marinduque"?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#"><?php echo "Santa Cruz is a municipality located in the province of Marinduque in the Philippines. It is situated on the central part of the island of Marinduque, 
                              which is known for its scenic landscapes, serene beaches, and rich cultural heritage."?></a></li>
                            
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


           <!----- FOODS  ----->

    <section class="food">
      <h2><?php echo "Festivals!"?></h2>
      <p>
      <?php echo "Philippines are not only known by its popular tourist Spots but also in foods."?>
      </p>

      <div class="row">
        <div class="food-col">
          <img src=<?php echo"img/sinigang.jpg"?> alt="" />
          <h3><?php echo "Sinigang na Hipon In Luzon"?></h3>
          <p>
          <?php echo "Sinigang is another popular and important dish in Filipino cuisine. 
            It refers to a type of soup or stew characterized by its sour and savory flavors. 
            Sinigang is usually made with different vegetables and some type of meat or seafood 
            like pork, beef, shrimp, or fish. "?>
          </p>
        </div>
        <div class="food-col">
          <img src=<?php echo "img/vc.jpeg"?> alt="" />
          <h3><?php echo "Bulalo with Lemongrass and Ginger In Visayas"?></h3>
          <p>
          <?php echo "The lemongrass lends a subtle citrusy element while the ginger brings forth a zesty kick, 
            making enjoying this fork-tender bulalo an even more reinvigorating experience."?>
          </p>
        </div>
        <div class="food-col">
          <img src=<?php echo "img/vc.jpeg"?> alt="" />
          <h3><?php echo "Curacha In Mindanao"?></h3>
          <p>
          <?php echo "Curacha is famous in Mindanao, especially in Zamboanga. It’s a spanner crab or red frog
             crab, a crustacean hybrid native to the waters of 
            Zamboanga and Sulu. It can be cooked with sauce or steamed."?>
          </p>
        </div>
      </div>
    </section>

    <section class="food">
      <h2><?php echo "Tourist Spots"?></h2>
      <p>
      <?php echo " Philippines are not only known by its popular tourist Spots but also in foods."?>
      </p>

      <div class="row">
        <div class="food-col">
          <img src=<?php echo"img/bagumbungan1.jpg"?> alt="" />
          <h3><?php echo "Bagumbungan Cave"?></h3>
          <p>
          <?php echo "Bagumbungan Cave in Sitio Puti Brgy. San Isidro, Sta. Cruz Marinduque is for sure one of the best cave here in the Philippines. It is a 1.9 km. long cave and some part are still unexplored. It is protected by the Department of Environment and Natural Resources (DENR) with the help of San Isidro (Local Government Unit) to spare the cave from exploitation. 
          According to our guide, it was discovered 7 years ago by the cave enthusiast and a tourism officer."?>
          </p>
        </div>
        <div class="food-col">
          <img src=<?php echo "img/maniwaya2.jpg"?> alt="" />
          <h3><?php echo "Maniwaya Island"?></h3>
          <p>
          <?php echo "Maniwaya Island, Marinduque’s prime beach destination. Situated off the coast of the town of Santa Cruz on the eastern part of Marinduque, Maniwaya Island beckons with its white sandy beach,
          disappearing sandbar and other nearby attractions that will surely synthesize your love for the salt water."?>
          </p>
        </div>
        <div class="food-col">
          <img src=<?php echo "img/panuluyan0.jpg"?> alt="" />
          <h3><?php echo "Panuluyan Farmstay"?></h3>
          <p>
          <?php echo "The very vision of Panuluyan Farmstay originates from the beautiful word “Panunuluyan” which symbolizes the Filipino culture of coming home,
           sleeping soundly in a kubo, and just hanging out at home with your loved ones over local home-cooked meals. 
          This is exactly the concept of the place – they want the guests to experience peaceful rustic farm living"?>
          </p>
        </div>
      </div>
    </section>

    <section class="food">
      <h2><?php echo "Best Food that Marinduque can Offer!"?></h2>
      <p>
      <?php echo "Philippines are not only known by its popular tourist Spots but also in foods."?>
      </p>

      <div class="row">
        <div class="food-col">
          <img src=<?php echo"img/Uraro.jpg"?> alt="" />
          <h3><?php echo "Arrowroot cookies"?></h3>
          <p>
          <?php echo "Arrowroot cookies, or as the Marinduqueños call it, arurut, are dry, powdery, bite-sized flower-shaped cookies made from arrowroot flour. Travelers can buy these cookies in packages. 
          Locals often point to Rejano’s Bakeries as having the best arrowroot cookies in Marinduque."?>
          </p>
        </div>
        <div class="food-col">
          <img src=<?php echo "img/kalamay1.jpg"?> alt="" />
          <h3><?php echo "Kalamay"?></h3>
          <p>
          <?php echo "Kalamay-dampa is the popular Marinduque variety of the more known kalamay-hati. Kalamay is the general term for this typical recipe of both the variety of kalamay-dampa and kalamay-hati. Kalamay is made up of ground glutinous rice, coconut milk, and brown sugar.
           It’s popularly served in a coconut shell or in slices on banana leaves."?>
          </p>
        </div>
        <div class="food-col">
          <img src=<?php echo "img/Laing.jpg"?> alt="" />
          <h3><?php echo "Laing"?></h3>
          <p>
          <?php echo "There are loads of laing recipes authentic to the different regions of the Philippines.
           In Marinduque, they have their own native laing recipe or what they also call pinaso na gabi. Marinduque’s delicious native laing recipe uses both gabi (also known as taro) leaves and roots. 
          These ingredients are cooked with coconut milk."?>
          </p>
        </div>
      </div>
    </section>
        <!-- FOODS ENDS -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><?php echo "Company"?></h4>
                        <a class="btn btn-link" href=""><?php echo "About Us"?></a>
                        <a class="btn btn-link" href=""><?php echo "Contact Us"?></a>
                        <a class="btn btn-link" href=""><?php echo "Reservation"?></a>
                        <a class="btn btn-link" href=""><?php echo "Privacy Policy"?></a>
                        <a class="btn btn-link" href=""><?php echo "Terms & Condition"?></a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><?php echo "Contact"?></h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo "123 Street, New York, USA"?></p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo "+012 345 67890"?></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo "info@example.com"?></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><?php echo "Opening"?></h4>
                        <h5 class="text-light fw-normal"><?php echo "Monday - Saturday"?></h5>
                        <p><?php echo "09AM - 09PM"?></p>
                        <h5 class="text-light fw-normal"><?php echo "Sunday"?></h5>
                        <p><?php echo "10AM - 08PM"?></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><?php echo "Newsletter"?></h4>
                        <p><?php echo "Dolor amet sit justo amet elitr clita ipsum elitr est."?></p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"><?php echo "SignUp"?></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#"><?php echo "Your Site Name"?></a>, <?php echo "All Right Reserved."?>
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://phpcodex.com/credit-removal". Thank you for your support. ***/-->
							<?php echo "Designed By"?> <a class="border-bottom" href="https://phpcodex.com"><?php echo "PHP Codex"?></a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href=""><?php echo "Home"?></a>
                                <a href=""><?php echo "Cookies"?></a>
                                <a href=""><?php echo "Help"?></a>
                                <a href=""><?php echo "FQAs"?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>