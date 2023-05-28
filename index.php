<?php
session_start();
if(!file_exists('users/' . $_SESSION['username'] . '.xml')) {
    header('Location: login.php');
    die;
}
?>


<?php
$img1 = "img/1logo.png";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home</title>
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
                <a href="index.php" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class='fas fa-map-marker' style='font-size:45Spx;color:orange'></i><?php echo " Marinduque"?></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link active"><?php echo "Home"?></a>
                        <a href="about.php" class="nav-item nav-link"><?php echo "About"?></a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo "Mayors"?></a>
                            <div class="dropdown-menu m-0">
                                <a href="boacmayor.php" class="dropdown-item"><?php echo "Armi Carrion"?></a>
                                <a href="mogpogmayor.php" class="dropdown-item"><?php echo "Leo Livelo"?></a>
                                <a href="santacruzmayor.php" class="dropdown-item"><?php echo "Marisa Red"?></a>
                                <a href="torrijosmayor.php" class="dropdown-item"><?php echo "Lorna Velasco"?></a>
                                <a href="gasanmayor.php" class="dropdown-item"><?php echo "Rolando Tolentino"?></a>
                                <a href="buenavistamayor.php" class="dropdown-item"><?php echo "Bong Siena"?></a>
                            </div>
                        </div>
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
                        <a href="contact.php" class="nav-item nav-link"><?php echo "Contact"?></a>
                    </div>
                    <a href="logout.php" class="btn btn-primary py-2 px-4"><?php echo "Sign Out"?></a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                        <p class="text-white animated slideInLeft mb-4 pb-2">Welcome,  <?php echo $_SESSION['username'];?></p>
                            <h1 class="display-3 text-white animated slideInLeft"><?php echo "Hamos Na dini"?><br><?php echo "sa Marinduque!"?></h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2"><?php echo "Halina't sama-sama nating tuklasin ang ipinagmamalaking ganda ng Marinduque"?></p>
                            <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"><?php echo "Explore"?></a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src=<?php echo "img/1logo.png"?> alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/moriones01.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/moriones02.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/moriones05.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/moriones04.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal"><?php echo "The Home of"?></h5>
                        <h1 class="mb-4"><?php echo "Moriones Lenten Rites"?></h1>
                        <p class="mb-4"><?php echo "The Moriones Festival is celebrated every Holy Week by Roman Catholics in the province of Marindque. Just like many festivals in the Philippines, the Moriones Festival is a colorful celebration that centers on the costumes 
                        and masks worn by penitents who march around the towns of the province as Roman soldiers."?></p>
                        <p class="mb-4"><?php echo "The Moriones mask is usually made of wood carved with the face of a Roman soldier. Attached to the mask is the actual helmet with a crest made of feathers or horse hair."?></p>
                        <div class="row g-4 mb-4">
                        <div> 
                        <a class="btn btn-primary py-3 px-5 mt-2" href="about.php"><?php echo "Read More"?></a>
                        
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
              
        <!-- About End -->

        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal"><?php echo "Visit the Pages"?></h5>
                    <h1 class="mb-5"><?php echo "EXPLORE OUR TOWNS"?></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <a href="boac.php"><img class="img-fluid" src=<?php echo "img/boac1.jpg"?> alt=""></a>
                            </div>
                                <a href="boac.php"><h5 class="mb-0"><?php echo "BOAC"?></h5></a>
                            <small><?php echo "The Capital Town of Marinduque and the 
                            business,financial and economic center of the province. It has 61 Barangays grouped into 7 districts."?></small>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="boac.php">Click to View More</a> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                            <a href="mogpog.php"> <img class="img-fluid" src=<?php echo "img/mogpog1.jpg"?> alt=""></a> 
                            </div>
                                <a href="mogpog.php"><h5 class="mb-0"><?php echo "MOGPOG"?></h5></a> 
                            <small><?php echo "A coastal municipality in the island province of Marinduque. One of the country’s finest and probably the most picturesque of all natural harbors. "?></small>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="mogpog.php">Click to View More</a> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <a href="santacruz.php"><img class="img-fluid" src=<?php echo "img/santacruz1.jpg"?> alt=""></a> 
                            </div>
                                <a href="santacruz.php"><h5 class="mb-0"><?php echo "SANTA CRUZ"?></h5></a> 
                            <small><?php echo "The municipal jurisdiction also includes the islands of Maniwaya, Mongpong, Salomague, and Santa Cruz, as well as several minor islets."?></small>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="santacruz.php">Click to View More</a> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <a href="torrijos.php"><img class="img-fluid" src=<?php echo "img/torrijos1.jpg"?> alt=""></a> 
                            </div>
                                <a href="torrijos.php"><h5 class="mb-0"><?php echo "TORRIJOS"?></h5></a> 
                            <small><?php echo "A long stretch of white-sand beach in Poctoy, Torrijos town is considered the finest and most accessible white sand beach in mainland Marinduque."?></small>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="torrijos.php">Click to View More</a> 
                            </div>
                        </div>
                    </div>

                    </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <a href="gasan.php"><img class="img-fluid" src=<?php echo "img/gasan1.jpg"?> alt=""></a>
                            </div>
                                <a href="gasan.php"><h5 class="mb-0"><?php echo "GASAN"?></h5></a>
                            <small><?php echo "The municipality is bounded by the provincial capital, Boac, to the north and east, by Buenavista. It is the second-oldest municipality in Marinduque, after Boac. 
                            Residents of Gasan are called Gaseños."?></small>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="gasan.php">Click to View More</a> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                            <a href="buenavista.php"> <img class="img-fluid" src=<?php echo "img/buenavista1.jpg"?> alt=""></a> 
                            </div>
                                <a href="buenavista.php"><h5 class="mb-0"><?php echo "BUENAVISTA"?></h5></a> 
                            <small><?php echo "This smallest, once-forgotten town of Buenavista, small but the most scenic place in Marinduque where the Malindig volcano looms over the lives of the peace-loving and culture-bound people living there."?></small>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="buenavista.php">Click to View More</a> 
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-down"></i></a>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><?php echo "Quick Links"?></h4>
                        <a class="btn btn-link" href="index.php"><?php echo "Home"?></a>
                        <a class="btn btn-link" href="about.php"><?php echo "About Us"?></a>
                        <a class="btn btn-link" href="contact.php"><?php echo "Contact Us"?></a>
                        <a class="btn btn-link" href="reviews.php"><?php echo "Reviews"?></a>
                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><?php echo "Contact"?></h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo "Philippines"?></p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo "+012 345 67890"?></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo "marinduque@social.com"?></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><?php echo "Terms of Use"?></h4>
                        <?php echo "<br> All text, photos, videos, files, applications, html codes, and other intellectual property rights (registered and unregistered) in and on our website are for personal use only."?></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><?php echo "Made By"?></h4>
                        <p><?php echo "Mark Joseph Largo <br>
                        Mark Angelo Romasanta <br>
                        Michaela Ortega <br>
                        | In compliance for IPT Final Project @ 2023

                        "?></p>
                        
                    </div>
                </div>
            </div>
            <div class="container">

        </div>
        <!-- Footer End -->

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