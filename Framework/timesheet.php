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
						  <label class="tv-tab" for="tv-tab-1">Activity Monitor</label>
						  <label class="tv-tab" for="tv-tab-2">Timesheet</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Activity Monitor</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<!-- Activity One -->
						  			<div class="col-2">
								  		<span class="activity-btn">Travelling</span>
						  			</div>
						  			<div class="col-2">
								  		<input id="chck" type="checkbox">
										<label for="chck" class="check-trail">
										  <span class="check-handler"></span>
										</label>
						  			</div>
						  			<!-- Activity Two -->
						  			<div class="col-2">
								  		<span class="activity-btn">Meeting with Client</span>
						  			</div>
						  			<div class="col-2">
								  		<input id="chck" type="checkbox">
										<label for="chck" class="check-trail">
										  <span class="check-handler"></span>
										</label>
						  			</div>
						  			<!-- Activity Three -->
						  			<div class="col-2">
								  		<span class="activity-btn">Collection</span>
						  			</div>
						  			<div class="col-2">
								  		<input id="chck" type="checkbox">
										<label for="chck" class="check-trail">
										  <span class="check-handler"></span>
										</label>
						  			</div>
						  		</div>
						  		<br>
						  		<div class="row">
						  			<!-- Activity Four -->
						  			<div class="col-2">
								  		<span class="activity-btn">At Head Office</span>
						  			</div>
						  			<div class="col-2">
								  		<input id="chck" type="checkbox">
										<label for="chck" class="check-trail">
										  <span class="check-handler"></span>
										</label>
						  			</div>
						  			<!-- Activity Five -->
						  			<div class="col-2">
								  		<span class="activity-btn">In Office</span>
						  			</div>
						  			<div class="col-2">
								  		<input id="chck" type="checkbox">
										<label for="chck" class="check-trail">
										  <span class="check-handler"></span>
										</label>
						  			</div>
						  			<!-- Activity Six -->
						  			<div class="col-2">
								  		<span class="activity-btn">In Office Meeting</span>
						  			</div>
						  			<div class="col-2">
								  		<input id="chck" type="checkbox">
										<label for="chck" class="check-trail">
										  <span class="check-handler"></span>
										</label>
						  			</div>
						  		</div>
						  		<br>
						  		<div class="row">
						  			<!-- Activity Seven -->
						  			<div class="col-2">
								  		<span class="activity-btn">Maintenance</span>
						  			</div>
						  			<div class="col-2">
								  		<input id="chck" type="checkbox">
										<label for="chck" class="check-trail">
										  <span class="check-handler"></span>
										</label>
						  			</div>
						  			<!-- Activity Eight -->
						  			<div class="col-2">
								  		<span class="activity-btn">Feeding</span>
						  			</div>
						  			<div class="col-2">
								  		<input id="chck" type="checkbox">
										<label for="chck" class="check-trail">
										  <span class="check-handler"></span>
										</label>
						  			</div>
						  			<!-- Activity Nine -->
						  			<div class="col-2">
								  		<span class="activity-btn">Outdoor Work</span>
						  			</div>
						  			<div class="col-2">
								  		<input id="chck" type="checkbox">
										<label for="chck" class="check-trail">
										  <span class="check-handler"></span>
										</label>
						  			</div>
						  		</div>
						  	</form>
						  </div>
						</div>
						<input class="tv-radio" id="tv-tab-2" name="tv-group" type="radio"/>						
						<div class="tv-content">
						  <h3>Employee Daily Timesheet</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-4">
						  				<div class="switch-holder">
								            <div class="switch-label">
								                <span>Duty >>> <?php echo date('d-M-Y : l')?></span>
								            </div>
								            <div class="switch-toggle">
								                <input type="checkbox" id="bluetooth">
								                <label for="bluetooth"></label>
								            </div>
								        </div>
						  			</div>
						  		</div>
						  	</form>
						  </div>
						</div>
						<input class="tv-radio" id="tv-tab-3" name="tv-group" type="radio"/>
						<div class="tv-content">
						  <h3>Accounts & Login Data</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="text" name="joining_date" id="" class="form-control" placeholder="Joining Date">
								  		<input type="text" name="entry_salary" id="" class="form-control" placeholder="Entry Salary">
								  		<input type="text" name="prob_period" id="" class="form-control" placeholder="Probationary Period">
								  		<input type="text" name="confirmed_salary" id="" class="form-control" placeholder="Salary after Confirmation">
								  		<input type="text" name="add_facility" id="" class="form-control" placeholder="Additional Facility">
						  			</div>
						  			<div class="col-3">
								  		<select name="area_id" class="form-control" id="">
								  			<option>Choose an Area</option>
								  			<option value="1">Area 01</option>
								  			<option value="2">Area 02</option>
								  			<option value="3">Area 03</option>
								  			<option value="4">Area 04</option>
								  			<option value="5">Area 05</option>
								  			<option value="6">Area 06</option>
								  		</select>
								  		<select name="senior_id" class="form-control" id="">
								  			<option>Choose Senior</option>
								  			<option value="1">ABC</option>
								  			<option value="2">XYZ</option>
								  		</select>
								  		<select name="department_id" class="form-control" id="">
								  			<option>Choose Department</option>
								  			<option value="1">Accounts</option>
								  			<option value="2">Operation</option>
								  		</select>
								  		<select name="subdepartment_id" class="form-control" id="">
								  			<option>Choose SubDepartment</option>
								  			<option value="1">Central Cash</option>
								  			<option value="2">Jamuna Cash</option>
								  		</select>
								  		<select name="designation_id" class="form-control" id="">
								  			<option>Choose Designation</option>
								  			<option value="1">Executive</option>
								  			<option value="2">In-Charge</option>
								  		</select>
						  			</div>
						  			<div class="col-3">
								  		<input type="text" name="email" id="" class="form-control" placeholder="Email">
								  		<input type="text" name="password" id="" class="form-control" placeholder="Password">
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
				                    <th>Empoyee ID</th>
				                    <th>Name</th>
				                    <th>NID No</th>
				                    <th>Date of Join</th>
				                    <th>Job Type</th>
				                    <th>Post</th>
				                    <th>Reporting Boss</th>
				                    <th>Salary</th>
				                    <th>Working Area</th>
				                    <th>Action</th>
				                </tr>
				            </thead>
				            <tbody>
				                <tr>
				                    <th scope="row"><input type="checkbox"></th>
				                    <td>1</td>
				                    <td>27-Jan-22</td>
				                    <td>101920</td>
				                    <td>Mosstafa Kamal</td>
				                    <td>9196221346797</td>
				                    <td>01-Feb-22</td>
				                    <td>Full Time (In Probation)</td>
				                    <td>Management Trainee</td>
				                    <td>Shahed Ahmed</td>
				                    <td>16,000</td>
				                    <td>Area 01</td>
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