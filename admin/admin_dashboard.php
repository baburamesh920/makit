<?php
include("header.php");
?>
<style>
.abc
{
margin-right: 20px;
    margin-left: 20px;
  }
  .xyz
  {
    margin-left: 69px;
    margin-right: 20px;
  }
    </style>
<div class="container" style="margin-top: 125px;">
	<div class="row xyz">
      <div class="col-md-3 abc">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-file-code-o fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">
                  <?php
                  include("db_config.php");
                  $sql=mysqli_query($con,"SELECT count(*) AS count FROM `company` ");
                
                  $row=mysqli_fetch_assoc($sql);
                    echo $row['count'];
                  ?>


                </p>
                <p class="announcement-text">Companies</p>
              </div>
            </div>
          </div>
          <a href="pages.php">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Expand
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-3 abc">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-barcode fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">
                    <?php
                  include("db_config.php");
                  $sql=mysqli_query($con,"SELECT count(*) AS count FROM `keywords` ");
                
                  $row=mysqli_fetch_assoc($sql);
                    echo $row['count'];
                  ?>


                </p>
                <p class="announcement-text"> Keywords</p>
              </div>
            </div>
          </div>
          <a href="topics.php">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Expand
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
  
     
      <div class="col-md-3 abc">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-eye fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">  <?php
                  include("db_config.php");
                  $sql=mysqli_query($con,"SELECT count(*) AS count FROM `posts` ");
                
                  $row=mysqli_fetch_assoc($sql);
                    echo $row['count'];
                  ?>

</p>
                <p class="announcement-text"> Posts</p>
              </div>
            </div>
          </div>
          <a href="posts.php">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Expand
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
     
    </div><!-- /.row -->
    </div>
    <?php
    include("footer.php");
    ?>