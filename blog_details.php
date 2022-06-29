<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Blog Details || JobHere</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- favicon
        ============================================ -->        
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        
        <!-- Google Fonts
        ============================================ -->        
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
        
        <!-- All css files are included here
        ============================================ -->    
        <!-- Bootstrap CSS
        ============================================ -->        
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
        
        <!-- This core.css file contents all plugins css file
        ============================================ -->
        <!-- Nice select css
        ============================================ -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- This core.css file contents all plugins css file
        ============================================ -->
        <link rel="stylesheet" href="css/core.css">
        
        <!-- Theme shortcodes/elements style
        ============================================ -->  
        <link rel="stylesheet" href="css/shortcode/shortcodes.css">
        
        <!--  Theme main style
        ============================================ -->  
        <link rel="stylesheet" href="style.css">
        
        <!-- Color CSS
        ============================================ -->
        <link rel="stylesheet" href="css/plugins/color.css">
        
        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        
        <!-- Modernizr JS -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>  
    <body>
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
                                <li><a href="#">Call Us: 516-595-3077</a></li>
                                <li><a href="#">Email: info@makitinc.net</a></li>
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

                                    </li>

                                    <li><a href="about.html">About</a>

                                    </li>
                                    <li><a href="#">Services</a>
                                        <ul class="dropdown">
                                            <li><a href="overview.html">Overview</a></li>
                                            <li><a href="staffing.html">Staffing</a></li>
                                            <li><a href="training.html">Training</a></li>
                                            <li><a href="consulting.html">Consulting</a></li>
                                            <li><a href="recruitmanagement.html">Recruiting Management</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">Careers</a>
                                        <ul class="dropdown">
                                            <li><a href="job-board.php">Search Jobs</a></li>
                                            <li><a href="fulltimeemployee.html">Full time employee</a></li>
                                            <li><a href="contract.html">Contract</a></li>
                                            <li><a href="c2h.html">C2H</a></li>
                                            <li><a href="inhouse.html">Inhouse</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.php">Blog</a>

                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>

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

                                        </li>
                                        <li><a href="about.html">About</a>

                                        </li>

                                        <li><a href="#">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="overview.html">Overview</a></li>
                                            <li><a href="staffing.html">Staffing</a></li>
                                            <li><a href="training.html">Training</a></li>
                                            <li><a href="consulting.html">Consulting</a></li>
                                            <li><a href="recruitmanagement.html">Recruiting Management</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="">Careers</a>
                                            <ul class="sub-menu">
                                                <li><a href="job-board.php">Search Jobs</a></li>
                                                <li><a href="fulltimeemployee.html">Full time employee</a></li>
                                                <li><a href="contract.html">Contract</a></li>
                                                <li><a href="c2h.html">C2H</a></li>
                                                <li><a href="inhouse.html">Inhouse</a></li>
                                               
                                            </ul>
                                        </li>
                                        <li><a href="blog.php">Blog</a>

                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
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

<?php
$id=$_GET['id'];
include("admin/db_config.php");
$sql=mysqli_query($con,"SELECT * FROM `blogs` WHERE id='$id' ");
while($row=mysqli_fetch_assoc($sql))
{
    ?>

            <!--Breadcrumb Banner Area Start-->
            <div class="breadcrumb-banner-area pt-94 pb-85 bg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-text">
                                <h2 class="text-center">Blog Details</h2>
                                <div class="breadcrumb-bar">
                                    <ul class="breadcrumb text-center m-0">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><?php echo $row['title']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Breadcrumb Banner Area-->
                <!--Start of Blog Area-->
                <div class="blog-area ptb-60 ptb-sm-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="single-blog hover-effect mb-50">
                                    <div class="blog-image">
                                        <img src="admin/blog/<?php echo $row['blog_image']; ?>" class="d-block mx-auto"  style="width:80%" alt="">
                                    </div>
                                    <div class="blog-text">
                                        <h4><a href="#"><?php echo $row['title']; ?>.</a></h4>
                                        <div class="blog-post-info">
                                            <span><?php echo date("l, j F, Y h:i A",strtotime($row['posted_at'])); ?>.</span>
                                            <span>ADMIN </span>
                                        
                                        </div>
                                        <?php
                                        $array=explode('<br/>',$row['description']);
                                        $no=count($array);
                                        for($i=0; $i< $no; $i++)
                                        {
                                            ?>
                                 
                                        <p class="mb-25"><?php echo $array[$i]; ?></p>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                               
                                    <div class="social-links pull-right">
                                        <span>Share:</span>
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                    </div>
                                </div>
                                <!-- <div class="comments fix pt-55">
                                    <h4 class="title pb-8 mb-27">Comments</h4>
                                    <div class="single-comment fix mb-30">
                                        <div class="author-image">
                                            <img alt="" src="images/comment/1.jpg">
                                        </div>
                                        <div class="comment-text fix">
                                            <div class="author-info">
                                                <h4 class="mb-8"><a href="#">MD Abul Miya</a></h4>
                                                <span class="reply"><a href="#">Reply</a></span>
                                                <span class="comment-time">Posted on Mar 11, 2018 /</span>
                                            </div>
                                            <p class="mb-18">There are many variations of passages of Lorem Ipsum available, but the majority have suffered aation in some form, by injected humour,</p>
                                        </div>
                                    </div>
                                    <div class="single-comment fix mb-30 ml-130">
                                        <div class="author-image">
                                            <img alt="" src="images/comment/2.jpg">
                                        </div>
                                        <div class="comment-text fix">
                                            <div class="author-info">
                                                <h4 class="mb-8"><a href="#">Md Robiul Siddikee</a></h4>
                                                <span class="reply"><a href="#">Reply</a></span>
                                                <span class="comment-time">Posted on Mar 15, 2018 /</span>
                                            </div>
                                            <p class="mb-18">There are many variations of passages of Lorem Ipsum available, but the majority have suffered aation in some form, by injected humour,</p>
                                        </div>
                                    </div>
                                    <div class="single-comment fix mb-30">
                                        <div class="author-image">
                                            <img alt="" src="images/comment/3.jpg">
                                        </div>
                                        <div class="comment-text fix">
                                            <div class="author-info">
                                                <h4 class="mb-8"><a href="#"> Samia Sultana</a></h4>
                                                <span class="reply"><a href="#">Reply</a></span>
                                                <span class="comment-time">Posted on Feb 12, 2018 /</span>
                                            </div>
                                            <p class="mb-18">There are many variations of passages of Lorem Ipsum available, but the majority have suffered aation in some form, by injected humour,</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="col-lg-3 sidebar-right">
                                <div class="single-sidebar-widget mb-48">
                                    <div class="search-container">
                                        <form action="#" method="post">
                                            <input type="text" placeholder="Search keyword"/>
                                            <button>Search</button>
                                        </form>                               
                                    </div> 
                                </div>
                                <div class="single-sidebar-widget mb-48">
                                    <div class="sidebar-widget-title">
                                        <h4><span>Categories</span></h4>
                                    </div>
                                    <ul class="sidebar-widget-lists">
                                        <li class="ptb-10"><a href="#">Popular posts<span class="ml-9">(9)</span></a></li>
                                        <li class="ptb-10"><a href="#">Productivity <span class="ml-9">(5)</span></a></li>
                                        <li class="ptb-10"><a href="#">Resumes <span class="ml-9">(2)</span></a></li>
                                        <li class="ptb-10"><a href="#">Women <span class="ml-9">(9)</span></a></li>
                                        <li class="ptb-10"><a href="#">Quitting <span class="ml-9">(9)</span></a></li>
                                        <li class="ptb-10"><a href="#">Popular posts <span class="ml-9">(7)</span></a></li>
                                        <li class="ptb-10"><a href="#">Productivity <span class="ml-9">(2)</span></a></li>
                                        <li class="ptb-10"><a href="#">Resumes <span class="ml-9">(5)</span></a></li>
                                    </ul>
                                </div>
                                <div class="single-sidebar-widget mb-48">
                                    <div class="sidebar-widget-title">
                                        <h4><span>Recent Posts</span></h4>
                                    </div>
                                    <div class="recent-posts">
                                        <div class="recent-post-item ptb-20">
                                            <h5 class="mb-6"><a href="#">There are many variations of</a></h5>
                                            <span class="block"><i class="zmdi zmdi-calendar-check mr-10"></i>20 Jun 2017</span>
                                        </div>
                                        <div class="recent-post-item ptb-20">
                                            <h5 class="mb-6"><a href="#">There are many variations of</a></h5>
                                            <span class="block"><i class="zmdi zmdi-calendar-check mr-10"></i>15 Mar 2018</span>
                                        </div>
                                        <div class="recent-post-item ptb-20">
                                            <h5 class="mb-6"><a href="#">There are many variations of</a></h5>
                                            <span class="block"><i class="zmdi zmdi-calendar-check mr-10"></i>22 Feb 2018</span>
                                        </div>
                                        <div class="recent-post-item ptb-20">
                                            <h5 class="mb-6"><a href="#">There are many variations of</a></h5>
                                            <span class="block"><i class="zmdi zmdi-calendar-check mr-10"></i>01 Jan 2015</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <?php

}
?>
                <!--End of Blog Area-->
            <!--Start of Footer Widget-area-->
            <footer class="footer-area">
                <div class="footer-top bg-opacity-dark-blue-90 ptb-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 pb-sm-30">
                                <div class="subscribe-text">
                                    <h3>Subscribe To Our Newsletter</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="subscribe-form">
                                    <input type="email" name="email" id="eamil" placeholder="Enter Your Email.....">
                                    <button>Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-widget-area ptb-80 pb-sm-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-5">
                                <div class="single-footer-widget">
                                    <h3 class="text-white mb-26">GET IN TOUCH</h3>
                                    <span class="text-white mb-9"><i class="fa fa-phone"></i>+012 345 678 102 </span>
                                    <span class="text-white mb-9"><i class="fa fa-envelope"></i>info@example.com</span>
                                    <span class="text-white mb-9"><i class="fa fa-globe"></i>www.example.com</span>
                                    <span class="text-white mb-9"><i class="fa fa-map-marker"></i>ur address goes here,street.</span>
                                </div>
                            </div>                                
                            <div class="col-lg-3 col-md-3">
                                <div class="single-footer-widget">
                                    <h3 class="text-white mb-21">By Regions</h3>
                                    <ul class="footer-list">
                                        <li><a href="#">Sudia Region</a></li>
                                        <li><a href="#">North America</a></li>
                                        <li><a href="#">Africa</a></li>
                                        <li><a href="#">China</a></li>
                                        <li><a href="#">Brazil</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 d-md-none d-lg-block">
                                <div class="single-footer-widget">
                                    <h3 class="text-white mb-21">Job Types</h3>
                                    <ul class="footer-list">
                                        <li><a href="#">Full Time Job</a></li>
                                        <li><a href="#">Part Time Job</a></li>
                                        <li><a href="#">Temporary Job</a></li>
                                        <li><a href="#">Internship Job</a></li>
                                        <li><a href="#">Developer</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="single-footer-widget">
                                    <h3 class="text-white mb-21">Keyword By Jobs</h3>
                                    <ul class="footer-list">
                                        <li><a href="#">Graphic Designer</a></li>
                                        <li><a href="#">HTML Designer</a></li>
                                        <li><a href="#">WP Developer</a></li>
                                        <li><a href="#">Joomla Developer</a></li>
                                        <li><a href="#">Content Writer</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Footer Widget-area-->
                <!-- Start of Footer area -->
                <div class="copyright-area text-center ptb-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer-text">
                                    <span class="text-white block">
                                        Copyright&copy; 
                                        <a href="#">Jobhere</a>
                                        .All right reserved.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End of Footer area -->
        </div>    
        <!--End of Main Wrapper Area--> 
            
        <!--Start of Login Form-->
        <div id="quickview-login">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-pop-up-content ptb-60 pl-60 pr-60">
                                <div class="area-title text-center mb-43">
                                    <img src="images/logo/logo.png" alt="jobhere">
                                </div>
                                <form method="post" action="#">
                                    <div class="form-box">
                                        <input type="text" name="username" placeholder="Email" class="mb-14">
                                        <input type="password" name="pass" placeholder="Password">
                                    </div>
                                    <div class="fix ptb-30">
                                        <span class="remember pull-left"><input class="p-0 pull-left" type="checkbox">Remember Me</span>
                                        <span class="pull-right"><a href="#">Forget Password?</a></span>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="text-uppercase">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>  
                </div>
            </div>
        </div>
        <!--End of Login Form-->
        <!--Start of Login Form-->
        <div id="quickview-register">
            <!-- Modal -->
            <div class="modal fade" id="register" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-pop-up-content ptb-60 pl-60 pr-60">
                                <div class="area-title text-center mb-43">
                                    <img src="images/logo/logo.png" alt="jobhere">
                                </div>
                                <form method="post" action="#">
                                    <div class="form-box box2">
                                        <input type="text" name="firstname" placeholder="First Name" class="mb-14">
                                        <input type="text" name="lastname" placeholder="Last Name">
                                    </div>
                                    <div class="form-box">
                                        <input type="email" name="emailnew" placeholder="Email" class="mb-14">
                                        <input type="password" name="pass" placeholder="Password">
                                    </div>
                                    <div class="fix ptb-30">
                                        <span class="remember pull-left"><input class="p-0 pull-left" type="checkbox">Remember Me</span>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="text-uppercase">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>  
                </div>
            </div>
        </div>
        <!--End of Login Form-->
       
        
        <!-- jquery latest version
        ========================================================= -->   
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        
        <!-- Bootstrap framework js
        ========================================================= -->          
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/popper.js"></script>
        
        <!-- Owl Carousel js
        ========================================================= -->       
        <script src="js/owl.carousel.min.js"></script>
            
        <!-- Jquery nice select js 
        ========================================================= -->   
        <script src="js/jquery.nice-select.min.js"></script>
        
        <!-- nivo slider js
        ========================================================= -->       
        <script src="lib/nivo-slider/js/jquery.nivo.slider.js"></script>
        <script src="lib/nivo-slider/home.js"></script>
        
        <!-- Js plugins included in this file
        ========================================================= -->   
        <script src="js/plugins.js"></script>
        
        <!-- Video Player JS
        ========================================================= -->           
        <script src="js/jquery.mb.YTPlayer.js"></script>
        
        <!-- AJax Mail JS
        ========================================================= -->           
        <script src="js/ajax-mail.js"></script>
        
        <!-- Mail Chimp JS
        ========================================================= -->           
        <script src="js/jquery.ajaxchimp.min.js"></script>
        
        <!-- Waypoint Js
        ========================================================= -->   
        <script src="js/waypoints.min.js"></script>
        
        <!-- Main js file contents all jQuery plugins activation
        ========================================================= -->       
        <script src="js/main.js"></script>
        
    </body>

<!-- Mirrored from themeshub.io/preview/jobhere/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Sep 2018 10:49:38 GMT -->
</html>