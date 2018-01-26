<?php 
 
 if(isset($_POST['std_add_now']))
 {
	 // $std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_district,$std_gender,$std_father,$std_mother,$std_parent_contact
	 $std_fullname = $_POST['std_fullname'];
	 $std_username = $_POST['std_username'];
	 $std_password = $_POST['std_password'];
	 $std_grade = $_POST['std_grade'];
	 $std_roll = $_POST['std_roll'];
	 $std_dob = $_POST['std_dob'];
	 $std_address = $_POST['std_address'];
	 $std_district = $_POST['std_district'];
	 $std_gender = $_POST['std_gender'];
	 $std_father = $_POST['std_father'];
	 $std_mother= $_POST['std_mother'];
	 $std_parent_contact = $_POST['std_parent_contact'];
	 
	 if($std_fullname=="" or $std_username=="" or $std_password=="" or $std_grade=="" or $std_gender=="" or $std_roll=="" or $std_dob=="" or $std_address=="" or $std_district=="" or $std_father=="" or $std_mother=="" or $std_parent_contact=="")
	 {
		 echo "<script>alert('please fill form and Add Student');</script>";
	 }
	 else
	 {
		 
		 $add_student_done = $ravi->add_student($std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_district,$std_gender,$std_father,$std_mother,$std_parent_contact);
		 if($add_student_done==true)
		 {
			 echo "<script>window.location = 'home.php?ravi=student-information';</script>";
		 }
		 else
		 {
			 echo "<script>alert('contact with developer');</script>";
		 }
		 
	 }
	 
 }


?>

<div class="forms-main">
	
	<div class="graph-form">
		<div class="validation-form">
			<!---->
			<h2 align="center"><?php echo strtoupper($_GET['ravi']); ?></h2>
			<form method="post">
					<div class="col-md-12 form-group1 group-mail">
					<label class="control-label">FullName</label>
					<input type="text" placeholder="Full Name" required="" name="std_fullname">
				</div>
				<div class="vali-form">
				
					
					<div class="col-md-6 form-group1 form-last">
						<label class="control-label">Username</label>
						<input type="text" placeholder="Username" required="" name="std_username">
					</div>
					
						<div class="col-md-6 form-group1">
						<label class="control-label">Password</label>
						<input type="text" placeholder="Password" required="" name="std_password">
					</div>
					<div class="clearfix"> </div>
					<div class="col-md-6 form-group2 group-mail">
					<label class="control-label">Grade</label>
					<select name="std_grade">
						<option>Select Class</option>
						<?php 
						$st_add_class = $ravi->grade($grade);
						while($st_add_class_fetch = $st_add_class->fetch_assoc())
						{
						?>
								<option value="<?php echo $st_add_class_fetch['class']; ?>"><?php echo $st_add_class_fetch['class']; ?></option>
								
						<?php } ?>
					</select>
						
					</div>	
					<div class="col-md-6 form-group1">
					<label class="control-label">gender</label>
						<input type="text" placeholder="eg: Male or Female" required="" name="std_gender">
					</div>
					<div class="clearfix"> </div>
					<div class="col-md-6 form-group1">
						<label class="control-label">Roll</label>
						<input type="text" placeholder="Roll" required="" name="std_roll">
					</div>
					<div class="col-md-6 form-group1 form-last">
						<label class="control-label">DOB</label>
						<input type="text" placeholder="eg 29 Feb 200" required="" name="std_dob">
					</div>
					<div class="col-md-6 form-group1">
						<label class="control-label">Address</label>
						<input type="text" placeholder="Address" required="" name="std_address">
					</div>
					<div class="col-md-6 form-group1 form-last">
						<label class="control-label">District</label>
						<input type="text" placeholder="District" required="" name="std_district">
					</div>
				
					<div class="col-md-6 form-group1 form-last">
						<label class="control-label">Father</label>
						<input type="text" placeholder="Father Name" required="" name="std_father">
					</div>
					<div class="col-md-6 form-group1">
						<label class="control-label">Mother</label>
						<input type="text" placeholder="Mother Name" required="" name="std_mother">
					</div>
					<div class="col-md-12 form-group1 form-last">
						<label class="control-label">Parent Contact</label>
						<input type="text" placeholder="Contact Number" required="" name="std_parent_contact">
					</div>
				</div>
					<div class="clearfix"> </div>
				<div class="col-md-12 form-group button-2">
					<input type="submit" class="btn btn-primary" value="Add Student" name="std_add_now">
					<button type="reset" class="btn btn-default">Reset</button>
				</div>
				<div class="clearfix"> </div>
			</form>

			<!---->
		</div>

	</div>
</div>
<!--//forms-->