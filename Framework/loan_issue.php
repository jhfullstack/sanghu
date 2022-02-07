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
						  <label class="tv-tab" for="tv-tab-1">Loan Issue</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Loan Issue</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="company_id" class="form-control" id="">
								  			<option value="1">Jamuna Multi Farming</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<select name="employee_id" class="form-control" id="">
								  			<option>Select Employee ID</option>
								  			<option value="1">ABC</option>
								  			<option value="2">DEF</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<select name="area" class="form-control" id="">
								  			<option>Select Area Name</option>
								  			<option value="1">Area 1</option>
								  			<option value="2">Area 2</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<input type="text" class="form-control" name="incharge" placeholder="Area In-charge Name">
								  	</div>
								</div>
								<div class="row">
								  	<div class="col-3">
								  		<select name="client_id" class="form-control" id="">
								  			<option>Select Client Name</option>
								  			<option value="1">ABC</option>
								  			<option value="2">DEF</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<input type="text" name="business_type" id="" class="form-control" placeholder="Business Type">
								  	</div>
								  	<div class="col-3">
								  		<input type="text" name="loan_confirm_date" id="" class="form-control" placeholder="Loan Confirm Date">
								  	</div>
								  	<div class="col-3">
								  		<select name="coll_off_days" class="form-control" id="">
								  			<option>Select Collection Off Days</option>
								  			<option value="1">Friday</option>
								  			<option value="2">Saturday</option>
								  			<option value="3">Sunday</option>
								  			<option value="4">Monday</option>
								  			<option value="5">Tuesday</option>
								  			<option value="6">Wednesday</option>
								  			<option value="7">Thursday</option>
								  		</select>
								  	</div>
								</div>
								<br>
								<div class="row">
									<div class="col-9">
										<div class="bg-gray p10">
											<b>Loan Issue Data</b>
										</div>
									</div>
									<div class="col-3">
										<button class="comm-btn">Generate Installment Schedule</button>
									</div>
								</div>								
								<br>
								<div class="row">
								  	<div class="col-3">
								  		<input type="text" name="loan_id" id="" class="form-control" placeholder="Loan ID">
								  	</div>
								  	<div class="col-3">
								  		<input type="text" name="loan_process_date" id="" class="form-control" placeholder="Loan Process Date">
								  	</div>
								</div>
								<div class="row">
								  	<div class="col-3">
								  		<input type="text" name="loan_issue_amount" id="" class="form-control" placeholder="Loan Issue Amount">
								  	</div>
								  	<div class="col-3">
								  		<input type="text" name="loan_duration" id="" class="form-control" placeholder="Loan Duration">
						  			</div>						  			
								  	<div class="col-2">
								  		<input type="text" name="ddbs_amount" id="" class="form-control" placeholder="DDBS Amount">
								  	</div>
								  	<div class="col-2">
								  		<input type="text" name="processing_fee" id="" class="form-control" placeholder="Processing Fee">
								  	</div>
								  	<div class="col-2">
								  		<input type="text" name="stamp_fee" id="" class="form-control" placeholder="Stamp Fee">
								  	</div>
						  		</div>
						  		<br>
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