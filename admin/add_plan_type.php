
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
if(isset($_POST['submit']))
{
    include("db_config.php");
$type=mysqli_real_escape_string($con,$_POST['plan']);
//$banner=$_FILES['banner']['name'];



    $sql=mysqli_query($con,"INSERT INTO plan_types(`plan_name`) VALUES('$type')");
    if($sql)
    {
       $msg='Plan Type Added Successfully';
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
            if(isset(($msg)))
            {
              echo $msg;
            }
            ?>
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12" id="content">
                    <div class="col-md-6 col-md-offset-3">
       
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend class="text-center">Add Plan Type</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Plan Name</label>
              <div class="col-md-9">
                <input type="text" name="plan" class="form-control" required="required" placeholder="Plan Type name" />
 
              </div>
            </div>
    
            <!-- Email input-->
            
    <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg" name="submit">Add</button>
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