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
						  <label class="tv-tab" for="tv-tab-1">Add Fixed Asset</label>
						  <label class="tv-tab" for="tv-tab-2">Add Current Asset</label>
						  <label class="tv-tab" for="tv-tab-3">Depreciation & Expense</label>
						  <label class="tv-tab" for="tv-tab-4">Depreciation Policy</label>
						  <label class="tv-tab" for="tv-tab-5">Accumulated Depreciation</label>
						  <label class="tv-tab" for="tv-tab-6">Asset Disposal</label>
						  <label class="tv-tab" for="tv-tab-7">Asset Configuration</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Add Fixed Asset</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
						  				<div class="row">
						  					<div class="col-2">
						  						<input type="checkbox" name="" id="" checked>
						  					</div>
							  				<div class="col-10">
							  					Unique Batch ID
							  				</div>
							  			</div>
							  			<div class="row">
							  				<div class="col-2">
							  					<input type="checkbox" name="" id="">
							  				</div>
							  				<div class="col-10">
							  					Group Batch ID
							  				</div>
							  			</div>
								  		<input type="text" name="ubatch_id" id="" class="form-control" placeholder="Unique Batch No">
								  		<input type="text" name="gbatch_id" id="" class="form-control" placeholder="Group Batch No">
								  		<input type="text" name="asset_code" id="" class="form-control" placeholder="Asset Code">
								  		<input type="text" name="asset_name" id="" class="form-control" placeholder="Asset Name">
								  		<input type="text" name="sku_no" id="" class="form-control" placeholder="SKU No (if any)">
								  		<select name="asset_loc" class="form-control" id="">
								  			<option>Select Location/Company</option>
								  			<option value="1">Jamuna Micro Credit</option>
								  			<option value="2">Sanghu Farm & Agro Vet</option>
								  			<option value="2">Sanghu Valley Cold Storage</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<div class="row">
									  		<div class="col-2">
									  			<input type="checkbox" name="" id="">
									  		</div>									  		
									  		<div class="col-10">Need Maintainence</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-2">
									  			<input type="checkbox" name="" id="">
									  		</div>									  		
									  		<div class="col-10">Enable Depreciation</div>
									  	</div>
								  		<input type="text" name="qty" id="" class="form-control" placeholder="Total Quantity">
								  		<input type="text" name="unit_cost" id="" class="form-control" placeholder="Unit Cost">
								  		<input type="text" name="stotal_cost" id="" class="form-control" placeholder="SubTotal Cost">
								  		<input type="text" name="vat_percent" id="" class="form-control" placeholder="Vat Percentage">
								  		<input type="text" name="vat_amount" id="" class="form-control" placeholder="Vat Amount">
								  		<input type="text" name="gtotal_cost" id="" class="form-control" placeholder="Grand Total Cost">
								  		<!-- Add markup needed in aciton menu in datatable each rows for admin group -->
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
						  <h3>Add Current Asset</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
						  				<div class="row">
						  					<div class="col-2">
						  						<input type="checkbox" name="" id="" checked>
						  					</div>
							  				<div class="col-10">
							  					Unique Batch ID
							  				</div>
							  			</div>
							  			<div class="row">
							  				<div class="col-2">
							  					<input type="checkbox" name="" id="">
							  				</div>
							  				<div class="col-10">
							  					Group Batch ID
							  				</div>
							  			</div>
								  		<input type="text" name="ubatch_id" id="" class="form-control" placeholder="Unique Batch No">
								  		<input type="text" name="gbatch_id" id="" class="form-control" placeholder="Group Batch No">
								  		<input type="text" name="item_code" id="" class="form-control" placeholder="Item Code">
								  		<input type="text" name="item_name" id="" class="form-control" placeholder="Item Name">
								  		<input type="text" name="batch_id" id="" class="form-control" placeholder="Batch No">
								  		<input type="text" name="sku_no" id="" class="form-control" placeholder="SKU No (if any)">
								  		<select name="asset_loc" class="form-control" id="">
								  			<option>Select Location/Company</option>
								  			<option value="1">Jamuna Micro Credit</option>
								  			<option value="2">Sanghu Farm & Agro Vet</option>
								  			<option value="2">Sanghu Valley Cold Storage</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
									  	<div class="row">
									  		<div class="col-2">
									  			<input type="checkbox" name="" id="">
									  		</div>									  		
									  		<div class="col-10">Saleable Item</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-2">
									  			<input type="checkbox" name="" id="">
									  		</div>									  		
									  		<div class="col-10">Inventory Item</div>
									  	</div>
								  		<div class="row">
									  		<div class="col-2">
									  			<input type="checkbox" name="" id="">
									  		</div>									  		
									  		<div class="col-10">Service Item</div>
									  	</div>
								  		<input type="text" name="uom" id="" class="form-control" placeholder="Unit of Measurement">
								  		<input type="text" name="qty" id="" class="form-control" placeholder="Total Quantity">
								  		<input type="text" name="unit_cost" id="" class="form-control" placeholder="Unit Cost">
								  		<input type="text" name="stotal_cost" id="" class="form-control" placeholder="SubTotal Cost">
								  		<input type="text" name="vat_percent" id="" class="form-control" placeholder="Vat Percentage">
								  		<input type="text" name="vat_amount" id="" class="form-control" placeholder="Vat Amount">
								  		<input type="text" name="gtotal_cost" id="" class="form-control" placeholder="Grand Total Cost">
								  		<!-- Add markup needed in aciton menu in datatable each rows for admin group -->
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
								  		<button class="save-btn">Edit</button>
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