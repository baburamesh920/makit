
<?php
session_start();
if($_SESSION)
{
$email=$_SESSION['email'];
}
else
{
    header("location:admin_login.php");
}
if(isset($_POST['update']))
{
  include("db_config.php");
  $id=$_GET['id'];
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
    
    $sql=mysqli_query($con,"UPDATE `posts` SET `location`='$location',`keyword`='$keyword',`categories`='$categories',`company_id`='$company',`title`='$title',`designation`='$designation',`image`='$img',`last_date`='$last_date' WHERE id='$id' ");
  }
  else
  {
    $sql=mysqli_query($con,"UPDATE `posts` SET `location`='$location',`keyword`='$keyword',`categories`='$categories',`company_id`='$company',`title`='$title',`designation`='$designation',`last_date`='$last_date' WHERE id='$id' ");
  }


 if($sql)
    {
        $msg='Job Edited Successfully';
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
       <?php
       include("db_config.php");
       $id=$_GET['id'];
       $sql=mysqli_query($con,"SELECT * FROM `posts` WHERE id='$id' ");
       while($row1=mysqli_fetch_assoc($sql))
       {
        ?>
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend class="text-center">Edit Job</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Location</label>
              <div class="col-md-9">
                <select name="location" class="form-control" required="required">
                
                <?php
                include("db_config.php");
                $sql=mysqli_query($con,"SELECT * FROM `location` ");
                while($row=mysqli_fetch_assoc($sql))
                {
                  if($row1['location'] == $row['id'])
                  {

                  ?>
                <option value="<?php echo $row['id']; ?>" selected ><?php echo $row['location']; ?></option>
                <?php
                }
                else
                {
                ?>
                     <option value="<?php echo $row['id']; ?>" ><?php echo $row['location']; ?></option>
                <?php
                }
              }
                ?>
                </select>
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3 control-label" for="name"> Keyword</label>
              <div class="col-md-9">
                <select name="keywords" class="form-control" required="required">
               
                <?php
                include("db_config.php");
                $sql=mysqli_query($con,"SELECT * FROM `keywords` ");
                while($row=mysqli_fetch_assoc($sql))
                {
                  if($row1['keyword'] == $row['id'])
                  {

                  ?>
                <option value="<?php echo $row['id']; ?>" selected ><?php echo $row['keywords']; ?></option>
                <?php
                }
                else
                {
                ?>
                     <option value="<?php echo $row['id']; ?>" ><?php echo $row['keywords']; ?></option>
                <?php
                }
              }
                ?>
               
                </select>
              </div>
              </div>
           
            
          
     
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Title</label>
              <div class="col-md-9">
                <input type="text"  name="title" class="form-control" required="required" value="<?php echo $row1['title']; ?>">
                
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3 control-label" for="name">Designation</label>
              <div class="col-md-9">
                <input type="text"   name="designation" class="form-control" required="required"  value="<?php echo $row1['designation']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Last Date</label>
              <div class="col-md-9">
                <input type="date"  name="last_date" class="form-control" required="required"  value="<?php echo $row1['last_date']; ?>">
              </div>
            </div>
            
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Image</label>
              <div class="col-md-9">
                <input type="file" name="image" class="form-control"  />
                <img src="images/<?php echo $row1['image']; ?>" style="width:75px;height:75px;" >
 
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Select Categories</label>
              <div class="col-md-9">
                <select name="categories" class="form-control" required="required">
            
                <?php
                include("db_config.php");
                $sql=mysqli_query($con,"SELECT * FROM `categories` ");
                while($row=mysqli_fetch_assoc($sql))
                {
                  if($row1['category'] == $row['id'])
                  {

                  ?>
                <option value="<?php echo $row['id']; ?>" selected ><?php echo $row['categories']; ?></option>
                <?php
                }
                else
                {
                ?>
                     <option value="<?php echo $row['id']; ?>" ><?php echo $row['categories']; ?></option>
                <?php
                }
              }
                ?>
               
                </select>
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3 control-label" for="name">Select Company</label>
              <div class="col-md-9">
                <select name="company" class="form-control" required="required">
              
                <?php
                include("db_config.php");
                $sql=mysqli_query($con,"SELECT * FROM `company` ");
                while($row=mysqli_fetch_assoc($sql))
                {
                  if($row1['company_id'] == $row['id'])
                  {

                  ?>
                <option value="<?php echo $row['id']; ?>" selected ><?php echo $row['company_name']; ?></option>
                <?php
                }
                else
                {
                ?>
                     <option value="<?php echo $row['id']; ?>" ><?php echo $row['company_name']; ?></option>
                <?php
                }
              }
                ?>
               
                </select>
              </div>
              </div>
           
          
            <!-- Email input-->
            
    <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg" name="update">Update</button>
              </div>
            </div>
          </fieldset>
          </form>
         <?php
       }
       ?>
          </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<script>
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
</script>
<?php
include("footer.php");
?>