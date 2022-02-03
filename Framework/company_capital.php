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
						  <label class="tv-tab" for="tv-tab-1">Add Fund</label>
						  <label class="tv-tab" for="tv-tab-2">Working Capital Setup</label>
						  <label class="tv-tab" for="tv-tab-3">Bank Accounts Setup</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Add Fund</h3>
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
								  		<input type="text" name="fund_amount" id="" class="form-control" placeholder="Fund Amount">
								  		<input type="text" name="source_details" id="" class="form-control" placeholder="Source Details">
								  		<select name="receive_method" class="form-control" id="">
								  			<option value="1">Central Cash</option>
								  			<option value="2">Bank Deposit</option>
								  		</select>
								  		<input type="text" name="account_no" id="" class="form-control" placeholder="Account No (if bank deposit)">
								  		<input type="text" name="cheque_no" id="" class="form-control" placeholder="Cheque No (if bank deposit)">
								  		<input type="text" name="remarks" id="" class="form-control" placeholder="Remarks">
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
						  <h3>Working Capital Setup</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
						  				<label for="cc_opening_bal">Central Cash Opening Balance</label>
								  		<input type="text" name="cc_opening_bal" id="" class="form-control" value="0">
								  		<button class="save-btn">Save</button>
								  	</div>
								  	<div class="col-3">
								  		<label for="bank_acc_id">Bank Accounts Opening Balance</label>
								  		<select name="bank_acc_id" class="form-control" id="">
								  			<option>Select Account</option>
								  			<option value="1">FSIBL-1234</option>
								  			<option value="2">DBBL-7890</option>
								  		</select>
								  		<input type="text" name="acc_opening_bal" id="" class="form-control" value="0">
								  		<button class="save-btn">Save</button>
						  			</div>
						  		</div>
						  	</form>
						  </div>
						</div>
						<input class="tv-radio" id="tv-tab-3" name="tv-group" type="radio"/>
						<div class="tv-content">
						  <h3>Bank Accounts Setup</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
								  	<div class="col-3">
								  		<label for="bank_acc_id">Select Bank Accounts (for data update)</label>
								  		<select name="bank_acc_id" class="form-control" id="">
								  			<option>Select Account</option>
								  			<option value="1">FSIBL-1234</option>
								  			<option value="2">DBBL-7890</option>
								  		</select>
								  		<hr>
								  		<input type="text" name="bank_name" id="" class="form-control" placeholder="Bank Name">
								  		<input type="text" name="acc_name" id="" class="form-control" placeholder="Bank Account Name">
								  		<input type="text" name="acc_no" id="" class="form-control" placeholder="Bank Account No">
								  		<input type="text" name="branch" id="" class="form-control" placeholder="Branch Name">
								  		<input type="text" name="acc_open_date" id="" class="form-control" placeholder="Bank Account Open Date">
								  		<input type="text" name="acc_code" id="" class="form-control" placeholder="Bank Account Short Code">
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