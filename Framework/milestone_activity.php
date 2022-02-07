<?php include('header.php'); ?>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">
				<?php include('nav.php'); ?>
			</div>
			<div class="col-10">
				<div class="row">
					<div class="top-action">
						<div class="tv-tabs">
						  <label class="tv-tab" for="tv-tab-1">Activities for Milestone</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Activities for Milestone</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
								  	<div class="col-3">
								  		<select name="project_id" class="form-control" id="">
								  			<option>Select Project</option>
								  			<option value="1">Project 1</option>
								  			<option value="2">Project 2</option>
								  			<option value="3">Project 3</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<select name="task_id" class="form-control" id="">
								  			<option>Select Task</option>
								  			<option value="1">Task 1</option>
								  			<option value="2">Task 2</option>
								  			<option value="3">Task 3</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<select name="milestone_id" class="form-control" id="">
								  			<option>Select Milestone</option>
								  			<option value="1">Milestone 1</option>
								  			<option value="2">Milestone 2</option>
								  			<option value="3">Milestone 3</option>
								  		</select>
								  	</div>
								</div>
								<div class="row">
								  	<div class="col-6">
								  		<input type="text" name="activity_1" id="" class="form-control" placeholder="Activity One">
								  		<input type="text" name="activity_2" id="" class="form-control" placeholder="Activity Two">
								  		<input type="text" name="activity_3" id="" class="form-control" placeholder="Activity Three">
								  		<input type="text" name="activity_4" id="" class="form-control" placeholder="Activity Four">
								  		<input type="text" name="activity_5" id="" class="form-control" placeholder="Activity Five">
								  	</div>
								  	<div class="col-6">
								  		<input type="text" name="activity_6" id="" class="form-control" placeholder="Activity Six">
								  		<input type="text" name="activity_7" id="" class="form-control" placeholder="Activity Seven">
								  		<input type="text" name="activity_8" id="" class="form-control" placeholder="Activity Eight">
								  		<input type="text" name="activity_9" id="" class="form-control" placeholder="Activity Nine">
								  		<input type="text" name="activity_10" id="" class="form-control" placeholder="Activity Ten">
						  			</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-12">
						  				<button class="save-btn">Save</button>
						  			</div>
						  		</div>
						  	</form>
						  </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="bottom-report">
					    <div class="tbl-action-btn">
					        <div class="float-left col-3">
					        	<input class="form-control" placeholder="Search by order#, name...">
					        </div>
					        <div class="col-6"></div>
					        <div class="float-right col-3">
					        	<span>Filters <i class="fa fa-angle-down"></i></span> <i class="fa fa-ellipsis-h"></i>
					        </div>
					    </div>
				        <table class="tbl-2">
				            <thead>
				                <tr class="bg-gray">
				                    <th width="5%"><input type="checkbox"></th>
				                    <th>#</th>
				                    <th>Date</th>
				                    <th>Person Name</th>
				                    <th>NID No</th>
				                    <th>Date of Interview</th>
				                    <th>Post</th>
				                    <th>Expected Salary</th>
				                    <th>Candidate Status</th>
				                    <th>Action</th>
				                </tr>
				            </thead>
				            <!-- Task Status Update Button needed in datatable's each row -->
				            <tbody>
				                <tr>
				                    <th><input type="checkbox"></th>
				                    <td>1</td>
				                    <td>27-Jan-22</td>
				                    <td>Mosstafa Kamal</td>
				                    <td>9196221346797</td>
				                    <td>01-Feb-22</td>
				                    <td>Management Trainee</td>
				                    <td>20,000</td>
				                    <td>Called for Interview</td>
				                    <td>View</td>
				                </tr>
				            </tbody>
				        </table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>