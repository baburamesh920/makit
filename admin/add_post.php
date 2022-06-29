
<?php
if(isset($_POST['add']))
{
    include("db_config.php");
$title=mysqli_real_escape_string($con,$_POST['keyword']);
$sql=mysqli_query($con,"INSERT INTO keywords(`keywords`) VALUES('$title')");

    if($sql)
    {
       $msg='Keyword Added Successfully';
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
            <legend class="text-center">Add Keyword</legend>
            <!-- Name input-->
              <!-- <div class="form-group">
              <label class="col-md-3 control-label" for="name">Select Page</label>
              <div class="col-md-9">
                <select name="page" class="form-control" required="required">
                 <option value="">--Select Page--</option>
              
               
                </select>
              </div>
              </div> -->
               <div class="form-group">
              <label class="col-md-3 control-label" for="name">Keyword Name</label>
              <div class="col-md-9">
                <input type="text" name="keyword" class="form-control" required="required" />
                
              </div>
            </div>
<!--             
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Title</label>
              <div class="col-md-9">
                <input type="text" name="title" class="form-control" required="required" />
                
              </div>
            </div>
      <div class="form-group">
              <label class="col-md-3 control-label" for="name">Content</label>
              <div class="col-md-9">
                <textarea  name="content" class="form-control" required="required" ></textarea>
                
              </div>
            </div>
            < Email input-->
            <!-- <div class="form-group">
              <label class="col-md-3 control-label" for="email"> Image</label>
              <div class="col-md-9">
                <input type="file" name="image"  class="form-control" id="imgInp" required >
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Thumbnail</label>
              <div class="col-md-9">
             <input type="file" name="thumbnail"  class="form-control"  required>
            </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Read More Link</label>
              <div class="col-md-9">
             <input type="text" name="link"  class="form-control"  required>
            </div>
            </div> -->
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