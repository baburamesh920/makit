
<?php
if(isset($_POST['add']))
{
    include("db_config.php");
    $location=mysqli_real_escape_string($con,$_POST['location']);
    // $content=mysqli_real_escape_string($con,$_POST['content']);
    $keyword=mysqli_real_escape_string($con,$_POST['keywords']);
    $categories=mysqli_real_escape_string($con,$_POST['categories']);
    $company=mysqli_real_escape_string($con,$_POST['company']);
    $title=mysqli_real_escape_string($con,$_POST['title']);
    $designation=mysqli_real_escape_string($con,$_POST['designation']);
    $last_date=mysqli_real_escape_string($con,$_POST['last_date']);

    $img=$_FILES['image']['name'];
    if($img)
    {
      move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/images/'.$img);
      echo "<script>alert('Image Uploaded Successfully')</script>";
    }
    else{
      echo "<script>alert('Image does not uploaded')</script>";
    }
    $sql=mysqli_query($con,"INSERT INTO `posts` (`location`,`keyword`,`image`,`categories`,`company_id`,`title`,`designation`,`last_date`)
    VALUES('$location','$keyword','$img','$categories','$company','$title','$designation','$last_date') ");
    if($sql)
    {
       $msg='Post Added Successfully';
    }
}

?>
<?php
include("header.php");
?>

    <div id="page-wrapper">
        <div class="container-fluid">
         <p class="text-center">
            <?php
            if(isset($msg))
            {
              echo $msg;
            }
            ?>
            </p>
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12" id="content">
                    <div class="col-md-6 col-md-offset-3">
                   
       
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend class="text-center">Add Post</legend>
            <!-- Name input-->
              <div class="form-group">
              <label class="col-md-3 control-label" for="name">Location</label>
              <div class="col-md-9">
                <select name="location" class="form-control" required="required">
                 <option value="">--Select Location--</option>
                <?php
                include("db_config.php");
                $sql=mysqli_query($con,"SELECT * FROM `location` ");
                while($row=mysqli_fetch_assoc($sql))
                {
                  ?>
                <option value="<?php echo $row['id']; ?>" ><?php echo $row['location']; ?></option>
                <?php
                }
                ?>
                </select>
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3 control-label" for="name"> Keyword</label>
              <div class="col-md-9">
                <select name="keywords" class="form-control" required="required">
                 <option value="">--Select Keywords--</option>
                <?php
                include("db_config.php");
                $sql=mysqli_query($con,"SELECT * FROM `keywords` ");
                while($row=mysqli_fetch_assoc($sql))
                {
                  ?>
                <option value="<?php echo $row['id']; ?>" ><?php echo $row['keywords']; ?></option>
                <?php
                }
                ?>
               
                </select>
              </div>
              </div>
           
            
          
      <!-- <div class="form-group">
              <label class="col-md-3 control-label" for="name">Content</label>
              <div class="col-md-9">
                <textarea  name="content" class="form-control" required="required" ></textarea>
                
              </div>
            </div> -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Title</label>
              <div class="col-md-9">
                <input type="text"  name="title" class="form-control" required="required" >
                
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3 control-label" for="name">Designation</label>
              <div class="col-md-9">
                <input type="text"   name="designation" class="form-control" required="required" >
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Last Date</label>
              <div class="col-md-9">
                <input type="date"  name="last_date" class="form-control" required="required" >
              </div>
            </div>
            
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Image</label>
              <div class="col-md-9">
                <input type="file" name="image" class="form-control" required />
 
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Select Categories</label>
              <div class="col-md-9">
                <select name="categories" class="form-control" required="required">
                 <option value="">--Select Categories--</option>
                <?php
                include("db_config.php");
                $sql=mysqli_query($con,"SELECT * FROM `categories` ");
                while($row=mysqli_fetch_assoc($sql))
                {
                  ?>
                <option value="<?php echo $row['id']; ?>" ><?php echo $row['categories']; ?></option>
                <?php
                }
                ?>
               
                </select>
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3 control-label" for="name">Select Company</label>
              <div class="col-md-9">
                <select name="company" class="form-control" required="required">
                 <option value="">--Select Company--</option>
                <?php
                include("db_config.php");
                $sql=mysqli_query($con,"SELECT * FROM `company` ");
                while($row=mysqli_fetch_assoc($sql))
                {
                  ?>
                <option value="<?php echo $row['id']; ?>" ><?php echo $row['company_name']; ?></option>
                <?php
                }
                ?>
               
                </select>
              </div>
              </div>
           
          
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg" name="add">Add</button>
              </div>
            </div>
          </fieldset>
          </form>
         
          </div>
        
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<!-- <script>
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script> -->
<?php
include("footer.php");
?>