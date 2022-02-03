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
						  <label class="tv-tab" for="tv-tab-1">Loan Collection</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Loan Collection</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-2">
								  		<select name="company_id" class="form-control" id="">
								  			<option value="1">Jamuna Multi Farming</option>
								  		</select>
								  	</div>
								  	<div class="col-2">
								  		<select name="employee_id" class="form-control" id="">
								  			<option>Select Employee ID</option>
								  			<option value="1">ABC</option>
								  			<option value="2">DEF</option>
								  		</select>
								  	</div>
								  	<div class="col-2">
								  		<select name="area" class="form-control" id="">
								  			<option>Select Area Name</option>
								  			<option value="1">Area 1</option>
								  			<option value="2">Area 2</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<select name="client_id" class="form-control" id="">
								  			<option>Select Client Name</option>
								  			<option value="1">ABC</option>
								  			<option value="2">DEF</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<select name="loan_id" class="form-control" id="">
								  			<option>Select Loan ID</option>
								  			<option value="1">ABC</option>
								  			<option value="2">DEF</option>
								  		</select>
								  	</div>
								</div>
								<div class="row">
								  	<div class="col-2">
								  		<input type="text" name="loan_amount" id="" class="form-control" placeholder="Loan Amount">
								  	</div>
								  	<div class="col-2">
								  		<input type="text" name="loan_duration" id="" class="form-control" placeholder="Loan Duration">
								  	</div>
								  	<div class="col-2">
								  		<input type="text" name="total_inst_no" id="" class="form-control" placeholder="Total No of Installment">
								  	</div>
								  	<div class="col-2">
								  		<input type="text" name="total_inst_rcvd" id="" class="form-control" placeholder="No of Installment Received">
								  	</div>
								  	<div class="col-2">
								  		<input type="text" name="total_coll_amount" id="" class="form-control" placeholder="Total Collected Amount">
								  	</div>
						  			<div class="col-2">
						  				<input type="text" name="balance_amount" id="" class="form-control" placeholder="Balance Amount">
						  			</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-12">
						  				<h6 class="bg-gray p10">Special Customization</h6>
						  			</div>
						  		</div>
						  		<div class="row">
								  	<div class="col-3">
								  		<input type="text" name="adjust_eligible" id="" class="form-control" placeholder="Eligible Amount for Adjustment">
								  	</div>
								  	<div class="col-3">
								  		<input type="text" name="extra_charge" id="" class="form-control" placeholder="Extra Service Charge">
								  	</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-12">
						  				<h6 class="bg-gray p10">Today Collection Data Entry</h6>
						  			</div>
						  		</div>
						  		<div class="row">
								  	<div class="col-3">
								  		<label class="control-label" for="">Installment Amount <button class="save-btn">Make Adjustment</button></label>
								  		<input type="text" name="installment_amount" id="" class="form-control" placeholder="Installment Amount">
								  	</div>
						  			<div class="col-3">
						  				<label class="control-label" for="">Installment Received</label>
						  				<input type="text" name="today_coll_amount" id="" class="form-control" placeholder="Today Collection Amount">
						  			</div>
						  			<div class="col-3">
						  				<label class="control-label" for="">Investment Return</label>
						  				<input type="text" name="loan_percent" id="" class="form-control" placeholder="Investment Return">
						  			</div>
						  			<div class="col-3">
						  				<label class="control-label" for="">Profit Earned</label>
						  				<input type="text" name="profit_percent" id="" class="form-control" placeholder="Profit Earned">
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