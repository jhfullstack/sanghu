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
						  <label class="tv-tab" for="tv-tab-1">Candidate Details</label>
						  <label class="tv-tab" for="tv-tab-2">Interview Process</label>
						  <label class="tv-tab" for="tv-tab-3">Upload CV</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Candidate Details</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="candidate_status" class="form-control" id="">
								  			<option>Choose an Option</option>
								  			<option value="1">Applied</option>
								  			<option value="2">Called For Interview</option>
								  			<option value="3">Selected</option>
								  			<option value="4">Joined</option>
								  			<option value="5">Cancelled</option>
								  			<option value="6">On Hold</option>
								  			<option value="7">Marked</option>
								  		</select>
								  		<input type="text" name="fname" id="" class="form-control" placeholder="First Name">
								  		<input type="text" name="lname" id="" class="form-control" placeholder="Last Name">
								  		<input type="text" name="contact_no" id="" class="form-control" placeholder="Contact No">
								  		<input type="text" name="nid_no" id="" class="form-control" placeholder="NID No">
								  		<input type="text" name="last_education" id="" class="form-control" placeholder="Final Academic Level">
								  		<input type="text" name="perm_addr" id="" class="form-control" placeholder="Permanent Address">
								  		<input type="text" name="upazilla" id="" class="form-control" placeholder="Upazilla Name">
								  		<input type="text" name="district" id="" class="form-control" placeholder="District Name">
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
						<input class="tv-radio" id="tv-tab-2" name="tv-group" type="radio"/>
						<div class="tv-content">
						  <h3>Interview Process</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="candidate_id" class="form-control" id="">
								  			<option>Select Person Name</option>
								  			<option value="1">Mosstafa Kamal</option>
								  			<option value="2">Ariful Islam Nabin</option>
								  		</select>
								  		<input type="text" name="" id="" class="form-control" placeholder="">
								  		<input type="text" name="" id="" class="form-control" placeholder="">
								  		<input type="text" name="" id="" class="form-control" placeholder="">
								  		<input type="text" name="" id="" class="form-control" placeholder="">
								  		<input type="text" name="" id="" class="form-control" placeholder="">	
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
						  <h3>Upload CV</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="file" name="upload_cv" id="" class="form-control" placeholder="Upload CV Here">
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