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
						  <label class="tv-tab" for="tv-tab-1">HRM Settings</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Settings</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="text" name="designation" id="" class="form-control" placeholder="Type Designation">
								  		<button class="save-btn">Save</button>
						  			</div>
						  			<div class="col-3">
								  		<select name="department_id" id="" class="form-control">
								  			<option value="">Select Department</option>
								  			<option value="1">A</option>
								  			<option value="2">B</option>
								  			<option value="3">C</option>
								  		</select>
								  		<input type="text" name="sub_department" id="" class="form-control" placeholder="Type Sub Department Name">
								  		<button class="save-btn">Save</button>
						  			</div>
						  			<div class="col-3">
								  		<input type="text" name="area_code" id="" class="form-control" placeholder="Working Area Code">
								  		<input type="text" name="area_name" id="" class="form-control" placeholder="Working Area Name">
								  		<button class="save-btn">Save</button>
						  			</div>
						  		</div>
						  	</form>
						  </div>
						</div>
						<input class="tv-radio" id="tv-tab-2" name="tv-group" type="radio"/>
						<div class="tv-content">
						  <h3>Additional Information</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="text" name="employee_id" id="" class="form-control" placeholder="Employee ID">
								  		<input type="text" name="present_addr" id="" class="form-control" placeholder="Present Address">
								  		<input type="text" name="upazilla" id="" class="form-control" placeholder="Upazilla">
								  		<input type="text" name="district" id="" class="form-control" placeholder="District">
								  		<input type="text" name="perm_addr" id="" class="form-control" placeholder="Permanent Address">
								  		<input type="text" name="it_skills" id="" class="form-control" placeholder="IT Skills">	
						  			</div>
						  			<div class="col-3">
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
								  		<input type="text" name="working_area" id="" class="form-control" placeholder="Working Area Name">
								  		<input type="text" name="senior" id="" class="form-control" placeholder="Reporting Boss">
								  		<input type="text" name="department" id="" class="form-control" placeholder="Department Name">
								  		<input type="text" name="sub_department" id="" class="form-control" placeholder="Sub Department Name">
								  		<input type="text" name="designation" id="" class="form-control" placeholder="Designation">
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
				                    <th scope="col" width="5%"><input class="form-check-input" type="checkbox"></th>
				                    <th scope="col" width="5%">#</th>
				                    <th scope="col" width="20%">Date</th>
				                    <th scope="col" width="10%">Status</th>
				                    <th scope="col" width="20%">Customer</th>
				                    <th scope="col" width="20%">Purchased</th>
				                    <th scope="col" class="text-end" width="20%"><span>Revenue</span></th>
				                </tr>
				            </thead>
				            <tbody>
				                <tr>
				                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
				                    <td>12</td>
				                    <td>1 Oct, 21</td>
				                    <td>Paid</td>
				                    <td>Althan Travis</td>
				                    <td>Wirecard for figma</td>
				                    <td>$0.99</td>
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