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
						  <label class="tv-tab" for="tv-tab-1">Loan Requisition</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Loan Requisition</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="company_id" class="form-control" id="">
								  			<option value="1">Jamuna Multi Farming</option>
								  		</select>
								  		<select name="client_id" class="form-control" id="">
								  			<option>Select Client Name</option>
								  			<option value="1">ABC</option>
								  			<option value="2">DEF</option>
								  		</select>
								  		<input type="text" name="business_type" id="" class="form-control" placeholder="Business Type">
								  	</div>
								  	<div class="col-3">
								  		<select name="area" class="form-control" id="">
								  			<option>Select Area Name</option>
								  			<option value="1">Area 1</option>
								  			<option value="2">Area 2</option>
								  		</select>
								  		<input type="text" name="loan_req_amount" id="" class="form-control" placeholder="Loan Requisition Amount">
								  		<select name="loan_duration" class="form-control" id="">
								  			<option>Select Loan Duration</option>
								  			<option value="1">1 Month</option>
								  			<option value="2">2 Months</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<select name="priority" class="form-control" id="">
								  			<option>Set Priority</option>
								  			<option value="1">Normal</option>
								  			<option value="2">Urgent</option>
								  		</select>
								  		<select name="employee_id" class="form-control" id="">
								  			<option>Select Employee Name</option>
								  			<option value="1">ABC</option>
								  			<option value="2">MNO</option>
								  		</select>
								  		<input type="text" class="form-control" name="incharge" placeholder="Area In-charge Name">
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
				                    <th>#</th>
				                    <th>Date of Req</th>
				                    <th>Client Name</th>
				                    <th>Business Type</th>
				                    <th>Area Name</th>
				                    <th>Requested Amount</th>
				                    <th>Loan Duration</th>
				                    <th>Priority</th>
				                    <th>Employee Name</th>
				                    <th>Area In-charge</th>
				                    <th>Loan Status</th>
				                    <th>Action</th>
				                </tr>
				            </thead>
				            <tbody>
				                <tr>
				                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
				                    <td>1</td>
				                    <td>11-Jan-22</td>
				                    <td>Mosstafa Kamal</td>
				                    <td>Grocery</td>
				                    <td>Area-07</td>
				                    <td>2,00,000.00</td>
				                    <td>6 Months</td>
				                    <td>Normal</td>
				                    <td>Mr. Kamal</td>
				                    <td>Mr. Tipu</td>
				                    <td>Pending</td>
				                    <td>Client Profile | Loan Status | View</td>
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