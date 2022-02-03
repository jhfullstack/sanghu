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
						  <label class="tv-tab" for="tv-tab-1">Contra Voucher</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Contra Voucher</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="text" name="trx_id" id="" class="form-control" placeholder="CV001001">
						  				<select name="transfer_from" class="form-control" id="">
								  			<option>Transfer From</option>
								  			<option value="1">Jamuna Micro Credit</option>
								  			<option value="2">Sanghu Farm & Agro Vet</option>
								  			<option value="3">Sanghu Corporate</option>
								  		</select>
						  				<select name="transfer_to" class="form-control" id="">
								  			<option>Transfer To</option>
								  			<option value="1">Jamuna Micro Credit</option>
								  			<option value="2">Sanghu Farm & Agro Vet</option>
								  		</select>
								  		<select name="transfer_method" class="form-control" id="">
								  			<option>Select Transfer Method</option>
								  			<option value="1">Cash</option>
								  			<option value="2">Cheque</option>
								  		</select>
								  		<select name="bank_acc_id" class="form-control" id="">
								  			<option>Select Account No (if cheque)</option>
								  			<option value="1">FSIBL-1234</option>
								  			<option value="2">DBBL-7890</option>
								  		</select>
								  		<input type="text" name="cheque_no" id="" class="form-control" placeholder="Cheque No">
								  		<input type="text" name="transfer_amount" id="" class="form-control" placeholder="Transfer Amount">
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