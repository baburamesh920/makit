<!--[if lt IE 8]>
   <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

<![endif]-->  

<!--Main Wrapper Start-->
<div class="as-mainwrapper">
<!--Header Area Start-->
<header id="sticky-header" class="header-area">
    <!-- Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="col-md-12">
                <div class="header-top-list">
                    <ul class="top-contact-list">
                        <li><a href="#">Call Us: 011 222 3333</a></li>
                        <li><a href="#">Email: youremail@example.com</a></li>
                    </ul>
                    <div class="social-links">
                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top Start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo"><a href="index.php"><img src="images/logo/logo.png" alt="JobHere"></a></div>
            </div>
            <div class="col-lg-9 d-none d-lg-block">
                <div class="pull-right">
                    <nav id="primary-menu">
                        <ul class="main-menu text-right">
                            <li><a href="index.php">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.php">Home Version One</a></li>
                                    <li><a href="index-2.html">Home Version Two</a></li>
                                    <li><a href="index-3.html">Home Box Layout</a></li>
                                </ul>
                            </li>
                            <li><a href="job-board.html">Jobs</a>
                                <ul class="dropdown">
                                    <li><a href="single-job-post.html">Single Job</a></li>
                                    <li><a href="job-details.html">Job Details</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="job-board.html">Job Board</a></li>
                                    <li><a href="single-job-post.html">Single Job</a></li>
                                    <li><a href="job-details.html">Job Details</a></li>
                                    <li><a href="candidates.html">Candidates</a></li>
                                    <li><a href="resume.html">Resume</a></li>
                                    <li><a href="blog.html">Blog Page</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="login-btn">
                        <a class="modal-view button" href="#" data-toggle="modal" data-target="#register">Register</a>
                        <a class="modal-view button" href="#" data-toggle="modal" data-target="#productModal">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.php">HOME</a>
                                    <ul>
                                        <li><a href="index.php">Home Version One</a></li>
                                        <li><a href="index-2.html">Home Version Two</a></li>
                                        <li><a href="index-3.html">Home Box Layout</a></li>
                                    </ul>
                                </li>
                                <li><a href="job-board.html">Job</a>
                                    <ul class="sub-menu">
                                        <li><a href="single-job-post.html">Single Job</a></li>
                                        <li><a href="job-details.html">Job Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#">Page</a>
                                    <ul class="sub-menu">
                                        <li><a href="job-board.html">Job Board</a></li>
                                        <li><a href="single-job-post.html">Single Job</a></li>
                                        <li><a href="job-details.html">Job Details</a></li>
                                        <li><a href="candidates.html">Candidates</a></li>
                                        <li><a href="resume.html">Resume</a></li>
                                        <li><a href="blog.html">Blog Page</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->  
</header>
<!-- End of Header Area -->
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area pt-94 pb-85 bg-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h2 class="text-center"><?= $_GET['pbreadcrumb'] ?></h2>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center m-0">
			    <?php foreach ($_GET['pblinks'] as  $key => $data) { ?>
                                 <li><a href="<?= $data ?>"><?= $key ?></a></li>
			    <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
