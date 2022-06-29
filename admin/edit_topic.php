
<?php
if(isset($_POST['update']))
{
    include("db_config.php");
    $id=$_GET['id'];
$name=mysqli_real_escape_string($con,$_POST['title']);
$sql=mysqli_query($con,"UPDATE `topics` SET `topic_name`='$name' WHERE  id='$id'");
    if($sql)
    {
        $msg='Post Edited Successfully';
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
                    <?php
                  
                    $id=$_GET['id'];
                    
                    include("db_config.php");
                    $query=mysqli_query($con,"SELECT * FROM `topics` WHERE id='$id' ");
                    while($row=mysqli_fetch_assoc($query))
                    {
                      ?>
       
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend class="text-center">Edit Topic</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input type="text" name="title" class="form-control" value="<?php echo $row['topic_name']; ?>" required="required" />
                
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
          <?php
        }
          ?>
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