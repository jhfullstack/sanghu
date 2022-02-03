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
						  <label class="tv-tab" for="tv-tab-1">Jamuna Micro Credit</label>
						  <label class="tv-tab" for="tv-tab-2">Sanghu Valley Cold Storage</label>
						  <label class="tv-tab" for="tv-tab-3">Sanghu Farm & Agro Vet</label>
						  <label class="tv-tab" for="tv-tab-4">Sanghu Corporate</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Receive Voucher : Jamuna Micro Credit</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="text" name="trx_id" id="" class="form-control" placeholder="RV001001">
						  				<select name="company_id" class="form-control" id="">
								  			<option>Select Company</option>
								  			<option value="1">Jamuna Micro Credit</option>
								  			<option value="2">Sanghu Farm & Agro Vet</option>
								  		</select>
								  		<select name="client_id" class="form-control" id="">
								  			<option>Select MCL No</option>
								  			<option value="1">MCL-123456</option>
								  			<option value="2">MCL-456789</option>
								  		</select>
								  		<select name="rcv_method" class="form-control" id="">
								  			<option>Select Receive Method</option>
								  			<option value="1">Cash</option>
								  			<option value="2">Cheque</option>
								  		</select>
								  		<input type="text" name="cheque_no" id="" class="form-control" placeholder="Cheque No">
								  		<select name="bank_acc_id" class="form-control" id="">
								  			<option>Select Account No (if cheque)</option>
								  			<option value="1">FSIBL-1234</option>
								  			<option value="2">DBBL-7890</option>
								  		</select>
								  		<input type="text" name="coll_amount" id="" class="form-control" placeholder="Collection Amount">
								  	</div>
								  	<div class="col-3">
								  		<label for="">Amount Distribution Policy</label>
								  		<input type="text" name="loan_amount" id="" class="form-control" placeholder="95%">
								  		<input type="text" name="profit_amount" id="" class="form-control" placeholder="5%">
								  		<input type="text" name="notes" id="" class="form-control" placeholder="Notes">
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
						  <h3>Receive Voucher : Sanghu Valley Cold Storage</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="text" name="trx_id" id="" class="form-control" placeholder="RV001001">
						  				<select name="company_id" class="form-control" id="">
								  			<option>Select Company</option>
								  			<option value="1">Jamuna Micro Credit</option>
								  			<option value="2">Sanghu Farm & Agro Vet</option>
								  		</select>
								  		<select name="client_id" class="form-control" id="">
								  			<option>Select CSL No</option>
								  			<option value="1">CSL-123456</option>
								  			<option value="2">CSL-456789</option>
								  		</select>
								  		<select name="rcv_method" class="form-control" id="">
								  			<option>Select Receive Method</option>
								  			<option value="1">Cash</option>
								  			<option value="2">Cheque</option>
								  		</select>
								  		<input type="text" name="cheque_no" id="" class="form-control" placeholder="Cheque No">
								  		<select name="bank_acc_id" class="form-control" id="">
								  			<option>Select Account No (if cheque)</option>
								  			<option value="1">FSIBL-1234</option>
								  			<option value="2">DBBL-7890</option>
								  		</select>
								  		<input type="text" name="coll_amount" id="" class="form-control" placeholder="Collection Amount">
								  	</div>
								  	<div class="col-3">
								  		<label for="">Amount Distribution Policy</label>
								  		<input type="text" name="loan_amount" id="" class="form-control" placeholder="95%">
								  		<input type="text" name="profit_amount" id="" class="form-control" placeholder="5%">
								  		<input type="text" name="notes" id="" class="form-control" placeholder="Notes">
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
						  <h3>Receive Voucher : Sanghu Farm & Agro Vet</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="text" name="trx_id" id="" class="form-control" placeholder="RV001001">
						  				<select name="company_id" class="form-control" id="">
								  			<option>Select Company</option>
								  			<option value="1">Jamuna Micro Credit</option>
								  			<option value="2">Sanghu Farm & Agro Vet</option>
								  		</select>
								  		<select name="client_id" class="form-control" id="">
								  			<option>Select MCL No</option>
								  			<option value="1">MCL-123456</option>
								  			<option value="2">MCL-456789</option>
								  		</select>
								  		<select name="rcv_method" class="form-control" id="">
								  			<option>Select Receive Method</option>
								  			<option value="1">Cash</option>
								  			<option value="2">Cheque</option>
								  		</select>
								  		<input type="text" name="cheque_no" id="" class="form-control" placeholder="Cheque No">
								  		<select name="bank_acc_id" class="form-control" id="">
								  			<option>Select Account No (if cheque)</option>
								  			<option value="1">FSIBL-1234</option>
								  			<option value="2">DBBL-7890</option>
								  		</select>
								  		<input type="text" name="coll_amount" id="" class="form-control" placeholder="Collection Amount">
								  	</div>
								  	<div class="col-3">
								  		<label for="">Amount Distribution Policy</label>
								  		<input type="text" name="loan_amount" id="" class="form-control" placeholder="95%">
								  		<input type="text" name="profit_amount" id="" class="form-control" placeholder="5%">
								  		<input type="text" name="notes" id="" class="form-control" placeholder="Notes">
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
						  <h3>Receive Voucher : Sanghu Corporate</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="text" name="trx_id" id="" class="form-control" placeholder="RV001001">
						  				<select name="company_id" class="form-control" id="">
								  			<option>Select Company</option>
								  			<option value="1">Jamuna Micro Credit</option>
								  			<option value="2">Sanghu Farm & Agro Vet</option>
								  		</select>
								  		<select name="client_id" class="form-control" id="">
								  			<option>Select MCL No</option>
								  			<option value="1">MCL-123456</option>
								  			<option value="2">MCL-456789</option>
								  		</select>
								  		<select name="rcv_method" class="form-control" id="">
								  			<option>Select Receive Method</option>
								  			<option value="1">Cash</option>
								  			<option value="2">Cheque</option>
								  		</select>
								  		<input type="text" name="cheque_no" id="" class="form-control" placeholder="Cheque No">
								  		<select name="bank_acc_id" class="form-control" id="">
								  			<option>Select Account No (if cheque)</option>
								  			<option value="1">FSIBL-1234</option>
								  			<option value="2">DBBL-7890</option>
								  		</select>
								  		<input type="text" name="coll_amount" id="" class="form-control" placeholder="Collection Amount">
								  	</div>
								  	<div class="col-3">
								  		<label for="">Amount Distribution Policy</label>
								  		<input type="text" name="loan_amount" id="" class="form-control" placeholder="95%">
								  		<input type="text" name="profit_amount" id="" class="form-control" placeholder="5%">
								  		<input type="text" name="notes" id="" class="form-control" placeholder="Notes">
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