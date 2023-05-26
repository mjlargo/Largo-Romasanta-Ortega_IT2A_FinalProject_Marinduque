<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo "Restoran - Bootstrap Restaurant Template"?></title>
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
                                <a href="santacruz.php" class="dropdown-item"><?php echo "Santa Cruz"?></a>
                                <a href="torrijos.php" class="dropdown-item"><?php echo "Torrijos"?></a>
                                <a href="gasan.php" class="dropdown-item"><?php echo "Gasan"?></a>
                                <a href="buenavista.php" class="dropdown-item"><?php echo "Buenavista"?></a>
                            </div>
                        </div>
                        <a href="reviews.php" class="nav-item nav-link"><?php echo "Reviews"?></a>
                        <a href="contact.php" class="nav-item nav-link active"><?php echo "Contact"?></a>
                    </div>
                    <a href="sign.php" class="btn btn-primary py-2 px-4"><?php echo "Sign In"?></a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo "Contact Us"?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#"><?php echo "Home"?></a></li>
                            <li class="breadcrumb-item"><a href="#"><?php echo "Pages"?></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"><?php echo "Contact"?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal"><?php echo "Contact Us"?></h5>
                    <h1 class="mb-5"><?php echo "Contact For Any Query"?></h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary"><?php echo "Booking"?></h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i><?php echo "book@example.com"?></p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary"><?php echo "General"?></h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i><?php echo "info@example.com"?></p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary"><?php echo "Technical"?></h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i><?php echo "tech@example.com"?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d496833.613013647!2d121.66528578665664!3d13.380554765695688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a318a5c1f65dbf%3A0xe9feb3ea5b6e3b7b!2sMarinduque!5e0!3m2!1sen!2sph!4v1684941446908!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name"><?php echo "Your Name"?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email"><?php echo "Your Email"?></label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject"><?php echo "Subject"?></label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message"><?php echo "Message"?></label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit"><?php echo "Send Message"?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


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
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#"><?php echo "Your Site Name"?></a>,<?php echo " All Right Reserved."?> 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://phpcodex.com/credit-removal". Thank you for your support. ***/-->
							<?php echo "Designed By"?> <a class="border-bottom" href="https://phpcodex.com">PHP Codex</a>
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

</php>