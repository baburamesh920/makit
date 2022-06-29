
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
  $content=mysqli_real_escape_string($con,$_POST['content']);
    $title=mysqli_real_escape_string($con,$_POST['title']);
    $img=$_FILES['image']['name'];
    if($img)
    {
      move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/blog/'.$img);
     
    
    $sql=mysqli_query($con,"UPDATE `blogs` SET `title`='$title',`description`='$content',`blog_image`='$img' WHERE id='$id' ");
  
    }
    else{
        $sql=mysqli_query($con,"UPDATE `blogs` SET `title`='$title',`description`='$content' WHERE id='$id' ");
    }

 if($sql)
    {
        $msg='Blog Post Edited Successfully';
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
       $sql=mysqli_query($con,"SELECT * FROM `blogs` WHERE id='$id' ");
       while($row1=mysqli_fetch_assoc($sql))
       {
        ?>
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend class="text-center">Edit Blog Details</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Title</label>
              <div class="col-md-9">
                <input type="text"  name="title" class="form-control" required="required" value="<?php echo $row1['title']; ?>">
                
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Content</label>
              <div class="col-md-9">
                <textarea   name="content" class="form-control" required="required" ><?php echo $row1['description']; ?></textarea>
                
              </div>
              </div>
          
            
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Image</label>
              <div class="col-md-9">
                <input type="file" name="image" class="form-control"  />
                <img src="blog/<?php echo $row1['blog_image']; ?>" style="width:70px;height:70px;" >
 
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