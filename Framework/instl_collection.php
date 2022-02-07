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
						  <label class="tv-tab" for="tv-tab-1">Installment Collection</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Installment Collection</h3>
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
						  			<div class="col-6">
						  				<div class="row">
										  	<div class="col-12">
						  						<h6 class="bg-gray p10">Miscellaneous</h6>
										  		This Client has eligibility of <span class="font20"><b>78,000.00</b></span> tk to Adjust! <button class="save-btn">Approve for Adjustment</button>
										  	</div>
										</div>
										<br>
										<div class="row">
										  	<div class="col-8">
										  		Loan Closing Time Expired for <span class="font20"><b>22</b></span> days! <button class="save-btn">Apply Charges</button>
										  	</div>
										  	<div class="col-4">
										  		<input type="text" name="extra_charge" id="" class="form-control" placeholder="Extra Service Charge">
										  	</div>
								  		</div>
								  	</div>
						  			<div class="col-6">
						  				<div class="row">
										  	<div class="col-12">
						  						<h6 class="bg-gray p10">Settlement</h6>
						  					</div>
						  				</div>
					  					<div class="row">
						  					<div class="col-6">
										  		Regular Balance <span class="font20"><b>8,000.00</b></span> tk!
										  		<br><br>
										  		<button class="save-btn">Approve Settlement Request</button>
										  	</div>
										  	<div class="col-6">
										  		Additional Balance <span class="font20"><b>3,000.00</b></span> tk!
										  		<br><br>
										  		<button class="save-btn">Approve Settlement Request</button>
										  	</div>
										</div>
								  	</div>
								</div>
								<br>
						  		<div class="row">
						  			<div class="col-12">
						  				<div class="bg-gray">
						  					<div class="row">
						  						<div class="col-2">
						  								<input type="text" class="form-control mb0 mt3" placeholder="<?php echo date('d-M-y');?>">
						  						</div>
						  						<div class="col-8">
						  							<span class="pl10 lh35">
						  								<b> Collection Data Entry</b>
						  							</span>
						  						</div>
						  						<div class="col-2">
						  							<button class="comm-btn">Mark as Holiday</button>
						  						</div>
						  					</div>
							  			</div>
							  		</div>
						  		</div>
						  		<br>
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
						  			<div class="col-5">
						  			</div>
						  			<div class="col-3">
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
				        <table class="tbl-4">
				            <thead>
				                <tr class="bg-gray">
				                    <th>Installment No</th>
				                    <th>Collection Date</th>
				                    <th>Installment Amount</th>
				                    <th>Collected Amount</th>
				                    <th>Collection Status</th>
				                </tr>
				            </thead>
				            <tbody>
				                <tr>
				                    <td>1</td>
				                    <td>28-Jan-2022</td>
				                    <td>1250.00</td>
				                    <td>1250.00</td>
				                    <td><input type="checkbox" checked=""></td>
				                </tr>
				                <tr>
				                    <td>2</td>
				                    <td>29-Jan-2022</td>
				                    <td>1250.00</td>
				                    <td>0.00</td>
				                    <td><input type="checkbox"></td>
				                </tr>
				                <tr>
				                    <td>3</td>
				                    <td>30-Jan-2022</td>
				                    <td>1250.00</td>
				                    <td>0.00</td>
				                    <td><input type="checkbox"></td>
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