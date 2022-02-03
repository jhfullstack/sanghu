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