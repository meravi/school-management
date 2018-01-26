<?php 	 ?>
<div class="outter-wp">
	<!--/tabs-->
	<div class="tab-main">
		<!--/tabs-inner-->
		<div class="tab-inner">
			<div id="tabs" class="tabs">
				<h2 class="inner-tittle">Welcome,
					<?php echo $info_display['t_fullname']; ?> </h2>
				<div class="graph">
					<nav>
						<ul>
							<li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i> <span>Class Information</span></a></li>
							<li><a href="#section-2" class="icon-cup"><i class="lnr lnr-lighter"></i> <span>Results</span></a></li>
							<li><a href="#section-3" class="icon-food"><i class="fa fa-cutlery"></i> <span>Teachers</span></a></li>
							<li><a href="#section-4" class="icon-lab"><i class="fa fa-flask"></i> <span>Subject</span></a></li>
							<li><a href="#section-5" class="icon-truck"><i class="fa fa-truck"></i> <span>Order</span></a></li>
						</ul>
					</nav>
					<div class="content tab">
						<section id="section-1">
								<h2>Select Class</h2>

					
							
								<form method="post">
								<select name="class_data" id="selector1" class="form-control1">
							<option>Select Class</option>
													<?php 
												$opt = $ravi->grade($grade);
													while($op=$opt->fetch_assoc())
													{
														
													
													?>
												
							<option value="<?php echo $op['class']; ?>"><?php echo $op['class']; ?></option>
													<?php }?>
											
							</select>
								<input type="submit" name="class_info" class="btn red" value="View Class Data">
									</form>	
								<?php 
							
							 if(isset($_POST['class_info']))
							 {
								 $grade_st_data = $_POST['class_data'];
								 $grade_st_infos = $ravi->grade_st_info($grade_st_data);
								 if($grade_st_infos->num_rows>0)
								 {
								
									 ?>
							
							  <div class="graph">
															<div class="tables">
														
						<table class="table table-bordered "> 
							<thead> 
								<tr> 
									<th>#</th>
									<th>Student Name</th> 
									<th>Username</th>
									<th>Roll</th>
									<th>DOB</th>
									<th>Address</th>
									<th>Parents Contact</th>
								</tr>
							</thead>
							<tbody> 
								<?php
								$c = 1;
								 while($grade_st_info_display=$grade_st_infos->fetch_assoc())
								 {
								?>
								<tr> 
									<th scope="row"><?php echo $c; ?></th>
									<td><?php echo $grade_st_info_display['st_fullname']; ?></td> 
									<td><?php echo $grade_st_info_display['st_username']; ?></td> 
									<td><?php echo $grade_st_info_display['roll_no']; ?></td>
									<td><?php echo $grade_st_info_display['st_dob']; ?></td>
									<td><?php echo $grade_st_info_display['st_address']; ?></td> 
									<td><?php echo $grade_st_info_display['st_parents_contact']; ?></td>
								</tr> 
									<?php
								$c++; }
							 } else
								 {
									 echo "No data to show select any class";
								 }}
							
							?>
							</tbody>
																</table> 
															</div>
													</div>
						
							
							
						</section>
						<section id="section-2">
							
						</section>
						<section id="section-3">


						</section>
						<section id="section-4">



						</section>
						<section id="section-5">
						
						</section>
					</div>
					<!-- /content -->
				</div>
				<!-- /tabs -->

			</div>
			<script src="js/cbpFWTabs.js"></script>
			<script>
				new CBPFWTabs(document.getElementById('tabs'));

			</script>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//tabs-inner-->





</div>
