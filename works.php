<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="about/ID1.png" type="image/x-icon">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/project.css">
    <link rel="stylesheet" href="css/mediaquery.css">


    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css for Smooth Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


</head>


<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <!-- Logo and Brand -->
            <a class="navbar-brand animate__animated animate__fadeInLeft" href="index.php">
                <h5>MY <span>PORTFOLIO</span></h5>
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="bar top-bar"></span>
                <span class="bar middle-bar"></span>
                <span class="bar bottom-bar"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link animate__animated animate__fadeInRight"
                            href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link animate__animated animate__fadeInLeft"
                            href="works.php">WORKS</a></li>
                    <li class="nav-item"><a class="nav-link animate__animated animate__fadeInRight"
                            href="skills.php">SKILLS</a></li>
                    <li class="nav-item"><a class="nav-link animate__animated animate__fadeInRight"
                            href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <body>
        <section class="projects" id="skills">
            <div class="container">

                <!-- Section Title -->
                <div class="text-center mb-5">
                    <h3 class="fw-bold text-white">MY PROJECTS</h3>
                    <hr class="mx-auto" style="height:3px;background:#fff;width:65px;">
                    <p class="paragraph-text text-white mt-5 text-center">
                        A collection of academic and personal projects showcasing my skills in
                        front-end development and UI design.
                    </p>
                </div>

                <!-- Project Grid -->
                <div class="row g-4">

                    <!-- Project 1 Card -->
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="projects/amorehome.png" alt="Amore Bookshop Home">

                                <div class="project-overlay">
                                    <button class="btn btn-light btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#projectPreviewModal1">
                                        Preview
                                    </button>

                                    <a href="https://github.com/sachiicxz/amore_bookshop" target="_blank"
                                        class="btn btn-outline-light btn-sm">
                                        GitHub
                                    </a>
                                </div>
                            </div>

                            <div class="project-content">
                                <h5>Amore Bookshop</h5>
                                <p>E-commerce bookshop system with authentication and UI flows.</p>

                                <div class="project-tags">
                                    <span>HTML</span>
                                    <span>CSS</span>
                                    <span>PHP</span>
                                    <span>JavaScript</span>
                                    <span>Bootstrap</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 Card -->
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="projects/HOME.png" alt="Amore Bookshop Home">

                                <div class="project-overlay">
                                    <button class="btn btn-light btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#projectPreviewModal2">
                                        Preview
                                    </button>

                                    <a href="https://github.com/sachiicxz/solanavierra" target="_blank"
                                        class="btn btn-outline-light btn-sm">
                                        GitHub
                                    </a>
                                </div>
                            </div>

                            <div class="project-content">
                                <h5>Solana Vierra Hotel</h5>
                                <p>A modern hotel website showcasing elegant rooms, amenities, and seamless user
                                    experience.</p>

                                <div class="project-tags">
                                    <span>HTML</span>
                                    <span>CSS</span>
                                    <span>JavaScript</span>
                                    <span>Bootstrap</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 Card -->
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="projects/petshop1.jpg" alt="Amore Bookshop Home">

                                <div class="project-overlay">
                                    <button class="btn btn-light btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#projectPreviewModal3">
                                        Preview
                                    </button>

                                    <a href="https://github.com/sachiicxz/ariveli_petshop" target="_blank"
                                        class="btn btn-outline-light btn-sm">
                                        GitHub
                                    </a>
                                </div>
                            </div>

                            <div class="project-content">
                                <h5>Ariveli Pet Shop</h5>
                                <p>A user-friendly pet shop platform designed for product browsing and customer
                                    engagement.</p>

                                <div class="project-tags">
                                    <span>HTML</span>
                                    <span>CSS</span>
                                    <span>PHP</span>
                                    <span>JavaScript</span>
                                    <span>Bootstrap</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 4 Card -->
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="projects/LOGIN_WEB.png" alt="Amore Bookshop Home">

                                <div class="project-overlay">
                                    <button class="btn btn-light btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#projectPreviewModal4">
                                        Preview
                                    </button>

                                    <a href="https://github.com/sachiicxz/university_portal" target="_blank"
                                        class="btn btn-outline-light btn-sm">
                                        GitHub
                                    </a>
                                </div>
                            </div>

                            <div class="project-content">
                                <h5>University Portal</h5>
                                <p>A centralized academic portal for managing student information, records, and
                                    university services.</p>

                                <div class="project-tags">
                                    <span>HTML</span>
                                    <span>CSS</span>
                                    <span>PHP</span>
                                    <span>JavaScript</span>
                                    <span>Bootstrap</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 5 Card -->
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="projects/HOME_PF.png" alt="Amore Bookshop Home">

                                <div class="project-overlay">
                                    <button class="btn btn-light btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#projectPreviewModal5">
                                        Preview
                                    </button>

                                    <a href="https://github.com/sachiicxz/amore_bookshop" target="_blank"
                                        class="btn btn-outline-light btn-sm">
                                        GitHub
                                    </a>
                                </div>
                            </div>

                            <div class="project-content">
                                <h5>My First Portfolio</h5>
                                <p>My first personal website highlighting my journey, skills, and passion for web
                                    development.</p>

                                <div class="project-tags">
                                    <span>HTML</span>
                                    <span>CSS</span>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Project 6 Card -->
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="projects/P1.png" alt="Amore Bookshop Home">

                                <div class="project-overlay">
                                    <button class="btn btn-light btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#projectPreviewModal6">
                                        Preview
                                    </button>

                                    <a href="projects/ITEC-80 PROTOTYPE.pdf" target="_blank" rel="noopener noreferrer"
                                        class="btn btn-outline-light btn-sm">
                                        View PDF
                                    </a>
                                </div>
                            </div>

                            <div class="project-content">
                                <h5>Mobile Bank Prototype</h5>
                                <p>A mobile prototype designed using Canva, focusing on a clean layout, intuitive
                                    navigation, and visually appealing UI elements.</p>

                                <div class="project-tags">
                                    <span>Canva</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROJECT 1 MODAL -->
        <div class="modal fade" id="projectPreviewModal1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content bg-dark text-white">

                    <div class="modal-header border-0">
                        <h5 class="modal-title">Amore Bookshop – Project Preview</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div id="projectCarousel1" class="carousel slide" data-bs-ride="carousel">

                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button data-bs-target="#projectCarousel1" data-bs-slide-to="0" class="active"></button>
                                <button data-bs-target="#projectCarousel1" data-bs-slide-to="1"></button>
                                <button data-bs-target="#projectCarousel1" data-bs-slide-to="2"></button>
                                <button data-bs-target="#projectCarousel1" data-bs-slide-to="3"></button>
                                <button data-bs-target="#projectCarousel1" data-bs-slide-to="4"></button>
                                <button data-bs-target="#projectCarousel1" data-bs-slide-to="5"></button>
                                <button data-bs-target="#projectCarousel1" data-bs-slide-to="6"></button>
                            </div>

                            <!-- Slides -->
                            <div class="carousel-inner rounded">

                                <div class="carousel-item active">
                                    <img src="projects/amoreregister.png" class="d-block w-100" alt="Register Page">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/amorelogin.png" class="d-block w-100" alt="Login Page">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/amoreforgot.png" class="d-block w-100" alt="Forgot Password">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/forgotsent.png" class="d-block w-100" alt="Email Sent">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/amorehome.png" class="d-block w-100" alt="Home Page">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/readlist.png" class="d-block w-100" alt="Readlist">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/contact&footer.png" class="d-block w-100" alt="Contact Page">
                                </div>

                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel1"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel1"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- PROJECT 2  MODAL  -->
        <div class="modal fade" id="projectPreviewModal2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content bg-dark text-white">

                    <div class="modal-header border-0">
                        <h5 class="modal-title">Solana Vierra Hotel – Project Preview</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div id="projectCarousel2" class="carousel slide" data-bs-ride="carousel">

                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button data-bs-target="#projectCarousel2" data-bs-slide-to="0" class="active"></button>
                                <button data-bs-target="#projectCarousel2" data-bs-slide-to="1"></button>
                                <button data-bs-target="#projectCarousel2" data-bs-slide-to="2"></button>
                                <button data-bs-target="#projectCarousel2" data-bs-slide-to="3"></button>
                                <button data-bs-target="#projectCarousel2" data-bs-slide-to="4"></button>
                                <button data-bs-target="#projectCarousel2" data-bs-slide-to="5"></button>
                            </div>

                            <!-- Slides -->
                            <div class="carousel-inner rounded">

                                <div class="carousel-item active">
                                    <img src="projects/HOME.png" class="d-block w-100" alt="Register Page">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/HERO.png" class="d-block w-100" alt="Login Page">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/FEATURES.png" class="d-block w-100" alt="Forgot Password">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/FAQS.png" class="d-block w-100" alt="Email Sent">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/RATINGS.png" class="d-block w-100" alt="Home Page">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/BOOKING.png" class="d-block w-100" alt="Readlist">
                                </div>
                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel2"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel2"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PROJECT 3  MODAL  -->
        <div class="modal fade" id="projectPreviewModal3" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content bg-dark text-white">

                    <div class="modal-header border-0">
                        <h5 class="modal-title">Ariveli Pet Shop – Project Preview</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div id="projectCarousel3" class="carousel slide" data-bs-ride="carousel">

                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button data-bs-target="#projectCarousel3" data-bs-slide-to="0" class="active"></button>
                                <button data-bs-target="#projectCarousel3" data-bs-slide-to="1"></button>
                                <button data-bs-target="#projectCarousel3" data-bs-slide-to="2"></button>
                            </div>

                            <!-- Slides -->
                            <div class="carousel-inner rounded">

                                <div class="carousel-item active">
                                    <img src="projects/petshop1.jpg" class="d-block w-100" alt="Register Page">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/petshop2.jpg" class="d-block w-100" alt="Login Page">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/petshop3.jpg" class="d-block w-100" alt="Forgot Password">
                                </div>
                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel3"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel3"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- PROJECT 4  MODAL  -->
        <div class="modal fade" id="projectPreviewModal4" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content bg-dark text-white">

                    <div class="modal-header border-0">
                        <h5 class="modal-title">University Portal – Project Preview</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div id="projectCarousel4" class="carousel slide" data-bs-ride="carousel">

                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button data-bs-target="#projectCarousel4" data-bs-slide-to="0" class="active"></button>
                                <button data-bs-target="#projectCarousel4" data-bs-slide-to="1"></button>
                                <button data-bs-target="#projectCarousel4" data-bs-slide-to="2"></button>
                                <button data-bs-target="#projectCarousel4" data-bs-slide-to="3"></button>
                                <button data-bs-target="#projectCarousel4" data-bs-slide-to="4"></button>
                                <button data-bs-target="#projectCarousel4" data-bs-slide-to="5"></button>
                            </div>

                            <!-- Slides -->
                            <div class="carousel-inner rounded">

                                <div class="carousel-item active">
                                    <img src="projects/LOGIN_WEB.png" class="d-block w-100" alt="Register Page">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/DASHBOARD.png" class="d-block w-100" alt="Login Page">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/SCHED.png" class="d-block w-100" alt="Forgot Password">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/MODULE.png" class="d-block w-100" alt="Forgot Password">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/PROFILE.png" class="d-block w-100" alt="Forgot Password">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/BULLETIN.png" class="d-block w-100" alt="Forgot Password">
                                </div>
                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel4"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel4"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- PROJECT 5  MODAL  -->
        <div class="modal fade" id="projectPreviewModal5" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content bg-dark text-white">

                    <div class="modal-header border-0">
                        <h5 class="modal-title">My First Portfolio – Project Preview</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div id="projectCarousel5" class="carousel slide" data-bs-ride="carousel">

                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button data-bs-target="#projectCarousel5" data-bs-slide-to="0" class="active"></button>
                                <button data-bs-target="#projectCarousel5" data-bs-slide-to="1"></button>
                                <button data-bs-target="#projectCarousel5" data-bs-slide-to="2"></button>
                            </div>

                            <!-- Slides -->
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img src="projects/HOME_PF.png" class="d-block w-100" alt="Forgot Password">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/ABOUT_PF.png" class="d-block w-100" alt="Forgot Password">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/GALLERY_PF.png" class="d-block w-100" alt="Forgot Password">
                                </div>
                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel5"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel5"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PROJECT 6  MODAL  -->
        <div class="modal fade" id="projectPreviewModal6" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content bg-dark text-white">

                    <div class="modal-header border-0">
                        <h5 class="modal-title">Mobile Bnak Prototype – Project Preview</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div id="projectCarousel6" class="carousel slide" data-bs-ride="carousel">

                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button data-bs-target="#projectCarousel6" data-bs-slide-to="0" class="active"></button>
                                <button data-bs-target="#projectCarousel6" data-bs-slide-to="1"></button>
                                <button data-bs-target="#projectCarousel6" data-bs-slide-to="2"></button>
                                <button data-bs-target="#projectCarousel6" data-bs-slide-to="3"></button>
                                <button data-bs-target="#projectCarousel6" data-bs-slide-to="4"></button>
                                <button data-bs-target="#projectCarousel6" data-bs-slide-to="5"></button>
                                <button data-bs-target="#projectCarousel6" data-bs-slide-to="6"></button>
                            </div>

                            <!-- Slides -->
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img src="projects/P1.png" class="d-block w-100" alt="Forgot Password">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/P2.png" class="d-block w-100" alt="Forgot Password">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/P3.png" class="d-block w-100" alt="Forgot Password">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/P4.png" class="d-block w-100" alt="Forgot Password">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/P5.png" class="d-block w-100" alt="Forgot Password">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/P6.png" class="d-block w-100" alt="Forgot Password">
                                </div>

                                <div class="carousel-item">
                                    <img src="projects/P7.png" class="d-block w-100" alt="Forgot Password">
                                </div>
                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel6"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel6"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer class="footer">
            <div class="container">

                <!-- Footer Top -->
                <div class="footer-top">

                    <!-- Left: Branding -->
                    <div class="footer-brand">
                        <h4>Divina Gracia Corroz</h4>
                        <p>BSIT Student</p>
                    </div>

                    <div class="footer-links">
                        <h6>Quick Links</h6>
                        <ul>
                            <li><a href="index.php">About</a></li>
                            <li><a href="works.php">Works</a></li>
                            <li><a href="skills.php">Skills</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>

                    <div class="footer-contact">
                        <h6>Let's Work Together</h6>
                        <div class="media-icons">
                            <a href="https://facebook.com/riyuuio" target="_blank"><i class="bi bi-facebook"></i></a>
                            <a href="https://instagram.com/sachiiczx" target="_blank"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://twitter.com/sachiicxz" target="_blank"><i class="bi bi-twitter"></i></a>
                            <a href="https://github.com/sachiicxz" target="_blank"><i class="bi bi-github"></i></a>
                            <a href="https://www.linkedin.com/in/divina-gracia-corroz-a0b0732bb/" target="_blank">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        </div>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=corrozdivina14@gmail.com"
                            target="_blank">
                            <button class="hire-btn">Hire Me</button>
                        </a>
                    </div>
                </div>
            </div>

            <hr>

            <!-- Bottom -->
            <div class="footer-bottom text-center">
                <p>&copy; 2025 my_portfolio. All rights reserved.</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="script.js"></script>
    </body>

</html>