<!DOCTYPE html>
<head>
<title>
Admin Dashboard</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<link href="css/style.css" rel="stylesheet" >
<script src="js/script.js" ></script>
<style>
#logo
{
    
    
    height: 125%;
    width: 75%;
    margin-left: 35px;
}
</style>

</head>
<body>

<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="https://png.icons8.com/color/1600/circled-user-male-skin-type-1-2.png" alt="LOGO" style="width:80px;height:60px;" id="logo">
            </a> 
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="change_password.php"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="admin_dashboard.php" style="margin-top:30px;"></i> Dashboard   </a>
                    </li>
                    
                     <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-star"></i> Companies <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="pages.php"><i class="fa fa-angle-double-right"></i> View Companies</a></li>
                        <li><a href="add_page.php"><i class="fa fa-angle-double-right"></i> Add Companies</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i> Keywords <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="posts.php"><i class="fa fa-angle-double-right"></i> View Keywords</a></li>
                        <li><a href="add_post.php"><i class="fa fa-angle-double-right"></i> Add Keywords</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-fw fa-star"></i> Posts <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-3" class="collapse">
                        <li><a href="plans.php"><i class="fa fa-angle-double-right"></i> View Posts</a></li>
                        <li><a href="add_plan.php"><i class="fa fa-angle-double-right"></i> Add Posts</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-4"><i class="fa fa-fw fa-star"></i> Job Details <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-4" class="collapse">
                        <li><a href="details.php"><i class="fa fa-angle-double-right"></i> View Job Details</a></li>
                        <li><a href="add_details.php"><i class="fa fa-angle-double-right"></i> Add Job Details</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-5"><i class="fa fa-fw fa-star"></i> Blogs <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-5" class="collapse">
                        <li><a href="blog_details.php"><i class="fa fa-angle-double-right"></i> View Blogs</a></li>
                        <li><a href="add_blog.php"><i class="fa fa-angle-double-right"></i> Add Blog</a></li>
                    </ul>
                    </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>