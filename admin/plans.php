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
            <th>Location</th>
            <th>Keyword</th>
            <th>Image</th>
       
            <th>Categories</th>
            <th>Company Name</th>
            <th class="text-center">Edit</th>

            <th class="text-center">Delete</th>
        </tr>
    </thead>
    <?php
    include("db_config.php");
    $i=1;
    $sql=mysqli_query($con,"SELECT p.id,l.location,s.keywords,pt.company_name ,p.image,p.categories,c.categories
    FROM posts p
    JOIN keywords s ON p.keyword=s.id 
    JOIN company pt ON pt.id=p.company_id
    JOIN categories c ON p.categories=c.id 
    JOIN location l ON l.id=p.location  ");
    while($row=mysqli_fetch_assoc($sql))
    {
        ?>
            <tr>
                <td><?php echo $i; ?> </td>
                <td><?php echo $row['location']; ?></td>
                 <td><?php echo $row['keywords']; ?></td>
                  <td><?php echo $row['image']; ?></td>
              
                 <td><?php echo $row['categories']; ?></td>
                  <td><?php echo $row['company_name']; ?></td>
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