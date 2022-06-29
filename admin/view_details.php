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
            <th>Job</th>
            <th>Job Description</th>
            <!-- <th>Job benefits</th>
            <th>Job Requirements</th>
            <th>How to Apply</th> -->
         
            <th class="text-center">Edit</th>

            <th class="text-center">Delete</th>
        </tr>
    </thead>
    <?php
    include("db_config.php");
    $i=1;
    $sql=mysqli_query($con,"SELECT p.title,d.* 
    FROM posts p
    JOIN job_details d ON d.job_id=p.id 
    ");
    while($row=mysqli_fetch_assoc($sql))
    {
        ?>
            <tr>
                <td><?php echo $i; ?> </td>
                <td><?php echo $row['title']; ?></td>
                 <td><?php echo $row['job_description']; ?></td>
                  <!-- <td><?php echo $row['job_benefits']; ?></td>
                  <td><?php echo $row['job_requirements']; ?></td>
                 <td><?php echo $row['how_to_apply']; ?></td> -->
                 
                <td class="text-center"><a class='btn btn-info btn-xs' href="edit_plan.php?id=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> <!-- /* <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a> --></td>
                <!-- <input type="hidden" id="page" value="<?php echo $row['page']; ?>" />
                <input type="hidden" id="post" value="<?php echo $row['name']; ?>" /> -->
                 <td class="text-center"><a class='btn btn-info btn-xs' href="delete_plan.php?id=<?php echo $row['id'];?>" ><span class="glyphicon glyphicon-trash"></span> delete</a> <!-- /* <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a> --></td>
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