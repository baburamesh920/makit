
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
$page=mysqli_real_escape_string($con,$_POST['page']);
$banner=$_FILES['banner']['name'];

$query=mysqli_query($con,"SELECT * FROM banner_images WHERE page='$page' ");
while($row=mysqli_fetch_assoc($query))
{
    $image=$row['image'];
  $destination_path = "banner/";
   
   $suc= move_uploaded_file($_FILES['banner']['tmp_name'], $destination_path.$_FILES['banner']['name']);

    $sql=mysqli_query($con,"UPDATE `banner_images` SET `image`='$banner' WHERE page='$page '");
    if($suc)
    {
        $msg='Banner Image Uploaded Successfully';
    }

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
            </p>
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12" id="content">
                    <div class="col-md-6 col-md-offset-3">
       
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend class="text-center">Change Banner Image</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Select Page</label>
              <div class="col-md-9">
                <select name="page" class="form-control" required="required">
 <option value="">--Select Page--</option>
                <?php
                include("db_config.php");
                $sql=mysqli_query($con,"SELECT * FROM `pages` ");
                while($row=mysqli_fetch_assoc($sql))
                {
                  ?>
<option value="<?php echo $row['id']; ?>" ><?php echo $row['name']; ?></option>
<?php
}
?>
                </select>
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Banner Image</label>
              <div class="col-md-9">
                <input type="file" name="banner"  class="form-control" id="imgInp" required="required">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your Image</label>
              <div class="col-md-9">
            <img id="blah" src="#" alt="Please upload image" style="width:50%;height:50%;" />
            </div>
            </div>
    <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg" name="update">Update</button>
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