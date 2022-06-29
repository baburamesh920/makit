<!doctype html>
<html class="no-js" lang="en">

<?php 
	include_once('admin/db_config.php');
	$upload_path = './uploads/resumes';
	$allowed =  array('doc','docx' ,'pdf', 'txt');
	$_GET['ptitle'] = 'Resume || JobHere';
	$_GET['pbreadcrumb'] = 'Create Resume';
	$_GET['pblinks']['Home'] = 'home.html';
	$_GET['pblinks']['Resume'] = 'resume.php';

	// Add header
	include('header.php');
?>

<body>

<?php	
	// Add Menu 
	include('menu.php');

	$model = array();
	$errstr = '';
	
	$model['first_name'] = $model['last_name']  = '';
	$model['email'] = $model['phone'] = $model['job_title'] = '';
	$model['address'] = $model['city'] = $model['state'] = $model['zipcode'] = '';
	//$model['description'] = $model['schoolast_name'] = $model['degree'] = $model['d_description'] = '';
	$model['resume'] = '';


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Handle form submission here
		$model['first_name'] = mysqli_real_escape_string($con, $_POST['first_name']);
		//$model['m_name'] = mysqli_real_escape_string($con, $_POST['m_name']);
		$model['last_name'] = mysqli_real_escape_string($con, $_POST['last_name']);

		$model['address'] = mysqli_real_escape_string($con, $_POST['address']);
		$model['city'] = mysqli_real_escape_string($con, $_POST['city']);
		$model['state'] = mysqli_real_escape_string($con, $_POST['state']);
		$model['zipcode'] = mysqli_real_escape_string($con, $_POST['zipcode']);

		$model['phone'] = mysqli_real_escape_string($con, $_POST['phone']);
		$model['email'] = mysqli_real_escape_string($con, $_POST['email']);  
		//$model['website'] = mysqli_real_escape_string($con, $_POST['website']);

		/*
		$model['description'] = mysqli_real_escape_string($con, $_POST['description']); 
		$model['schoolast_name'] = mysqli_real_escape_string($con, $_POST['schoolast_name']); 
		$model['degree'] = mysqli_real_escape_string($con, $_POST['degree']);
		$model['d_description'] = mysqli_real_escape_string($con, $_POST['d_description']);
		*/

		$model['job_title'] = mysqli_real_escape_string($con, $_POST['title']);
		//$model['date_from'] = mysqli_real_escape_string($con, $_POST['date_from']);
		//$model['date_to'] = mysqli_real_escape_string($con, $_POST['date_to']);
		//$model['ex_description'] = mysqli_real_escape_string($con, $_POST['ex_description']);

		if (!is_dir($upload_path)) { 
			mkdir($upload_path, 0777, true);
		}
		
		// validate file type and size
		if ($_FILES['fileupload']['size'] > 5242880) {
			$errstr = "Resume file size is exceeding 5Mb. Please upload smaller file";
		}

		$ext = pathinfo($_FILES['fileupload']['name'], PATHINFO_EXTENSION);
		if(!in_array($ext, $allowed) ) {
			$errstr = "Resume file should be one of 'doc', 'docx' or 'pdf' or 'txt' type";
		}

		$model['resume'] = $upload_path . '/' . time(). $ext;

		// process and add candidate details
		$q = "SELECT * FROM `resumes` where email = '" . $model['email'] . "' OR phone = '" . $model['phone'] . "'";
		$entry = mysqli_query($con, $q);
		if (mysqli_num_rows($entry) > 0) {
			$errstr = "Resume already uploaded for this email / phone number";
		}

		$insert_sql =  'INSERT INTO `resumes` (' . implode(',', array_keys($model)) . ') VALUES ("' .  implode('","', array_values($model)) . '")';

		if (empty($errstr)) {
			// copy file here
			if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $model['resume'])) {
				$new_entry = mysqli_query($con, $insert_sql);
			} else {
				$errstr = "Failed to save resume file. Please try again !";
			}
		}
	}
?>

<div class="row">
<div class="col-8 offset-2">
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($errstr)) {
 ?>
	   <div class="alert alert-success"> <strong>Success! Successfully saved all details.</strong> </div>
<?php } else { ?>
	   <div class="alert alert-danger"><strong> Error! <?= $errstr ?>. </strong></div>
<?php } } ?>
</div></div>


            <!--Start of Single Job Post Area-->
            <div class="single-job-post-area ptb-130 ptb-sm-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mr-auto ml-auto">
                            <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                                <div class="single-job-content">
                                    <div class="title"><span>Profile</span></div>
                                    <div class="single-job-form">
                                        <div class="single-info pb-14 fix">
                                            <label class="uppercase pull-left m-0">photo</label>
                                            <div class="uploader fix pull-left fileupload">
                                                <input id="fileupload" name="fileupload" type="file" required>
                                                <span class="filename">Resume in word/pdf/txt format</span>            
                                                <span class="action"><i class="zmdi zmdi-folder"></i>Browse</span>    
                                            </div>
                                        </div>
                                        <div class="single-info pb-14">
                                            <label for="first_name" class="uppercase pull-left m-0">First Name</label>
                                            <div class="form-box fix">
                                                <input type="text" id="first_name" name="first_name" placeholder="Please enter your first name" value = "<?=$model['first_name'] ?>" required>
                                            </div>
                                        </div>
                                        <!--div class="single-info pb-14">
                                            <label for="m_name" class="uppercase pull-left m-0">Middle name</label>
                                            <div class="form-box fix">
                                                <input type="text" id="m_name" name="m_name" placeholder="Please enter your middle name">
                                            </div>
                                        </div-->
                                        <div class="single-info">
                                            <label for="last_name" class="uppercase pull-left m-0">last name</label>
                                            <div class="form-box fix">
                                                <input type="text" id="last_name" name="last_name" placeholder="Please enter your last name" value = "<?=$model['last_name'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title"><span>Contact Information</span></div>
                                    <div class="single-job-form">
                                        <div class="single-info mb-14">
                                            <label for="address" class="uppercase pull-left m-0">address</label>
                                            <div class="form-box fix">
                                                <input type="text" id="address" name="address" placeholder="Please enter your address" value = "<?=$model['address'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="single-info mb-14">
                                            <label for="city" class="uppercase pull-left m-0">city</label>
                                            <div class="form-box fix">
                                                <input type="text" id="city" name="city" placeholder="Please enter city name" value = "<?=$model['city'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="single-info mb-14">
                                            <label for="state" class="uppercase pull-left m-0">state</label>
                                            <div class="form-box fix">
                                                <input type="text" id="state" name="state" placeholder="Please enter state name" value = "<?=$model['state'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="single-info mb-14">
                                            <label for="zipcode" class="uppercase pull-left m-0">zip code</label>
                                            <div class="form-box fix">
                                                <input type="text" id="zipcode" name="zipcode" placeholder="Please enter area zip code" value = "<?=$model['zipcode'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="single-info mb-14">
                                            <label for="phone" class="uppercase pull-left m-0">phone</label>
                                            <div class="form-box fix">
                                                <input type="text" id="phone" name="phone" placeholder="Please enter your phone number" value = "<?=$model['phone'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="single-info mb-14">
                                            <label for="email" class="uppercase pull-left m-0">email</label>
                                            <div class="form-box fix">
                                                <input type="text" id="email" name="email" placeholder="Please enter your email" value = "<?=$model['email'] ?>" required>
                                            </div>
                                        </div>
                                        <!--div class="single-info mb-14">
                                            <label for="website" class="uppercase pull-left m-0">website</label>
                                            <div class="form-box fix">
                                                <input type="text" id="website" name="website" placeholder="Please enter your website">
                                            </div>
                                        </div-->
                                    </div>
                                    <!--div class="title"><span>Biography</span></div>
                                    <div class="single-job-form">
                                        <div class="single-info mb-14 fix">
                                            <label class="uppercase pull-left m-0">description</label>
                                            <div class="desc fix">
                                                <textarea name="description" class="fix textarea" cols="30" rows="10" placeholder="Please enter description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title"><span>Education</span></div>
                                    <div class="single-job-form">
                                        <div class="single-info mb-14">
                                            <label for="schoolast_name" class="uppercase pull-left m-0">school name</label>
                                            <div class="form-box fix">
                                                <input type="text" id="schoolast_name" name="schoolast_name" placeholder="Please enter your school name" required>
                                            </div>
                                        </div>
                                        <div class="single-info mb-14">
                                            <label for="schoolast_name" class="uppercase pull-left m-0">degree</label>
                                            <div class="form-box fix">
                                                <input type="text" id="degree" name="degree" placeholder="Please enter your degree" required>
                                            </div>
                                        </div>
                                        <div class="single-info mb-14 fix">
                                            <label class="uppercase pull-left m-0">description</label>
                                            <div class="desc fix">
                                                <textarea name="d_description" class="fix small textarea" cols="30" rows="10" placeholder="Please enter description"></textarea>
                                            </div>
                                        </div>
                                    </div-->
                                    <div class="title"><span>Experience</span></div>
                                    <div class="single-job-form mb-0">
                                        <div class="single-info pb-14">
                                            <label for="title" class="uppercase pull-left m-0">Job Title</label>
                                            <div class="form-box fix">
                                                <input type="text" id="title" name="title" placeholder="Enter your title" value = "<?=$model['job_title'] ?>">
                                            </div>
                                        </div>
                                        <!--div class="single-info mb-14">
                                            <label for="date_from" class="uppercase pull-left m-0">date from</label>
                                            <div class="form-box fix">
                                                <input type="text" id="date_from" name="date_from" placeholder="Please enter date">
                                            </div>
                                        </div>
                                        <div class="single-info mb-14">
                                            <label for="date_to" class="uppercase pull-left m-0">date to</label>
                                            <div class="form-box fix">
                                                <input type="text" id="date_to" name="date_to" placeholder="Please enter date">
                                            </div>
                                        </div-->
                                        <div class="single-info fix">
                                            <!--label class="uppercase pull-left m-0">description </label-->
                                            <div class="desc fix">
                                                <!--textarea name="ex_description" class="fix small textarea" cols="30" rows="10" placeholder="Please enter description"></textarea-->
                                                <div class="resubtn mt-40">
                                                    <button type="submit" class="button button-medium-box">save resume</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Single Job Post Area-->
        <!--Start of Footer Widget-area-->
    <?php include('footer.php'); ?>

<!--script type="text/javascript">
$( function() {
    $( "#date_from" ).datepicker();
});
$( function() {
    $( "#date_to" ).datepicker();
});

</script-->
</body>

<!-- Mirrored from themeshub.io/preview/jobhere/resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Sep 2018 10:49:35 GMT -->
</html>
