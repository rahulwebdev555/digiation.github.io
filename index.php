<?php
$title             = "Best Website Designer - Web Ninjas";
$metaDescription   = "";
$metaKeywords      = "";
$chronicle         = "https://www.webninjas.in/";
$footerHeading     = "Discover how we can help you";
$footerbtncolor    = "#ec3d08";
$formbgcolor       = "#f2f2f2";
if (!isset($indexing)) {
  $indexing = "index";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href=<?php echo $chronicle; ?> />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link rel="icon" href="assets/images/android-chrome-192x192.png" type="image/gif" sizes="192x192">
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/gif" sizes="32x32">
    <!--<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>-->




    <!-- INDEX On/Off  -->
    <meta name="robots" content="<?php echo $indexing; ?>">
    <meta name="googlebot" content="<?php echo $indexing; ?>">

    <!-- OG and Twitter Card Tags -->


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets\fontawesome\css\all.css">
    <link rel="stylesheet" href="assets\fonts\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="css/custom-gallery.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">



</head>

<body>


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container-fluid upper-nav-container" style="background-color: #ec3d08;">
            <div class="container">
                <div class="row py-1 ">
                    <div class="col-10 offset-1  col-md-3 offset-md-0  text-start upper-nav upper-nav-number-1">
                        <a onclick="return gtag_call_conversion('tel:+917889107344');" href="tel:7889107344"
                            class="upper-nav upper-nav-number">+91 7889107344 </a>
                    </div>
                    <div class="col-10 offset-1 col-md-3 offset-md-6 text-end upper-nav-text-1 mt-2 mt-md-0">
                        <a class="upper-nav upper-nav-text">No. 1 Website Designer in Punjab</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container nav-container">

            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->

                            <a href="/" class="logo d-flex align-items-centre">Web Ninjas</a> 
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#home" class="active">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#reviews">reviews</a></li>
                            <li><a href="#clients">clients</a></li>
                            <li><a href="#contact-us">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ***** Header Area End ***** -->
    <!-- ***** Welcome Area Start ***** -->
    <div class="conainer-fluid first-container pt-5 hide-nav home-page-header-bg" id="home">
        <div class="header-text pt-5">
            <div class="container pt-5 pt-md-4 pb-3">
                <div class="row pt-3 pt-md-0">
                    <div class="col-12 col-md-6 mt-md-5 mt-3">
                        <div class="text-center text-md-left">
                            <h1 class="first-heading pb-md-2" class="text-center">
                                Get Your Amazing Website Designed By Our Experts Starting @ <span class="price-animation">
                                   <span style="--i:3">1</span>
                                   ,
                                   <span style="--i:4">9</span>
                                   <span style="--i:5">9</span>
                                   <span style="--i:6">9</span>
                                 </span>
                            </h1>
                            <p class="pt-3 pr-md-4 first-p">
                                Get in touch with us to get a professional-looking website for your business. <span
                                    class="brand-span">Brand Banana Hai To Website To Jaruri Hai</span> .</p>
                        </div>
                        <!-- <div class="d-flex justify-content-center justify-content-md-start  mt-5 ">
              <a target="_blank"   href="tel:+917889107344"><span class="custom-btn">Get in Touch</span></a>
              </div>       -->
                    </div>
                    <div class="col-12 col-md-6 mt-3 mt-md-0">
                        <div class="justify-content-md-end">
                            <form id="requestForm" method="post" autocomplete="off">
                                <div class="form-card">
                                    <div class="row mt-md-5">
                                        <div class="col-12  website-page-form-input">
                                            <label for="name">
                                                Name<span>*</span>
                                            </label>
                                            <input type="text" name="name" id="" placeholder="Full Name" required>
                                        </div>
                                        <div class="col-12 mt-3 website-page-form-input">
                                            <label for="contact">
                                                Contact<span>*</span>
                                            </label>
                                            <input type="text" name="contact" id="" placeholder="Phone Number"
                                                pattern="[6789][0-9]{9}" required>
                                        </div>
                                        <input type="hidden" value="Service" name="service">
                                        
                                        <div class="col-12 mt-4">
                                            <div class="d-flex justify-content-center website-page-form-card-input-btn">
                                                <input type="submit" name="submit" 
                                                    class="btn btn-success custom-footer-btn"
                                                    value="Get a Free Quote Today" placeholder="Full Name">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- <img class="img-fluid" src="assets/images/front-image.jpg" alt="Website Development Company"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Second-container Start ***** -->
    <div class="container second-container ">
        <div class="row">
            <!-- ***** up-custom-box   START ***** -->
            <div class="col-12 col-md-4 mb-3">
                <div class="up-box-custom ">
                    <div class="d-flex flex-column-reverse flex-md-row ">
                        <div class="align-items-top box-heading-div">
                            <h3 class="text-center text-md-left box-heading pt-2 pt-md-0 ">Website designing</h3>
                        </div>
                        <div class="d-flex box-image justify-content-center justify-content-md-end ml-md-auto">
                            <img class="img-fluid box-image" src="assets/images/web-designing.png"
                                alt="Website Designing">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="text-center text-md-left  box-p text-justify pt-2">We offer impressive web designs
                            according to the nature of your business.</p>
                    </div>
                </div>
            </div>
            <!-- ***** up-custom-box   END ***** -->
            <div class="col-12 col-md-4 mb-3">
                <div class="up-box-custom ">
                    <div class="d-flex flex-column-reverse flex-md-row ">
                        <div class="align-items-top box-heading-div">
                            <h3 class="text-center text-md-left box-heading pt-2 pt-md-0 ">Website development</h3>
                        </div>
                        <div class="d-flex box-image justify-content-center justify-content-md-end ml-md-auto">
                            <img class="img-fluid box-image" src="assets/images/web-development.png"
                                alt="Website Development">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="text-center text-md-left  box-p text-justify pt-2">Our team is highly skilled in
                            working on every kind of web development project.</p>
                    </div>
                </div>
            </div>
            <!-- ***** up-custom-box   END ***** -->
            <!-- ***** up-custom-box   END ***** -->
            <div class="col-12 col-md-4 mb-3">
                <div class="up-box-custom ">
                    <div class="d-flex flex-column-reverse flex-md-row ">
                        <div class="align-items-top box-heading-div">
                            <h3 class="text-center text-md-left box-heading pt-2 pt-md-0 ">E-Commerce development</h3>
                        </div>
                        <div class="d-flex box-image justify-content-center justify-content-md-end ml-md-auto">
                            <img class="img-fluid box-image" src="assets/images/eCommerce.png"
                                alt="E-Commerce Development">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="text-center text-md-left  box-p text-justify pt-2">We have vast experience in creating
                            online e-commerce stores that can increase your sales.</p>
                    </div>
                </div>
            </div>
            <!-- ***** up-custom-box   END ***** -->

        </div>
        <div class="row mt-md-3">
            <!-- ***** up-custom-box   START ***** -->
            <div class="col-12 col-md-4 mb-3">
                <div class="up-box-custom ">
                    <div class="d-flex flex-column-reverse flex-md-row ">
                        <div class="align-items-top box-heading-div">
                            <h3 class="text-center text-md-left box-heading pt-2 pt-md-0 ">Digital marketing services
                            </h3>
                        </div>
                        <div class="d-flex box-image justify-content-center justify-content-md-end ml-md-auto">
                            <img class="img-fluid box-image" src="assets/images/Digital-markting.png"
                                alt="Digital Marketing Services">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="text-center text-md-left  box-p text-justify pt-2">Our digital marketing services will
                            help you to search for the target audience for your products.</p>
                    </div>
                </div>
            </div>
            <!-- ***** up-custom-box   END ***** -->
            <div class="col-12 col-md-4 mb-3">
                <div class="up-box-custom ">
                    <div class="d-flex flex-column-reverse flex-md-row ">
                        <div class="align-items-top box-heading-div">
                            <h3 class="text-center text-md-left box-heading pt-2 pt-md-0 ">Search engine optimization
                            </h3>
                        </div>
                        <div class="d-flex box-image justify-content-center justify-content-md-end ml-md-auto">
                            <img class="img-fluid box-image" src="assets/images/seo.png"
                                alt="Search Engine Optimization">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="text-center text-md-left  box-p text-justify pt-2">Through our SEO Services, we will
                            make sure that your website appears in search results.</p>
                    </div>
                </div>
            </div>
            <!-- ***** up-custom-box   END ***** -->
            <!-- ***** up-custom-box   END ***** -->
            <div class="col-12 col-md-4 mb-3">
                <div class="up-box-custom ">
                    <div class="d-flex flex-column-reverse flex-md-row ">
                        <div class="align-items-top box-heading-div">
                            <h3 class="text-center text-md-left box-heading pt-2 pt-md-0 ">Web hosting</h3>
                        </div>
                        <div class="d-flex box-image justify-content-center justify-content-md-end ml-md-auto">
                            <img class="img-fluid box-image" src="assets/images/web-hosting.png" alt="Hosting Services">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="text-center text-md-left  box-p text-justify pt-2">We also offer web hosting solutions
                            for simple websites to heavy web projects.</p>
                    </div>
                </div>
            </div>
            <!-- ***** up-custom-box   END ***** -->

        </div>


    </div>
    <!-- ***** Second-container END ***** -->
    <div id="services" class="pt-5">
        <div class="container py-4">
            <div class="row mx-1 mb-4">
                <div class="col-12 d-md-none ">
                    <div>
                        <hr class="website-page-icon-box-custom-hr">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="">
                        <h3 class="website-page-icon-box-heading text-md-left">We Can Build</h3>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div>
                        <hr class="website-page-icon-box-custom-hr">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-10 offset-1 offset-md-0   col-md-3 mt-5  mt-md-0 website-page-icon-b">
                    <div class="website-page-icon-box wpib-1 ">
                        <div class="d-flex justify-content-center">
                            <i class="fa fa-building fa-4x  fa-building-clr "></i>
                        </div>
                        <h4 class="website-page-icon-box-h4">CORPORATE WEBSITE</h4>
                        <p class="website-page-icon-box-p">Launch your business on the internet and grow your online
                            sales with our business e-commerce solutions.</p>
                    </div>
                </div>
                <div class="col-10 offset-1 offset-md-0 col-md-3 mt-5  mt-md-0 website-page-icon-b">
                    <div class="website-page-icon-box wpib-2">
                        <div class="d-flex justify-content-center">
                            <i class="fa fa-wordpress fa-4x  fa-wordpress-clr"></i>
                        </div>
                        <h4 class="website-page-icon-box-h4">CMS WEBSITE</h4>
                        <p class="website-page-icon-box-p">Our team knows how to work with every content management
                            system like WordPress, Joomla, and Magento.</p>
                    </div>
                </div>
                <div class="col-10 offset-1 offset-md-0 col-md-3 mt-5  mt-md-0 website-page-icon-b">
                    <div class="website-page-icon-box wpib-3">
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-shopping-cart fa-4x  fa-shopping-cart-clr"></i>
                        </div>
                        <h4 class="website-page-icon-box-h4">ECOMMERCE WEBSITE</h4>
                        <p class="website-page-icon-box-p">Launch your business on the internet and grow your online
                            sales with our business e-commerce solutions.</p>
                    </div>
                </div>
                <div class="col-10 offset-1 offset-md-0 col-md-3 mt-5  mt-md-0 website-page-icon-b">
                    <div class="website-page-icon-box wpib-4">
                        <div class="d-flex justify-content-center">
                            <i class="fa fa-sitemap fa-4x  fa-sitemap-clr "></i>
                        </div>
                        <h4 class="website-page-icon-box-h4">WEBSITE PORTAL</h4>
                        <p class="website-page-icon-box-p">We have vast experience in working on an online portal for
                            collaboration in teams and student examinations.</p>
                    </div>
                </div>
                <div class="col-10 offset-1 offset-md-0 col-md-3 mt-5 website-page-icon-b">
                    <div class="website-page-icon-box wpib-5">
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-university fa-4x  fa-university-clr"></i>
                        </div>
                        <h4 class="website-page-icon-box-h4">Educational</h4>
                        <p class="website-page-icon-box-p">Showcase your school/college or coaching institute features
                            to students with your professional website.</p>
                    </div>
                </div>
                <div class="col-10 offset-1 offset-md-0 col-md-3 mt-5 website-page-icon-b">
                    <div class="website-page-icon-box wpib-6">
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-map fa-4x  fa-map-clr"></i>
                        </div>
                        <h4 class="website-page-icon-box-h4">Brochure</h4>
                        <p class="website-page-icon-box-p">Display products of all your categories through a
                            professional photo gallery like an online brochure website. </p>
                    </div>
                </div>
                <div class="col-10 offset-1 offset-md-0 col-md-3 mt-5 website-page-icon-b">
                    <div class="website-page-icon-box wpib-7">
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-file-signature fa-4x  fa-file-signature-clr"></i>
                        </div>
                        <h4 class="website-page-icon-box-h4">Blog</h4>
                        <p class="website-page-icon-box-p">Blog websites are one the best ways to communicate your ideas
                            and thoughts throughout the world.</p>
                    </div>
                </div>
                <div class="col-10 offset-1 offset-md-0 col-md-3 mt-5 website-page-icon-b">
                    <div class="website-page-icon-box wpib-8">
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-hands fa-4x  fa-hands-clr"></i>
                        </div>
                        <h4 class="website-page-icon-box-h4">Non-Profit</h4>
                        <p class="website-page-icon-box-p">Website Ninjas loves to work with a charitable organization
                            that brings a change to our society and our life.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #F2F2F2;">
        <div class="container py-5 ">
            <div class="row mx-1 mb-4">
                <div class="col-12 d-md-none ">
                    <div>
                        <hr class="smm-custom-hr">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="">
                        <h3 class="smm-hr-heading text-md-left">Package INCLUDES</h3>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div>
                        <hr class="smm-custom-hr">
                    </div>
                </div>
            </div>
            <div class="row mx-1 ">
                <div class="col-12 col-md-4">
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Domain name</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Website Hosting</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Social Links Integration</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Brand Email Id</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">On-page SEO</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Contact Form</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-none">
                        <hr class="website-page-custom-list-hr">
                    </div>
                </div>

                <div class="col-12 col-md-4 ">
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Product gallery</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Google Maps</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">CDN Integration</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">SSL Certificate</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Fast Loading Website</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Unique Content</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-none">
                        <hr class="website-page-custom-list-hr">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Custom Design</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Visitor Count</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Secure Website</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">WhatsApp Button</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Blog Pages</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr class="website-page-custom-list-hr">
                    </div>
                    <div class="website-page-list">
                        <div class="d-flex align-items-center">
                            <div class="smm-list-i">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <span class="smm-custom-list-span">Free Maintenance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <!-- ***** Third-container Start ***** -->
    <div>
        <div class="container third-container mt-5 mb-5">
            <div class="row pt-5">
                <div class="col-12 text-center text-center">
                    <h3 class="forth-heading">Work With Website Designer in India</h3>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2">
                    <div class="mx-3">
                        <img class="img-fluid" class="img-fluid" src="assets/images/4300579.jpg" alt="Side-Image">
                    </div>
                </div>
                <div class="col-12 col-md-6 pt-md-5 text-center text-md-left order-2 order-md-1">
                    <div class="pt-md-2">
                        <p class="p">
                            Our company is the best <b>website designer in India</b> that years of experience in
                            designing professional websites. They have experience in designing websites for startups and
                            as well as for large corporate firms. As online shopping is increasing day by day. We can
                            also help you in setting up an online e-commerce store.
                        </p>
                        <p class="p">Every website is <b>mobile-friendly</b> and <b> super fast in loading</b>. We will
                            also conduct testing of the website to make sure that your website works perfectly on all
                            platforms and devices. The website will be integrated with the content delivery network for
                            faster professing access to the world. The theme of the website will be based on the nature
                            of your business. You will also get <b>1 year of free maintenance service</b> for your
                            website.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container third-container mt-3 mb-5">
        <div class="row">
            <div class="col-12 col-md-6 pt-md-5 text-center text-md-left order-2 order-md-2">
                <div class="pt-md-2">
                    <p class="p">
                        <b>Web Ninjas</b> offers all services like custom website development, WordPress website,
                        website maintenance, and social media hading. Our team is always upgrading its skills from time
                        to time, to provide customers with the latest technology in their website.
                    </p>
                    <p class="p">You can also avail search engine optimization services from us. We have helped a lot of
                        businesses around the world to improve their Google ranking and get quality leads for their
                        business. As most of the businesses are going online. Digital marketing services should be
                        availed by every business to protect their business from big corporations. You can use SEO,
                        Facebook ads, Google ads, Twitter ads, and other platforms to grow on the Internet.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 order-1 order-md-1">
                <div class="mx-3">
                    <img class="img-fluid" class="img-fluid" src="assets/images/5228696.jpg" alt="Side-Image">
                </div>
            </div>
        </div>
    </div>


    <!-- ***** Third-container END ***** -->


    <!-- ***** Forth-container START ***** -->



    <div style="background-image: url(assets/images/6841553.jpg);background-size:cover; ">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center text-center">
                    <h3 class="forth-heading">Why to choose us?</h3>
                </div>
                <div class="col-12 col-md-6 offset-md-3 text-center text-center">
                    <p class="forth-p mt-1 mb-4 why-p">We have a team that has years of experience in web technology and
                        marketing solutions. We never compromise with the quality of our work.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="forth-box-mobile">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid" src="assets/images/home-five-digital-marketing-icon.jpg"
                                alt="Profession Team">
                        </div>
                        <div class="d-flex justify-content-center">
                            <h4 class="forth-box-heading ">Professional Team</h4>
                        </div>
                        <div class=" text-center d-flex justify-content-center">
                            <p class="forth-p text-center">Every single person in our team has years of experience in
                                their respective field.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  mb-4">
                    <div class="forth-box-mobile">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid" src="assets/images/home-five-digital-marketing-icon3.jpg"
                                alt="High Performnce Poducts">
                        </div>
                        <div class="d-flex justify-content-center">
                            <h4 class=" text-center forth-box-heading ">High Performance Products</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="forth-p text-center">Every product delivers high performance with a high-quality
                                back-end system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  mb-4">
                    <div class="forth-box-mobile">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid" src="assets/images/home-five-digital-marketing-icon4.jpg"
                                alt="Business Engagement">
                        </div>
                        <div class="d-flex justify-content-center">
                            <h4 class=" text-center forth-box-heading">Business Engagement</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="forth-p text-center">Website and digital solutions are designed in accordance with
                                the need of your business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="forth-box-mobile">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid" src="assets/images/home-five-digital-marketing-icon1.jpg"
                                alt="Latest Web Technology">
                        </div>
                        <div class="d-flex justify-content-center">
                            <h4 class=" text-center forth-box-heading">Latest Web Technology</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="forth-p text-center">We work with the latest web technology and framework in every
                                web project.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="forth-box-mobile">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid" src="assets/images/home-five-digital-marketing-icon5.jpg"
                                alt="On Time Delivery">
                        </div>
                        <div class="d-flex justify-content-center">
                            <h4 class=" text-center forth-box-heading">On Time Delivery</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="forth-p text-center">Till date, we have never compromised with the project's
                                deadline—every project is delivered before the deadline.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="forth-box-mobile">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid" src="assets/images/home-five-digital-marketing-icon6.jpg"
                                alt="Excellent Customer Support">
                        </div>
                        <div class="d-flex justify-content-center">
                            <h4 class=" text-center forth-box-heading">Excellent Customer Support</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="forth-p text-center">You can contact us anytime throughout the day. We are
                                available 24/7 for our customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color:#F2F2F2;">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 d-md-none ">
                    <div>
                        <hr class="website-page-icon-box-custom-hr">
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-5">
                    <div class="">
                        <h3 class="website-page-icon-box-heading text-md-left">Our Working Process</h3>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div>
                        <hr class="website-page-icon-box-custom-hr">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="serviceBox bg-red">
                        <div class="service-icon">
                            <span><i class="fa fa-globe"></i></span>
                        </div>
                        <h3 class="title">Meet</h3>
                        <p class="description" style="color:#fff;">To know your business and <br> understand your<br>
                            needs.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="serviceBox bg-green">
                        <div class="service-icon">
                            <span><i class="fa fa-rocket"></i></span>
                        </div>
                        <h3 class="title">Plan</h3>
                        <p class="description" style="color:#fff;">To know your business and<br> understand your<br>
                            needs.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="serviceBox bg-blue">
                        <div class="service-icon">
                            <span><i class="fa fa-mobile"></i></span>
                        </div>
                        <h3 class="title">Execute</h3>
                        <p class="description" style="color:#fff;">Execute the plan with advanced tools and techniques
                            within the set time frame.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="serviceBox bg-yellow">
                        <div class="service-icon">
                            <span><i class="fa fa-briefcase"></i></span>
                        </div>
                        <h3 class="title">Optimize</h3>
                        <p class="description" style="color:#fff;">Take steps to optimize the inputs and improve the
                            results continuously.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>

        <div class="container-fluid  py-3"
            style="background-color: crimson;box-shadow: 0px 15px 49px 22px rgb(0 0 0 / 80%);">
            <div class="container">
                <div class="row pt-3 pb-4">
                    <div class="col-12 col-md-3">
                        <div class="text-center d-flex justify-content-center">
                            <span class="count-heading">700+</span><br>
                        </div>
                        <div class="text-center d-flex justify-content-center">
                            <span class="count-p">Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 pt-3 pt-md-0">
                        <div class="text-center d-flex justify-content-center">
                            <span class="count-heading">950+</span>
                        </div>
                        <div class="text-center d-flex justify-content-center">
                            <span class="count-p">Projects Completed</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 pt-3 pt-md-0">
                        <div class="text-center d-flex justify-content-center">
                            <span class="count-heading">100%</span>
                        </div>
                        <div class="text-center d-flex justify-content-center">
                            <span class="count-p">Satisfaction Guranteed</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 pt-3 pt-md-0">
                        <div class="text-center d-flex justify-content-center">
                            <span class="count-heading">7+</span>
                        </div>
                        <div class="text-center d-flex justify-content-center">
                            <span class="count-p">Years of Excellence</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div style="background-color:#F2F2F2;">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 d-md-none ">
                        <div>
                            <hr class="website-page-icon-box-custom-hr">
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-5">
                        <div class="">
                            <h3 class="website-page-icon-box-heading text-md-left ">Price Table</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div>
                            <hr class="website-page-icon-box-custom-hr">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable">
                            <div class="pricingTable-header">
                                <h3 class="title">STARTER</h3>
                            </div>
                            <ul class="rating">
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul>
                            <div class="price-value">
                                <span class="amount"><i class="fas fa-rupee-sign"></i> 4,999</span>
                                <span class="duration">monthly</span>
                            </div>
                            <ul class="pricing-content">
                                <li>LITE SPEED HOSTING</li>
                                <li>UP TO 5 PAGES DYNAMIC WEBSITE</li>
                                <li>10GB BANDWIDTH</li>
                                <li>1 GB HOSTING SPACE</li>
                                <li>TEMPORARY DOMAIN NAME</li>
                                <li>FREE SSL CERTIFICATE</li>
                                <li>STANDARD THEME BASED</li>
                                <li>100% ALL DEVICES RESPONSIVE</li>
                                <li>5 PROFESSIONAL EMAILS</li>
                                <li>UP TO 20 GALLERY IMAGE UPLOAD</li>
                                <li>GOOGLE MAP LISTING</li>
                                <li>SOCIAL MEDIA INTEGRATION</li>
                                <li>QUICK ENQUIRY FORM</li>
                                <li>WHATSAPP ENQUIRY</li>
                                <li>SEO READY WEBSITE</li>
                                <li>VISITOR COUNTER</li>
                                <li>QUARTERLY WEBSITE BACKUP</li>
                                <li>DELIVERY IN 5 WORKING DAYS</li>


                            </ul>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable orange">
                            <div class="pricingTable-header">
                                <h3 class="title">ADVANCE</h3>
                            </div>
                            <ul class="rating">
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul>
                            <div class="price-value">
                                <span class="amount"><i class="fas fa-rupee-sign"></i> 9,999</span>
                                <span class="duration">monthly</span>
                            </div>
                            <ul class="pricing-content">
                                <li>INCLUDING ALL STARTER FEATURES</li>
                                <li>SUPER FAST LITE SPEED HOSTING</li>
                                <li>UNLIMITED BANDWIDTH USAGE</li>
                                <li>UNLIMITED HOSTING SPACE</li>
                                <li>UNLIMITED PROFESSIONAL EMAILS </li>
                                <li>UNLIMITED GALLERY IMAGE UPLOAD</li>
                                <li>UP TO 15 PAGES DYNAMIC WEBSITE</li>
                                <li>PREMIUM THEME BASED</li>
                                <li>LIVE MOBILE CHAT APPLICATION</li>
                                <li>RECAPTCHA INTEGRATION</li>
                                <li>SOCIAL MEDIA SHARING</li>
                                <li>YOUTUBE LIVE FEED</li>
                                <li>SPAM PROTECTION</li>
                                <li>INSTAGRAM LIVE FEED</li>
                                <li>PROPER ADMIN PANEL</li>
                                <li>BASIC SEO SERVICES</li>
                                <li>MONTHLY WEBSITE BACKUP</li>
                                <li>DELIVERY IN 8 WORKING DAYS</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable1 pricingTable.green">
                            <div class="pricingTable-header">
                                <h3 class="title">Pro</h3>
                            </div>
                            <ul class="rating">
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul>
                            <div class="price-value">
                                <span class="amount"><i class="fas fa-rupee-sign"></i> 14,999</span>
                                <span class="duration">monthly</span>
                            </div>
                            <ul class="pricing-content">
                                <li>INCLUDING ALL ADVANCE FEATURES</li>
                                <li>E-COMMERCE WEBSITE</li>
                                <li>WEEKLY WEBSITE BACKUP</li>
                                <li>EASY ACCESS ADMIN PANEL</li>
                                <li>WOOCOMMERCE BASED</li>
                                <li>ULTIMATE PRODUCT UPLOAD </li>
                                <li>SHOPPING CART & QUICK CHECKOUT</li>
                                <li>UNLIMITED IMAGES AND VIDEO UPLOAD</li>
                                <li>BEST E-COMMERCE THEME SELECTION</li>
                                <li>GOOGLE ANALYTICS INTEGRATION</li>
                                <li>PAYUMONEY PAYMENT INTEGRATION</li>
                                <li>EMAIL CUSTOMER  INVOICE</li>
                                <li>FREE CONTENT WRITING</li>
                                <li>CUSTOM PRODUCT TABS</li>
                                <li>PRODUCT RICH SNIPPETS</li>
                                <li>ABANDONED CART</li>
                                <li>DELIVERY IN 15 WORKING DAYS</li>
                            </div>
                    </div>

                </div>
            </div>
        </div>
        <div style="background-color:#0F9D58;" class="py-5" id="reviews">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="website-page-review-box-title">
                            <h3 class="text-center">Trusted by over 700+ website owners</h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 col-md-6 mt-3">
                        <div class="website-page-review-box">
                            <div class="d-flex justify-content-center pt-3">
                                <img class="img-fluid website-page-review-box-image" src="assets/images/review-4.png"
                                    alt="Mobile Friendly Website">
                            </div>
                            <div class="">
                                <h5 class="website-page-review-box-heading">Mukesh Makkar</h5>
                            </div>
                            <div class="">
                                <p class="text-center text-justify website-page-review-box-p">I love to work with
                                    Website Ninjas. Not able to tell you how happy I am with the website designed by
                                    them. I couldn't have asked for more than this. Your company is truly upstanding and
                                    is behind its product 100%.</p>
                            </div>
                            <div>
                                <span class="website-page-review-box-url">magicaloverseas.com</span>
                                <!-- <a href="" class="website-page-review-box-a">Visit Website</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-3">
                        <div class="website-page-review-box">
                            <div class="d-flex justify-content-center pt-3">
                                <img class="img-fluid website-page-review-box-image" src="assets/images/review-3.jpg"
                                    alt="Mobile Friendly Website">
                            </div>
                            <div class="">
                                <h5 class="website-page-review-box-heading">Kamaljot Kansal</h5>
                            </div>
                            <div class="">
                                <p class="text-center text-justify website-page-review-box-p">They delivered more than
                                    what they promised in the first place. It was a pleasure for us to work with them.
                                    Their team is highly cooperative and gave us proper time to understand our needs. We
                                    would recommend them to everyone.</p>
                            </div>
                            <div>
                                <span class="website-page-review-box-url">infowiz.co.in</span>
                                <!-- <a href="" class="website-page-review-box-a">Visit Website</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Forth-container END ***** -->

        <!-- ***** Clients-container START ***** -->
        <div class="container mt-4 pt-5" id="clients">
            <div class="row py-2">
                <div class="col-12">
                    <h2 class="text-center custom-heading">Some Of Our Work</h2>
                </div>
            </div>
            <div class="row mt-2 ">
                <div class="col-12 col-md-3 mt-md-0">
                    <div class="d-flex justify-content-center ">
                        <img class="img-fluid clints-img" src="assets/images/balaji.png" alt="Balaji Company Logo">
                    </div>
                </div>

                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/pte-magicaloverseas.png"
                            alt="Magicaloverseas Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/grocerybuy.png" alt="Grocerybuy Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/infowiz.png" alt="Infowiz Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/kansal-karyana.png"
                            alt="Kansal Karyana Store Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/my-toy.png" alt="My3dtoy Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/thinkmindlogo.png"
                            alt="Thinkmind Education Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/compasstech.png" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/surevisa.png" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/cakbansal.png" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/dutta-logo.png" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/goldrock.png" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/cleanraft.png" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/mahadevsewa.png" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/therelegent.png" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/royalacademy.png" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/crown.jpg" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/htp.png" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/rajved.jpg" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/getexcelsior.jpg" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/klickhub.jpg" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/Kwik learn.png" alt="Compasstech Logo">
                    </div>
                </div>
                
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/main-logo.png" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/car-ngo.jpg" alt="Compasstech Logo">
                    </div>
                </div>
                
                
                
                
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/agcute.jpg" alt="Compasstech Logo">
                    </div>
                </div>
                
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/bedsheet.jpg" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/matvin.jpg" alt="Compasstech Logo">
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid clints-img" src="assets/images/swarnjal.jpg" alt="Compasstech Logo">
                    </div>
                </div>
                
                
                
            </div>
        </div>


        <?php if (!isset($formbgcolor)) {
      $formbgcolor = "#FFFFFF";
    } ?>

        <form id="requestForm2" method="post" autocomplete="off">
            <div id="contact-us" class="container-fluid mt-5 pb-5" style="background-color:<?php echo $formbgcolor; ?>">
                <div class="container wmmp-form-container px-md-5">
                    <div class="row pt-5 pb-3">
                        <div class="col-12 col-md-10 offset-md-1 text-center">
                            <h2 class="website-page-form-heading">Get A Free Consultation</h2>
                            <spam class="website-page-form-p">Use the form below to contact us. We look forward to
                                learning more about you, your organization, and how we can help you achieve even greater
                                success.</spam>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 website-page-form-input">
                            <input type="text" name="name" id="" placeholder="Full Name" required>
                        </div>
                        <div class="col-12 col-md-4 website-page-form-input my-3 my-md-0">
                            <input type="text" name="contact" id="" placeholder="Phone Number" pattern="[6789][0-9]{9}"
                                required>
                        </div>
                        <div class="col-12 col-md-4 website-page-form-input">
                            <input type="text" name="service" id="" placeholder="Type of Website" required>
                        </div>
                        <div class="col-md-4 offset-md-4 mt-4">
                            <div class="d-flex justify-content-center website-page-form-input-btn">
                                <input type="submit"  name="submit" class="btn btn-success custom-footer-btn"
                                    value="Get a Free Quote Today" placeholder="Full Name">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>
        <div class="container-fluid footer-div-bg-color">
            <div class="container py-5 ">
                <div class="row pb-3">
                    <div class="col-12 col-md-4">
                        <div class="d-flex">
                            <span class="footer-heading">About Us</span>
                        </div>
                        <div class="d-flex mt-3 footer-heading-p">
                            <span>Web Ninjas is the best portal for getting your beautiful website ready by the most
                                trained web developers in India. They have the top-notch skills required to launch your
                                business on the web.</span>

                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-3 mt-md-0">
                        <div class="d-flex ">
                            <span class="footer-heading">Contact Us</span>

                        </div>
                        <div class="d-flex mt-md-3 mt-1">

                        </div>
                        <div class="d-flex ">
                            <!--<span class="custom-links">SCO 85-86, 4th Floor, Sector 34-A,Chandigarh</span>-->

                        </div>
                        <div class="d-flex flex-column">
                            <a onclick="return gtag_call_conversion('tel:+917889107344');"
                                href="tel:+917889107344"><span class="custom-links">Phone: +91 7889107344</span></a>
                                <a onclick="return gtag_call_conversion('tel:+917889107344');"
                                href="tel:+919988072726"><span class="custom-links">Mobile: +91 9988072726</span></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-3 mt-md-0">
                        <div class="d-flex ">
                            <span class="footer-heading">Quick Links</span>

                        </div>
                        <div class=" mt-md-3 mt-1">
             <ul class="nav1">
              <li  class="scroll-to-section"><a style="color:white;" href="https://www.webninjas.in/privacypolicy.php">Privacy Policy</a></li>
              <li  class="scroll-to-section"><a style="color:white;" href="https://www.webninjas.in/termsandcondition.php">Terms And Condition</a></li>
            </ul>

            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer-div d-md-none">
            <div class="row">
                <div class="col-12">
                    <div class="running_ninjas">
                        <div style="height:60px"></div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-6 py-3 footer-call-bg-clr">
                    <a target="_blank" onclick="return gtag_call_conversion('tel:+917889107344');"
                        href="tel:+917889107344">
                        <div class="d-flex justify-content-center">
                            <div>
                                <img class="img-fluid icon icon-change" id="icon-change" src="assets/images/call1.png"
                                    alt="Call Button">
                            </div>
                            <div class="text-center pl-2">
                                <span class="text-center footer-btn">Call Now</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 py-3 footer-whatsapp-bg-clr">
                    <a target="_blank" onclick="return gtag_call_conversion('tel:+917889107344');"
                        href="https://wa.me/+917889107344?text=Hi got your number from *your Website*">
                        <div class="d-flex justify-content-center">
                            <div>
                                <img class="img-fluid icon" src="assets/images/whatsapp.png" alt="Whatsapp">
                            </div>
                            <div class="text-center pl-2 align-item-center">
                                <span class="text-center footer-btn">Whatsapp</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="desktop-call-div d-none d-md-block">
            <a onclick="return gtag_call_conversion('tel:+917889107344');" href="tel:+917889107344">
                <img class="img-fluid desktop-call-icon icon-change" id="icon-change" src="assets/images/call1.png"
                    style="background-color:<?php echo $footerbtncolor; ?>" alt="Call Now"></a>
        </div>
        <div class="container-fluid  desktop-call-number">
            <!-- <div class="row ">
    <div class="col-12 desktop-call-number-image">
      <img class="img-fluid " src="assets\images\1858.jpg" alt="">
    </div>
  </div> -->
        </div>
    </div>

    <!-- ***** Clients-container END ***** -->

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <Script>
    var tid = setInterval(mycode, 2000);
    var i = 0;
    var addcls = ".wpib-scale";

    function mycode() {
        i++;
        if (i == 9) {
            i = 1;
        }
        var lcls = ".website-page-icon-box";
        var cls = ".wpib-" + i;
        var ncls = "wpib-scale";
        jQuery(document).ready(function() {
            jQuery(lcls).removeClass(ncls);
            jQuery(cls).addClass(ncls);
        });
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "Website Ninjas - Website Designer in Chandigarh",
        "image": "https://www.webninjas.in/assets/images/website-ninjas-logo.jpg",
        "@id": "",
        "url": "https://www.webninjas.in/",
        "telephone": "+917889107344",
        "priceRange": "5000-50,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "SCO 85-86, 4th Floor, Sector 34A",
            "addressLocality": "Chandigarh",
            "postalCode": "160022",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 30.72398848238574,
            "longitude": 76.76888175398236
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ],
            "opens": "10:00",
            "closes": "20:00"
        }
    }
    </script>
//     <script type="text/javascript">
//     var CaptchaCallback = function() {
//         grecaptcha.render('RecaptchaField1', {'sitekey' : '6LeCOnQiAAAAAPp0bB0oXNT10gxh8L830rdTMudl'});
//         grecaptcha.render('RecaptchaField2', {'sitekey' : '6LeCOnQiAAAAAPp0bB0oXNT10gxh8L830rdTMudl'});
//     };
// </script>
    
<script>
  jQuery('#requestForm').on('submit', function(e) {
      
      
    jQuery('#requestBtn').val('Requesting...');
    jQuery('#requestBtn').attr('disabled', true);
    jQuery.ajax({
      url: 'request-form.php',
      type: 'post',
      data: jQuery('#requestForm').serialize(),
      success: function(result) {
        jQuery('#requestBtn').val('Get a Free Quote Today');
        jQuery('#requestBtn').attr('disabled', false);
        alert(result);
      }
    })
    jQuery('#requestForm')[0].reset();
    e.preventDefault();
  });
  jQuery('#requestForm2').on('submit', function(e) {
      
      
    jQuery('#requestBtn').val('Requesting...');
    jQuery('#requestBtn').attr('disabled', true);
    jQuery.ajax({
      url: 'request-form.php',
      type: 'post',
      data: jQuery('#requestForm2').serialize(),
      success: function(result) {
        jQuery('#requestBtn').val('Get a Free Quote Today');
        jQuery('#requestBtn').attr('disabled', false);
        alert(result);
      }
    })
    jQuery('#requestForm')[0].reset();
    e.preventDefault();
  });
</script>

</body>

</html>