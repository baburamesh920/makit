
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
  $job=mysqli_real_escape_string($con,$_POST['job']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $requirements=mysqli_real_escape_string($con,$_POST['requirements']);
    $benefits=mysqli_real_escape_string($con,$_POST['benefits']);
    $apply=mysqli_real_escape_string($con,$_POST['how_to_apply']);
   
  
    
    $sql=mysqli_query($con,"UPDATE `job_details` SET `job_id`='$job',`job_description`='$description',`job_benefits`='$benefits',`job_requirements`='$requirements',`how_to_apply`='$apply' WHERE id='$id' ");
  


 if($sql)
    {
        $msg='Job Details Edited Successfully';
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
       $sql=mysqli_query($con,"SELECT * FROM `job_details` WHERE id='$id' ");
       while($row1=mysqli_fetch_assoc($sql))
       {
        ?>
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend class="text-center">Edit Job Details</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Job</label>
              <div class="col-md-9">
                <select name="job" class="form-control" required="required">
                 <option value="">--Select Job --</option>
                <?php
                include("db_config.php");
                $sql=mysqli_query($con,"SELECT * FROM `posts` ");
                while($row=mysqli_fetch_assoc($sql))
                {
                    if($row1['job_id']==$row['id'])
                    {

                  ?>
                <option value="<?php echo $row['id']; ?>" selected ><?php echo $row['title']; ?></option>
                <?php
                }
                else
                {
                ?>
                   <option value="<?php echo $row['id']; ?>"  ><?php echo $row['title']; ?></option>
                <?php
                }
            }
            ?>

                </select>
              </div>
              </div>
           
           
            
          
      <div class="form-group">
              <label class="col-md-3 control-label" for="name">Job description</label>
              <div class="col-md-9">
                <textarea  name="description" class="form-control" required="required" ><?php echo $row1['job_description']; ?></textarea>
                
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Job Benefits</label>
              <div class="col-md-9">
                <textarea  name="benefits" class="form-control" required="required" ><?php echo $row1['job_benefits']; ?></textarea>
                
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Job Requirements</label>
              <div class="col-md-9">
                <textarea  name="requirements" class="form-control" required="required" ><?php echo $row1['job_requirements']; ?></textarea>
                
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">How to apply</label>
              <div class="col-md-9">
                <textarea  name="how_to_apply" class="form-control" required="required" ><?php echo $row1['how_to_apply']; ?></textarea>
                
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