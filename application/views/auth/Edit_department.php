
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Department Board</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/DepartmentAdd/');?>">Department Add</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
						<?php echo form_open_multipart('Auth/EditDepartment/');?>
							<div class="row">

							<input type="hidden" name="id" class="form-control" value="<?php echo $DepartmentData->id;?>">
							<input type="hidden" name="old_image" class="form-control" value="<?php echo $DepartmentData->course_image;?>">

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="title">Department Title </label>
									<input type="text" name="title" class="form-control" value="<?php echo $DepartmentData->title;?>">
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="DepartmentImage">Department Image</label><br/>
									<input type="file" name="course_image"  class="default" multiple>
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
								<label for="details"> Department Details </label>
								<textarea  class="form-control" name="details" id="" cols="10" rows="10"> <?php echo $DepartmentData->details;?></textarea>

								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
								<label for="about_course"> Department About </label>
								<textarea class="form-control" name="about_course" cv cols="10" rows="10">
									<?php echo $DepartmentData->about_course;?> </textarea>

								</div>
							</div>		
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="Curriculum"> Curriculum </label>
									<textarea class="form-control" name="curriculumn" cv cols="10" rows="10"><?php echo $DepartmentData->curriculumn;?></textarea>
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="apply_process"> Apply Process </label>						
									<textarea class="form-control" name="apply_process" cv cols="10" rows="10"><?php echo $DepartmentData->apply_process;?></textarea>
								</div>
							</div>	
							
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="course_start"> Start Date </label>
									<input type="text" name="course_start" id="date-start" class="form-control" value="<?php echo $DepartmentData->course_start;?>">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="total_semester"> Total Semester </label>
									<input type="text" name="total_semester" class="form-control" value="<?php echo $DepartmentData->total_semester;?>">
								</div>
							</div>	
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="class_Duration"> Class Duration </label>
									<input type="text" name="class_duration" class="form-control" value="<?php echo $DepartmentData->class_duration;?>">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="course_duration"> course Duration </label>
									<input type="text" name="course_duration" class="form-control" value="<?php echo $DepartmentData->course_duration;?>">
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="Shift"> Shift </label>
									<input type="text" name="shift" class="form-control" value="<?php echo $DepartmentData->shift;?>">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="no_of_seat"> No of seat </label>
									<input type="text" name="no_of_seat" class="form-control" value="<?php echo $DepartmentData->no_of_seat;?>">
								</div>
							</div>	
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="faculty_member"> Faculty Member </label>
									<input type="text" name="faculty_member" class="form-control" value="<?php echo $DepartmentData->faculty_member;?>">
								</div>
							</div>	
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="success_level">Success Level</label>
									<input type="text" name="success_level" class="form-control" value="<?php echo $DepartmentData->success_level;?>">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<button type="submit" class="btn btn-warning">Update</button> 
							</div>
							</form>		
						</div>
					</div>
				</div>
			</div>