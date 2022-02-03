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
						  <label class="tv-tab" for="tv-tab-1">Jamuna Multi Farming</label>
						  <label class="tv-tab" for="tv-tab-1">Sanghu Farm & Agro</label>
						  <label class="tv-tab" for="tv-tab-2">Sanghu Valley Cold Storage</label>
						  <label class="tv-tab" for="tv-tab-3">General Clients</label>
						  <label class="tv-tab" for="tv-tab-4">Client Group</label>
						  <label class="tv-tab" for="tv-tab-4">Business Type</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Client Basic Data</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
						  				<select name="company_id" class="form-control" id="">
								  			<option>Select Company</option>
								  			<option value="1">Jamuna Micro Credit</option>
								  			<option value="2">Sanghu Farm & Agro Vet</option>
								  		</select>
						  				<select name="cgroup_id" class="form-control" id="">
								  			<option>Select Client Group</option>
								  			<option value="1">Agro - Diary</option>
								  			<option value="2">Agro - Hatchery</option>
								  		</select>
								  		<input type="text" name="business_type" id="" class="form-control" placeholder="Business Type">
						  				<select name="client_status" class="form-control" id="">
								  			<option>Select Client Status</option>
								  			<option value="1">Regular</option>
								  			<option value="2">Irregular</option>
								  			<option value="3">Inactive</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<input type="text" name="client_id" id="" class="form-control" placeholder="Client ID">
								  		<input type="text" name="client_name" id="" class="form-control" placeholder="Client Name">
								  		<input type="text" name="contact_no" id="" class="form-control" placeholder="Contact No">	
						  			</div>
						  			<div class="col-3">
								  		<input type="text" name="nid" id="" class="form-control" placeholder="NID No">
								  		<input type="text" name="dob" id="" class="form-control" placeholder="Date of Birth">
								  		<input type="text" name="blood_group" id="" class="form-control" placeholder="Blood Group">
								  	</div>
								  	<div class="col-3">
								  		<input type="text" name="upazilla" id="" class="form-control" placeholder="Upazilla Name">
								  		<input type="text" name="district" id="" class="form-control" placeholder="District Name">
								  		<input type="text" name="area" id="" class="form-control" placeholder="Area Name">
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
						  <h3>Additional Information</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="text" name="client_id" id="" class="form-control" placeholder="Select Client ID">
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
								  		<input type="text" name="client_id" id="" class="form-control" placeholder="Select Client ID">							  		
								  		<input type="text" name="company_name" id="" class="form-control" placeholder="Company Name">
								  		<input type="text" name="vat_no" id="" class="form-control" placeholder="VAT Registration No">
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
						<input class="tv-radio" id="tv-tab-4" name="tv-group" type="radio"/>
						<div class="tv-content">
						  <h3>Client Group</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="text" name="group_name" id="" class="form-control" placeholder="Client Group Name">
								  		<input type="text" name="remarks" id="" class="form-control" placeholder="Group Description">
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