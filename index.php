<?php 
    if (isset($_POST['contact_submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = "Contact For Protfolio User";
        $message = $_POST['contact_message'];

        if (empty($name)) {
            $error = "Name Is Required";
        }elseif (empty($email)) {
            $error = "Email Is Required";
        }
        elseif (empty($message)) {
            $error = "Please Set Your Message";
        }else {
            $to = "frontendmaker99@gmail.com";
            // $message = "Name: ".$name."\r\n";
            // $message .= "Name: ".$email."\r\n";
            // $message .= "Name: ".$contact_message."\r\n";


            // $headers = "MIME-Version: 1.0" . "\r\n";
            // $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
            // $headers = "From: " .$email. "\r\n";

            $email = mail($to, $subject, $message, $email);
            if ($email == true) {
                $success = "Contact Form Submited";
            }else {
                $error = "Submited Failed!";
            }

        }


    }
   

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FM-FrontEnd Maker | Persional Protfolio</title>
    <!-- Google Fonts Here -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Favicone Here -->
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <!-- Css Link Here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animate-text.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <!--*****************************-->
    <!--**********HEADER AREA********-->
    <!--*****************************-->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <!-- LOGO HERE  -->
                    <div class="hamburger">
                        <a href="index.html" class="logo"><img src="assets/img/brand-logo.png" alt=""></a>
                        <div class="logo-bars bars-item-3">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <!-- MENU HERE  -->
                    <div class="menu-area">
                        <ul class="main-menu nav nav-pills">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#about-me">
                                    <i class="fa fa-rocket"></i>
                                    About Me
                                </a>
                            </li>
                            <li>
                                <a href="#portfolio">
                                    <i class="fa fa-briefcase"></i>
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#testimonials">
                                    <i class="fa fa-star"></i>
                                    Testimonials
                                </a>
                            </li>
                            <li>
                                <a href="#contact">
                                    <i class="fa fa-address-book"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <ul class="social-icon">
                            <li><a href="#header"><i class="fa fa-plus"></i></a></li>
                        </ul>
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--*****************************-->
    <!--**********HEADER AREA********-->
    <!--*****************************-->
    <!--*****************************-->
    <!--**********BANNER AREA********-->
    <!--*****************************-->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Personal Text -->
                    <div class="personal-text">
                        <div class="personal-contant">
                            <div class="personal-img">
                                <img src="assets/img/Profile-1.jpg" alt="profile">
                            </div>
                            <div class="my-info">
                                <h1>Hi 👋, I'm ShihAB</h1>
                                <h2 class="cd-headline clip is-full-width">
                                    A Proffesional <br>
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">Web Designer</b>
                                        <b>FrontEnd Developer</b>
                                        <b>WordPress Expert</b>
                                    </span>
                                </h2>
                                <div class="banner-button">
                                    <a href="https://www.fiverr.com/maker_shihab" target='blank' class="p-btn"><i
                                            class="fa fa-rocket"></i>Hire Me</a>
                                    <a href="#portfolio" class="p-btn"><i class="fa fa-briefcase"></i>My Protfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*****************************-->
    <!--**********BANNER AREA********-->
    <!--*****************************-->
    <!--*****************************-->
    <!--**********ABOUTME AREA*******-->
    <!--*****************************-->
    <section class="about-me section-padding" id="about-me">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="about-tolltip">
                        <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <li>
                                <span class="taoltip">About Me</span>
                                <a class="active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true"><i
                                        class="fas fa-user"></i></a>
                            </li>
                            <li>
                                <span class="taoltip">My Skill</span>
                                <a class="" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                    role="tab" aria-controls="v-pills-profile" aria-selected="false"><i
                                        class="fas fa-rocket"></i></a>
                            </li>
                            <li>
                                <span class="taoltip">why Me</span>
                                <a class="" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                    role="tab" aria-controls="v-pills-messages" aria-selected="false"><i
                                        class="fas fa-question"></i></a>
                            </li>
                            <li>
                                <span class="taoltip">My Vision</span>
                                <a class="" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                    role="tab" aria-controls="v-pills-settings" aria-selected="false"><i
                                        class="fas fa-graduation-cap"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-10">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="tol-about">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <h2 class="tab-title">About Me</h2>
                                        <!-- About Image -->
                                        <div class="single-image">
                                            <img src="assets/img/about-us-1.svg" alt="about">
                                        </div>
                                    </div>
                                    <!-- End About Image -->
                                    <div class="col-md-8 col-sm-12 col-xs-12">
                                        <div class="content welcome-not">
                                            <h4>Welcome Note ! </h4>
                                            <p>Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus
                                                eu
                                                leo faucibus aliquam. Suspendisse eleifend fringilla nibh. Praesent ut
                                                luctus dolor. Suspendisse a rutrum arcu. Aliquam erat volutpat.
                                                Phasellus
                                                lobortis erat vitae fringilla malesuada. Fusce semper purus suscipit
                                                ultricies tincidunt. Nulla eget turpis ac leo euismod pharetra at nec
                                                diam.
                                                Etiam id purus lacus. Suspendisse ligula nulla, cursus non lacinia
                                                tincidunt, elementum eu sapien. Morbi mollis congue fringilla. Vivamus
                                                ac
                                                sagittis nunc.</p>
                                            <p>Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus
                                                eu
                                                leo faucibus aliquam. Suspendisse eleifend fringilla nibh. Praesent ut
                                                luctus dolor. Suspendisse a rutrum arcu. Aliquam erat volutpat.
                                                Phasellus
                                                lobortis erat vitae fringilla malesuada. Fusce semper</p>
                                        </div>
                                        <div class="social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook"></i></a>
                                                <li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a>
                                                <li>
                                                <li><a href="#"><i class="fab fa-google-plus"></i></a>
                                                <li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a>
                                                <li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="my-skill">
                                <h2 class="tab-title">My Skill</h2>
                                <div class="row gx-5">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>Web Design</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="55"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                                    <span>55%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>Web Development</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="79"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 79%;">
                                                    <span>79%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>PSD To Html</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                    <span>80%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>UI/UX Design</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="95"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                    <span>95%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>HTML5/CSS3</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                    <span>70%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>Wordpress</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="65"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                                    <span>65%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>Web Design</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="55"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                                    <span>55%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>Web Development</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="79"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 79%;">
                                                    <span>79%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="why-me">
                                <h2 class="tab-title">Why Me?</h2>
                                <div class="content">
                                    <p>i'm a responsive web developer. ontrary to popular belief, Lorem Ipsum is not
                                        simply
                                        random text. It has roots in a piece of classical Latin literature from 45 BC,
                                        making it over 2000 years old. Richard McClintock, a Latin professor at
                                        Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                                        words,
                                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word
                                        in
                                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from
                                        sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of
                                        Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                                        theory of
                                        ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                                        "Lorem
                                        ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                    <p>creative web developer ontrary to popular belief, Lorem Ipsum is not simply
                                        random
                                        text. It has roots in a piece of classical Latin literature from 45 BC, making
                                        it
                                        over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
                                        College
                                        in Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                        Lorem Ipsum passage, and going through the cites of the word in classical
                                        literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                                        1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                        Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                                        ethics,
                                        very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum
                                        dolor sit amet..", comes from a line in section 1.10.32.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <div class="vision-area">
                                <h2 class="tab-title">My Vision</h2>
                                <div class="content">
                                    <p>my visition is ontrary to popular belief, Lorem Ipsum is not simply random text.
                                        It
                                        has roots in a piece of classical Latin literature from 45 BC, making it over
                                        2000
                                        years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                        Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                        Lorem
                                        Ipsum passage, and going through the cites of the word in classical literature,
                                        discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and
                                        1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
                                        Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very
                                        popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum
                                        dolor
                                        sit amet..", comes from a line in section 1.10.32.</p>
                                    <p>also i've perfect ontrary to popular belief, Lorem Ipsum is not simply random
                                        text.
                                        It has roots in a piece of classical Latin literature from 45 BC, making it over
                                        2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College
                                        in
                                        Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                        Lorem
                                        Ipsum passage, and going through the cites of the word in classical literature,
                                        discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and
                                        1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
                                        Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very
                                        popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum
                                        dolor
                                        sit amet..", comes from a line in section 1.10.32.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*****************************-->
    <!--**********ABOUTME AREA*******-->
    <!--*****************************-->
    <!--*****************************-->
    <!--******MY SERVICES AREA*******-->
    <!--*****************************-->
    <section class="my-services section-padding" id="my-services">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="row">
                <div class="col-md-12">
                    <div class="services-header section-header">
                        <h2 class="section-title">MY SERVICES </h2>
                        <a class="section-title-icon">
                            <i class="fas fa-rocket"></i>
                        </a>
                        <p>
                            ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old
                        </p>
                    </div>
                </div>
            </div>
            <!-- SECTION CONTENT  -->
            <div class="service-feature">
                <div class="row gy-5 gx-5">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-main">
                            <div class="service-item">
                                <div class="service-img">
                                    <a href="#"><i class="fab fa-html5"></i></a>
                                </div>
                                <div class="service-text">
                                    <h3><a href="#">Web Design</a></h3>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                    </p>
                                </div>
                            </div>
                            <span class="service-item-after"></span>
                            <span class="service-item-befor"></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-main">
                            <div class="service-item">
                                <div class="service-img">
                                    <a href="#"><i class="fas fa-code"></i></a>
                                </div>
                                <div class="service-text">
                                    <h3><a href="#">Web Development</a></h3>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                    </p>
                                </div>
                            </div>
                            <span class="service-item-after"></span>
                            <span class="service-item-befor"></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-main">
                            <div class="service-item">
                                <div class="service-img">
                                    <a href="#"><i class="fas fa-mobile-alt"></i></a>
                                </div>
                                <div class="service-text">
                                    <h3><a href="#">Responsive Design</a></h3>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                    </p>
                                </div>
                            </div>
                            <span class="service-item-after"></span>
                            <span class="service-item-befor"></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-main">
                            <div class="service-item">
                                <div class="service-img">
                                    <a href="#"><i class="fas fa-pen-square"></i></a>
                                </div>
                                <div class="service-text">
                                    <h3><a href="#">Customize Website</a></h3>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                    </p>
                                </div>
                            </div>
                            <span class="service-item-after"></span>
                            <span class="service-item-befor"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*****************************-->
    <!--******MY SERVICES AREA*******-->
    <!--*****************************-->
    <!--*****************************-->
    <!--******MY PROTFOLIO AREA******-->
    <!--*****************************-->
    <section class="protfolio-area section-padding" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="protfolio-header section-header">
                        <h2 class="section-title">MY PROTFOLIO</h2>
                        <a class="section-title-icon">
                            <i class="fas fa-rocket"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="protfolio-content-header">
                        <ul class="nav" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab">PSD TO HTML</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile">XD TO HTML</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact">SKETCH TO HTML</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-data-tab" data-toggle="pill" href="#pills-data" role="tab"
                                    aria-controls="pills-data" href="#">Multipage</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content porfolio-area-content" id="pills-tabContent">
                        <div class="tab-pane fade show active protfolio-content" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="protfolio-item">
                                <a href="#"><img src="assets/img/feature13/startpur.jpg" alt="protfolio-thumnale"></a>
                                <div class="protfolio-socail">
                                    <ul>
                                        <li><a href="https://maker-shihab.github.io/Startpur/" target="_blank"><i
                                                    class="fa fa-share"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="page-zoom" href="assets/img/protfolio/START-UPPER.jpg"><i
                                                    class="fas fa-compress-arrows-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="protfolio-item">
                                <a href="#"><img src="assets/img/feature13/mogo.jpg" alt="protfolio-thumnale"></a>
                                <div class="protfolio-socail">
                                    <ul>
                                        <li><a href="https://maker-shihab.github.io/Mogo/" target="_blank"><i
                                                    class="fa fa-share"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="page-zoom" href="assets/img/protfolio/MogoImageTamplate.jpg"><i
                                                    class="fas fa-compress-arrows-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="protfolio-item">
                                <a href="#"><img src="assets/img/feature13/page.jpg" alt="protfolio-thumnale"></a>
                                <div class="protfolio-socail">
                                    <ul>
                                        <li><a href="https://maker-shihab.github.io/Theme-Pea/" target="_blank"><i
                                                    class="fa fa-share"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="page-zoom" href="assets/img/protfolio/ThemePea.jpg"><i
                                                    class="fas fa-compress-arrows-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade protfolio-content" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="protfolio-item">
                                <a href="#"><img src="assets/img/feature13/shortly.jpg" alt="protfolio-thumnale"></a>
                                <div class="protfolio-socail">
                                    <ul>
                                        <li><a href="https://maker-shihab.github.io/Shorty-web/" target="_blank"><i
                                                    class="fa fa-share"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="page-zoom" href="assets/img/protfolio/Shopoa.png"><i
                                                    class="fas fa-compress-arrows-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="protfolio-item">
                                <a href="#"><img src="assets/img/feature13/4-all.jpg" alt="protfolio-thumnale"></a>
                                <div class="protfolio-socail">
                                    <ul>
                                        <li><a href="https://maker-shihab.github.io/4-all-demo-f/" target="_blank"><i
                                                    class="fa fa-share"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="page-zoom" href="assets/img/protfolio/4-all.png"><i
                                                    class="fas fa-compress-arrows-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="protfolio-item">
                                <a href="#"><img src="assets/img/feature13/template.jpg" alt="protfolio-thumnale"></a>
                                <div class="protfolio-socail">
                                    <ul>
                                        <li><a href="https://maker-shihab.github.io/Template-Psd/" target="_blank"><i
                                                    class="fa fa-share"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="page-zoom" href="assets/img/protfolio/UiHeroDemo.png"><i
                                                    class="fas fa-compress-arrows-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade protfolio-content" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="protfolio-item">
                                <a href="#"><img src="assets/img/feature13/startpur.jpg" alt="protfolio-thumnale"></a>
                                <div class="protfolio-socail">
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fa fa-share"></i></a></li>
                                        <li><a href="https://maker-shihab.github.io/Startpur/"><i
                                                    class="fas fa-heart"></i></a></li>
                                        <li><a class="page-zoom" href="assets/img/protfolio/START-UPPER.jpg"><i
                                                    class="fas fa-compress-arrows-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="protfolio-item">
                                <a href="#"><img src="assets/img/feature13/agency.jpg" alt="protfolio-thumnale"></a>
                                <div class="protfolio-socail">
                                    <ul>
                                        <li><a href="https://maker-shihab.github.io/Crearive-agency/" target="_blank"><i
                                                    class="fa fa-share"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="page-zoom" href="assets/img/protfolio/agency.jpg"><i
                                                    class="fas fa-compress-arrows-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="protfolio-item">
                                <a href="#"><img src="assets/img/feature13/img4.jpg" alt="protfolio-thumnale"></a>
                                <div class="protfolio-socail">
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fa fa-share"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="page-zoom" href="assets/img/feature13/img4.jpg""><i class=" fas
                                                fa-compress-arrows-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade protfolio-content" id="pills-data" role="tabpanel"
                            aria-labelledby="pills-data-tab">
                            <div class="protfolio-item">
                                <a href="#"><img src="assets/img/feature13/vixon.jpg" alt="protfolio-thumnale"></a>
                                <div class="protfolio-socail">
                                    <ul>
                                        <li><a href="https://maker-shihab.github.io/VixCon-Muster-Update/"
                                                target="_blank"><i class="fa fa-share"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="page-zoom" href="assets/img/feature13/vixon.jpg"><i
                                                    class="fas fa-compress-arrows-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="protfolio-item">
                                <a href="#"><img src="assets/img/feature13/img1.jpg" alt="protfolio-thumnale"></a>
                                <div class="protfolio-socail">
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fa fa-share"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="page-zoom" href="assets/img/feature13/img1.jpg""><i class=" fas
                                                fa-compress-arrows-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="protfolio-item">
                                <a href="#"><img src="assets/img/feature13/img2.jpg" alt="protfolio-thumnale"></a>
                                <div class="protfolio-socail">
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fa fa-share"></i></a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="page-zoom" href="assets/img/feature13/img2.jpg""><i class=" fas
                                                fa-compress-arrows-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="protfolio-red-more">
                <p><a href="#">More Protfolio</a></p>
            </div>
        </div>
    </section>
    <!--*****************************-->
    <!--******MY PROTFOLIO AREA******-->
    <!--*****************************-->
    <div class="protfolio-counter section-padding">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item">
                        <i class="fas fa-tasks"></i>
                        <h2><span class="counter-up">300</span>K</h2>
                        <p>Projects Finished</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item">
                        <i class="fas fa-users"></i>
                        <h2><span class="counter-up">30</span>K</h2>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item">
                        <i class="fas fa-clock"></i>
                        <h2><span class="counter-up">30</span>K</h2>
                        <p>Hours Worked</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item">
                        <i class="fas fa-coffee"></i>
                        <h2><span class="counter-up">30</span>K</h2>
                        <p>Cups of Coffee</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--*****************************-->
    <!--******MY PROTFOLIO AREA******-->
    <!--*****************************-->
    <section class="pricing-are section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pricing-header section-header">
                        <h2 class="section-title">Service Price</h2>
                        <a class="section-title-icon">
                            <i class="fas fa-history"></i>
                        </a>
                        <p>
                            ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old
                        </p>
                    </div>
                </div>
            </div>
            <div class="pricing-content">
                <div class="row gx-5 gy-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item text-center">
                            <div class="pric-header">
                                <h3>SILVER</h3>
                                <h4>$<span>5 </span>/ 2 Days</h4>
                            </div>
                            <div class="pric-content">
                                <div class="pric-icon">
                                    <i class="fas fa-gift"></i>
                                </div>
                                <div class="pric-list">
                                    <ul>
                                        <li><a href="#">1 Page</a></li>
                                        <li><a href="#">Responsive Design</a></li>
                                        <li><a href="#">Slider/Scroller</a></li>
                                        <li><a href="#">....</a></li>
                                        <li><a href="#">....</a></li>
                                        <li><a href="#">Browser Compatibility</a></li>
                                    </ul>
                                </div>
                                <div class="pric-btn">
                                    <a href="#">Bye Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item text-center">
                            <div class="pric-header">
                                <h3>GOLD</h3>
                                <h4>$<span>20 </span>/ 3 Days</h4>
                            </div>
                            <div class="pric-content">
                                <div class="pric-icon">
                                    <i class="fas fa-gift"></i>
                                </div>
                                <div class="pric-list">
                                    <ul>
                                        <li><a href="#">2 Pages</a></li>
                                        <li><a href="#">Responsive Design</a></li>
                                        <li><a href="#">Slider/Scroller</a></li>
                                        <li><a href="#">....</a></li>
                                        <li><a href="#">Server Upload</a></li>
                                        <li><a href="#">Browser Compatibility</a></li>
                                    </ul>
                                </div>
                                <div class="pric-btn">
                                    <a href="#">Bye Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item text-center">
                            <div class="pric-header">
                                <h3>DIAMOND</h3>
                                <h4>$<span>40 </span>/ 5 Days</h4>
                            </div>
                            <div class="pric-content">
                                <div class="pric-icon">
                                    <i class="fas fa-gift"></i>
                                </div>
                                <div class="pric-list">
                                    <ul>
                                        <li><a href="#">5 Pages</a></li>
                                        <li><a href="#">Responsive Design</a></li>
                                        <li><a href="#">Slider/Scroller</a></li>
                                        <li><a href="#">Custom Admin Panel</a></li>
                                        <li><a href="#">Server Upload</a></li>
                                        <li><a href="#">Browser Compatibility</a></li>
                                    </ul>
                                </div>
                                <div class="pric-btn">
                                    <a href="#">Bye Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*****************************-->
    <!--******MY PROTFOLIO AREA******-->
    <!--*****************************-->
    <!--*****************************-->
    <!--******MY PROTFOLIO AREA******-->
    <!--*****************************-->
    <section class="testmonial-area section-padding" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testmonial-header section-header">
                        <h2 class="section-title">Clients Testimonials</h2>
                        <a class="section-title-icon">
                            <i class="fas fa-star"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="test-content owl-carousel owl-theme">
                <div class="test-item">
                    <p class="test-title">
                        "Professional and patient. Good to work with him. <br> It's the nth i worked with him."
                    </p>
                    <div class="test-profile">
                        <img src="assets/img/profil/user3.png" alt="Clients">
                        <div class="test-ratting">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <h3><a href="#">-Koay B.</a></h3>
                    </div>
                </div>
                <div class="test-item">
                    <p class="test-title">
                        "Very fast on getting work completed. Great Job! <br> Will be using again for sure"
                    </p>
                    <div class="test-profile">
                        <img src="assets/img/profil/user4.png" alt="Clients">
                        <div class="test-ratting">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <h3><a href="#">-James H.</a></h3>
                    </div>
                </div>
                <div class="test-item">
                    <p class="test-title">
                        "Experts in what they do! Really good communication <br> and very nice to deal with! Thanks for
                        everything!"
                    </p>
                    <div class="test-profile">
                        <img src="assets/img/profil/user5.png" alt="Clients">
                        <div class="test-ratting">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <h3><a href="#">-Rikard B.</a></h3>
                    </div>
                </div>
                <div class="test-item">
                    <p class="test-title">
                        "Absolutely amazing work!! Came up with solutions to all my problems. Would highly recommend for
                        website work. Extremely knowledgeable and also very patient and kind."
                    </p>
                    <div class="test-profile">
                        <img src="assets/img/profil/user6.png" alt="Clients">
                        <div class="test-ratting">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <h3><a href="#">- John P.</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*****************************-->
    <!--******MY PROTFOLIO AREA******-->
    <!--*****************************-->
    <!--*****************************-->
    <!--******MY PROTFOLIO AREA******-->
    <!--*****************************-->
    <section class="cell-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cell text-center">
                        <h2 class="section-title">I'm Ready for your next project</h2>
                        <p>
                            Nam eleifend, turpis ac laoreet tincidunt, arcu purus ultricies nisl, quis molestie nibh
                            lacus
                            et dui. Nunc efficitur turpis lorem, bibendum dictum libero ornare a. Proin quis metus
                            massa.
                            Aliquam erat volutpat. Nullam eu convallis arcu, sit amet pulvinar odio. Nulla facilisi.
                            Nullam
                            ac nibh ac lectus aliquet aliquam. Interdum et malesuada fames ac ante ipsum primis in
                            faucibus.
                            Etiam sed ipsum non tortor posuere rutrum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*****************************-->
    <!--******MY PROTFOLIO AREA******-->
    <!--*****************************-->
    <!--*****************************-->
    <!--******MY PROTFOLIO AREA******-->
    <!--*****************************-->
    <section class="contact-area section-padding" id="contact">
        <div class="container">
            <!-- Contact header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-header section-header">
                        <h2 class="section-title">Contact Us</h2>
                        <a class="section-title-icon">
                            <i class="fas fa-history"></i>
                        </a>
                        <p>
                            ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old
                        </p>
                    </div>
                </div>
            </div>
            <!-- Contact Area CONTENT -->
            <div class="contact-content">
                <div class="row gx-5 gy-5">
                    <div class="col-md-6">
                        <div class="contact-details">
                            <div class="contact-fotm">
                                <div class="contact-item">
                                    <ul>
                                        <Li>
                                            <i class="fas fa-phone-alt"></i>
                                            <div class="icone-detals">
                                                <h4>My Phone</h4>
                                                <p><a href="tel">+088 01254658</a> <br> <a href="tel">+088 01254658</a>
                                                </p>
                                            </div>
                                        </Li>
                                        <Li>
                                            <i class="fas fa-envelope"></i>
                                            <div class="icone-detals">
                                                <h4>Email Address</h4>
                                                <p>
                                                    <a href="email">frontendmaker99@gmail.com</a>,
                                                    <br>
                                                    <a href="email">shihab.warfaze@gmail.com</a>
                                                </p>
                                            </div>
                                        </Li>
                                        <Li>
                                            <i class="fas fa-map-marked-alt"></i>
                                            <div class="icone-detals">
                                                <h4>My Location</h4>
                                                <p>
                                                    <a href="#">Thakurgaon Rangpur
                                                        <br> 5102 Bangladesh</a>

                                                </p>
                                            </div>
                                        </Li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <?php if (isset($error)) : ?>
                                <div class="alert alert-danger">
                                    <?php echo $error; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (isset($success)) : ?>
                                <div class="alert alert-success">
                                    <?php echo $success; ?>
                                </div>
                            <?php endif; ?>
                        <div class="contact-fotm">                            
                            <form method="POST">
                                <div class="row gx-4 gy-4">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Your Name Here" name="name" id="name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" placeholder="Your Email Here" name="email" id="email">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="contact_message" placeholder="Your Message" id="contact_message" cols="20"
                                            rows="7"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="contact-submit" name="contact_submit" type="submit">
                                            <i class="fas fa-paper-plane"></i>Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*****************************-->
    <!--******MY PROTFOLIO AREA******-->
    <!--*****************************-->
    <!--*****************************-->
    <!--******MY PROTFOLIO AREA******-->
    <!--*****************************-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="protfolio-area">
                        <a href="#"><i class="fas fa-rocket"></i></a>
                        <p>&copy;Copyright 2020 Maker-Shihab</p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--*****************************-->
    <!--******MY PROTFOLIO AREA******-->
    <!--*****************************-->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/animate-text.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
    </script>
</body>

</html>