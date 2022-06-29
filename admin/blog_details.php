 <?php
 include("header.php");
 ?>
 <div id="page-wrapper">
     <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
             <div class="col-sm-12 col-md-12" id="content">
    <div class="row col-md-9 col-md-offset-1 custyle">
    <table class="table table-striped custab">
    <thead>
   
            <th>ID</th>
            <th>Title</th>
           
            <th>Image</th>
         
            <th class="text-center">Edit</th>

            <th class="text-center">Delete</th>
        </tr>
    </thead>
    <?php
    include("db_config.php");
    $i=1;
    $sql=mysqli_query($con,"SELECT * FROM `blogs` ORDER BY id DESC");
    
    while($row=mysqli_fetch_assoc($sql))
    {
        ?>
            <tr>
                <td><?php echo $i; ?> </td>
                <td><?php echo $row['title']; ?></td>
                 <td><img src="blog/<?php echo $row['blog_image']; ?>" style="width:80px;height:80px;"> </td>
              
             
             
                <td class="text-center"><a class='btn btn-info btn-xs' href="edit_blog.php?id=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> <!-- /* <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a> --></td>
                <!-- <input type="hidden" id="page" value="<?php echo $row['page']; ?>" />
                <input type="hidden" id="post" value="<?php echo $row['name']; ?>" /> -->
                 <td class="text-center"><a class='btn btn-info btn-xs' href="delete_blog.php?id=<?php echo $row['id'];?>" ><span class="glyphicon glyphicon-trash"></span> delete</a> <!-- /* <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a> --></td>
            </tr>
         <?php
         $i++;
     }
         ?>
    </table>
         </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<?php
include("footer.php");
?>