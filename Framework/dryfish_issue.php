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
						  <label class="tv-tab" for="tv-tab-1">Dry Fish Issue Invoice</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Dry Fish Issue Invoice</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="product_type" class="form-control" id="">
								  			<option value="1">Dry Fish</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<select name="client_id" id="" class="form-control">
								  			<option>Select Client</option>
								  			<option value="1">LOT123456</option>
								  			<option value="2">LOT234567</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<select name="lot_id" id="" class="form-control">
								  			<option>Select Lot</option>
								  			<option value="1">LOT123456</option>
								  			<option value="2">LOT234567</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<button class="save-btn">Search</button>
								  	</div>
						  		</div>
						  		<hr>
						  		<div class="row">
						  			<div class="col-2">
						  				<label class="control-label" for="">Client Name</label>
						  				<input type="text" class="form-control" value="Mr. XYZ" disabled>
						  			</div>
						  			<div class="col-2">
						  				<label class="control-label" for="">Client Contact</label>
						  				<input type="text" class="form-control" value="01812-345678" disabled>
						  			</div>
						  			<div class="col-2">
						  				<label class="control-label" for="">Lot No</label>
						  				<input type="text" class="form-control" value="LOT123456" disabled>
						  			</div>
						  			<div class="col-2">
						  				<label class="control-label" for="">Lot Entry Date</label>
						  				<input type="text" class="form-control" value="02-Jan-22" disabled>
						  			</div>
						  			<div class="col-2">
						  				<label class="control-label" for="">Total Due Today</label>
						  				<input type="text" class="form-control" value="90,000.00" disabled>
						  			</div>
						  		</div>
						  		<br>
						  		<div class="row">
						  			<div class="col-8">
						  				<div class="row">
						  					<div class="col-12">
						  						<h6 class="bg-gray">Lot Quantity</h4>
								  				<table class="tbl-2">
								  					<thead>
								  						<tr>
								  							<th>Bag Size</th>
								  							<th>Entry Qty</th>
								  							<th>Current Qty</th>
								  							<th>Storage Type</th>
								  							<th>Unit Cost</th>
								  						</tr>
								  					</thead>
								  					<tbody>
								  						<tr>
								  							<td>3 KG</td>
								  							<td>500</td>
								  							<td>200</td>
								  							<td>Daily</td>
								  							<td>0.50</td>
								  						</tr>
								  					</tbody>
								  				</table>
						  					</div>
						  					<div class="col-12">
						  						<h6 class="bg-gray">Payment Details</h4>
								  				<table class="tbl-2">
								  					<thead>
								  						<tr>
								  							<th>Issue Date</th>
								  							<th>Storage Type</th>
								  							<th>Issue Qty</th>
								  							<th>Amount Rcvd</th>
								  							<th>Other Charges</th>
								  						</tr>
								  					</thead>
								  					<tbody>
								  						<tr>
								  							<td>10-Jan-2022</td>
								  							<td>Daily</td>
								  							<td>200 Bags</td>
								  							<td>30,000.00</td>
								  							<td>1,000.00</td>
								  						</tr>
								  					</tbody>
								  				</table>
						  					</div>
						  				</div>						  				
						  			</div>
						  			<div class="col-4">
						  				<h6 class="bg-gray">Billing Details</h4>
						  				<table class="tbl-2">
						  					<thead>
						  						<tr>
						  							<th>In Storage Duration</th>
						  							<th>Bill Amount</th>
						  						</tr>
						  					</thead>
						  					<tbody>
						  						<tr>
						  							<td>26 Days</td>
						  							<td>1,20,000.00</td>
						  						</tr>
						  					</tbody>
						  				</table>
						  			</div>
						  		</div>
						  		<hr>
						  		<div class="row">
						  			<div class="col-12">						  				
						  				<h6 class="bg-gray">Lot Issue (Dry Fish)</h6>
						  				<button style="float: right;" class="save-btn">Add Line</button>
						  			</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-12">
						  				<table class="tbl-3">
						  					<thead>
						  						<tr>
						  							<th>Client Name</th>
						  							<th>Lot Number</th>
						  							<th>Bag Size</th>
						  							<th>Issue Quantity</th>
						  							<th>Rate Per Bag</th>
						  							<th>Subtotal</th>
						  						</tr>
						  					</thead>
						  					<tbody>
						  						<tr>
						  							<td width="30%">
						  								<select name="client_id" id="" class="form-control">
										  					<option value="">Select Client</option>
										  					<option value="1">Mr. ABC</option>
										  					<option value="2">Mr. XYZ</option>
										  				</select>
						  							</td>
						  							<td width="20%">
						  								<select name="lot_id" id="" class="form-control">
										  					<option value="">Select Lot Number</option>
										  					<option value="1">LOT123456</option>
										  					<option value="2">LOT325457</option>
										  				</select>
						  							</td>
						  							<td width="20%">
						  								<select name="bag_size" id="" class="form-control">
										  					<option value="">Select Bag Size</option>
										  					<option value="1">3 KG</option>
										  					<option value="2">5 KG</option>
										  					<option value="3">10 KG</option>
										  					<option value="4">30 KG</option>
										  					<option value="5">50 KG</option>
										  				</select>
						  							</td>
						  							<td width="10%">
						  								<input type="text" class="form-control" value="100.00">
						  							</td>
						  							<td width="10%">
						  								<input type="text" class="form-control" value="5.00">
						  							</td>
						  							<td width="10%">
						  								<input type="text" class="form-control" value="500.00">
						  							</td>
						  						</tr>
						  					</tbody>
						  					<tfoot>
						  						<tr>
						  							<td colspan="5">Total</td>
						  							<td>500.00</td>
						  						</tr>
						  						<tr>
						  							<td colspan="5">(+) VAT</td>
						  							<td>0.00</td>
						  						</tr>
						  						<tr>
						  							<td colspan="5">(-) Discount</td>
						  							<td>0.00</td>
						  						</tr>
						  						<tr>
						  							<td colspan="5">(+) Other Charges</td>
						  							<td>
						  								<input type="text" class="form-control" value="100.00">
						  							</td>
						  						</tr>
						  						<tr>
						  							<td colspan="5"><b>(=) Total Amount To Receive</b></td>
						  							<td>
						  								<b>600.00</b>
						  							</td>
						  						</tr>
						  						<tr>
						  							<td colspan="6">
						  								<textarea name="" id="" cols="30" rows="10" placeholder="Note"></textarea>
						  							</td>
						  						</tr>
						  					</tfoot>
						  				</table>
						  			</div>
						  		</div>
						  		<br><br>
						  		<div class="row">
						  			<div class="col-5">
						  			</div>
						  			<div class="col-4">
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
				                    <th width="5%"><input type="checkbox"></th>
				                    <th>#</th>
				                    <th>Date</th>
				                    <th>Empoyee ID</th>
				                    <th>Name</th>
				                    <th>NID No</th>
				                    <th>Date of Join</th>
				                    <th>Job Type</th>
				                    <th>Post</th>
				                    <th>Reporting Boss</th>
				                    <th>Salary</th>
				                    <th>Working Area</th>
				                    <th>Action</th>
				                </tr>
				            </thead>
				            <tbody>
				                <tr>
				                    <th scope="row"><input type="checkbox"></th>
				                    <td>1</td>
				                    <td>27-Jan-22</td>
				                    <td>101920</td>
				                    <td>Mosstafa Kamal</td>
				                    <td>9196221346797</td>
				                    <td>01-Feb-22</td>
				                    <td>Full Time (In Probation)</td>
				                    <td>Management Trainee</td>
				                    <td>Shahed Ahmed</td>
				                    <td>16,000</td>
				                    <td>Area 01</td>
				                    <td>View</td>
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