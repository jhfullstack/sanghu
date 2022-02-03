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
						  <label class="tv-tab" for="tv-tab-1">Deductions</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Employee Deductions</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="employee_id" class="form-control" id="">
								  			<option>Select Employee</option>
								  			<option value="1">XYZ</option>
								  			<option value="2">MNO</option>
								  			<option value="3">ABC</option>
								  		</select>
								  		<select name="deductions_type" class="form-control" id="">
								  			<option>Deduction Type</option>
								  			<option value="1">Random deduction heading</option>
								  		</select>
								  		<input type="text" name="deduction_amount" id="" class="form-control" placeholder="Deduction Amount">
								  		<textarea name="deduction_desc" id="" cols="30" rows="10" class="form-control" placeholder="Deduction Description"></textarea>
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