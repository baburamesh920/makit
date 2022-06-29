
<?php
if(isset($_POST['add']))
{
    include("db_config.php");
    $job=mysqli_real_escape_string($con,$_POST['job']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $requirements=mysqli_real_escape_string($con,$_POST['requirements']);
    $benefits=mysqli_real_escape_string($con,$_POST['benefits']);
    $apply=mysqli_real_escape_string($con,$_POST['how_to_apply']);
   

  
    $sql=mysqli_query($con,"INSERT INTO `job_details` (`job_id`,`job_description`,`job_benefits`,`job_requirements`,`how_to_apply`)
    VALUES('$job','$description','$benefits','$requirements','$apply') ");
    if($sql)
    {
       $msg='Job Details Added Successfully';
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
            <legend class="text-center">Add Job Details</legend>
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
                  ?>
                <option value="<?php echo $row['id']; ?>" ><?php echo $row['title']; ?></option>
                <?php
                }
                ?>
                </select>
              </div>
              </div>
           
           
            
          
      <div class="form-group">
              <label class="col-md-3 control-label" for="name">Job description</label>
              <div class="col-md-9">
                <textarea  name="description" class="form-control" required="required" ></textarea>
                
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Job Benefits</label>
              <div class="col-md-9">
                <textarea  name="benefits" class="form-control" required="required" ></textarea>
                
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Job Requirements</label>
              <div class="col-md-9">
                <textarea  name="requirements" class="form-control" required="required" ></textarea>
                
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">How to apply</label>
              <div class="col-md-9">
                <textarea  name="how_to_apply" class="form-control" required="required" ></textarea>
                
              </div>
            </div>
         
             
           
            <!-- Email input-->
         
          
       
          
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