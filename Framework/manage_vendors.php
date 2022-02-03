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
						  <label class="tv-tab" for="tv-tab-1">Vendor Basic Data</label>
						  <label class="tv-tab" for="tv-tab-2">Additional Information</label>
						  <label class="tv-tab" for="tv-tab-3">Accounts & Login Data</label>
						  <label class="tv-tab" for="tv-tab-4">Vendor Group</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Vendor Basic Data</h3>
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
								  		<input type="text" name="cgroup_id" id="" class="form-control" placeholder="Vendor Group ID">
								  		<input type="text" name="vendor_id" id="" class="form-control" placeholder="Vendor ID">
								  		<input type="text" name="vendor_name" id="" class="form-control" placeholder="Vendor Name">
								  		<input type="text" name="contact_no" id="" class="form-control" placeholder="Contact No">
								  		<input type="text" name="nid" id="" class="form-control" placeholder="NID No">
								  		<input type="text" name="dob" id="" class="form-control" placeholder="Date of Birth">
								  		<input type="text" name="blood_group" id="" class="form-control" placeholder="Blood Group">	
						  			</div>
						  			<div class="col-3">
								  		<input type="text" name="upazilla" id="" class="form-control" placeholder="Upazilla Name">
								  		<input type="text" name="district_name" id="" class="form-control" placeholder="District Name">
								  		<input type="text" name="area_name" id="" class="form-control" placeholder="Area Name">
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
								  		<input type="text" name="vendor_id" id="" class="form-control" placeholder="Select Vendor ID">
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
								  		<input type="text" name="vendor_id" id="" class="form-control" placeholder="Select Vendor ID">							  		
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
						  <h3>Vendor Group</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="text" name="group_name" id="" class="form-control" placeholder="Vendor Group Name">
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