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
						  <label class="tv-tab" for="tv-tab-1">SVCSL - Client Ledger : Fruits</label>
						  <label class="tv-tab" for="tv-tab-2">SVCSL - Client Ledger : Dry Fish</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Sanghu Valley Cold Storage : Client Ledger (Fruits)</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
								  	<div class="col-3">
								  		<select name="client_id" id="" class="form-control">
								  			<option>Select Client</option>
								  			<option value="1">ABC</option>
								  			<option value="2">DEF</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<button class="save-btn">Search</button>
								  	</div>
						  		</div>
						  		<hr>
						  		<div class="row">
						  			<div class="col-3">
						  				<label class="control-label" for="">Client Name</label>
						  				<input type="text" class="form-control" value="Mr. XYZ" disabled>
						  			</div>
						  			<div class="col-3">
						  				<label class="control-label" for="">Client Contact</label>
						  				<input type="text" class="form-control" value="01812-345678" disabled>
						  			</div>
						  			<div class="col-2">
						  				<label class="control-label" for="">Total Receivables</label>
						  				<input type="text" class="form-control" value="1,20,000.00" disabled>
						  			</div>
						  			<div class="col-2">
						  				<label class="control-label" for="">Total Amount Received</label>
						  				<input type="text" class="form-control" value="50,000.00" disabled>
						  			</div>
						  			<div class="col-2">
						  				<label class="control-label" for="">Total Due Till Date</label>
						  				<input type="text" class="form-control" value="70,000.00" disabled>
						  			</div>
						  		</div>
						  		<br>
						  		<div class="row">
						  			<div class="col-9">
						  				<div class="row">
							  				<div class="col-12">
						  						<h6 class="bg-gray">Lot Entry Details</h4>
								  				<table class="tbl-2">
								  					<thead>
								  						<tr>
								  							<th>Lot No</th>
								  							<th>Lot Entry Date</th>
								  							<th>Bag Size</th>
								  							<th>Entry Qty</th>
								  							<th>Storage Type</th>
								  							<th>Unit Cost</th>
								  							<th>Total Receivable (Per Month)</th>
								  						</tr>
								  					</thead>
								  					<tbody>
								  						<tr>
								  							<td>LOT123456</td>
								  							<td>01-Jan-2022</td>
								  							<td>10 KG</td>
								  							<td>500</td>
								  							<td>Monthly / Seasonal</td>
								  							<td>7.00</td>
								  							<td>35,000.00</td>
								  						</tr>
								  					</tbody>
								  				</table>
						  					</div>
						  				</div>
						  			</div>
						  			<div class="col-3">
						  				<div class="row">
						  					<div class="col-12">
						  						<h6 class="bg-gray">Billing Details</h4>
								  				<table class="tbl-2">
								  					<thead>
								  						<tr>
								  							<th>Billing Month</th>
								  							<th>Bill Amount</th>
								  						</tr>
								  					</thead>
								  					<tbody>
								  						<tr>
								  							<td>Dec-2021</td>
								  							<td>1,20,000.00</td>
								  						</tr>
								  						<tr>
								  							<td>Jan-2022</td>
								  							<td>90,000.00</td>
								  						</tr>
								  					</tbody>
								  				</table>
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  		<br>
						  		<div class="row">
						  			<div class="col-9">
						  				<div class="row">
							  				<div class="col-12">
						  						<h6 class="bg-gray">Lot Issue Details</h4>
								  				<table class="tbl-2">
								  					<thead>
								  						<tr>
								  							<th>Lot No</th>
								  							<th>Lot Issue Date</th>
								  							<th>Bag Size</th>
								  							<th>Issue Qty</th>
								  							<th>Storage Type</th>
								  							<th>Unit Cost</th>
								  							<th>Amount Received</th>
								  						</tr>
								  					</thead>
								  					<tbody>
								  						<tr>
								  							<td>LOT123456</td>
								  							<td>05-Feb-2022</td>
								  							<td>10 KG</td>
								  							<td>200</td>
								  							<td>Monthly / Seasonal</td>
								  							<td>7.00</td>
								  							<td>14,000.00</td>
								  						</tr>
								  					</tbody>
								  				</table>
						  					</div>
						  				</div>
						  			</div>
						  			<div class="col-3">
						  				<div class="row">
						  					<div class="col-12">
						  						<h6 class="bg-gray">Receive Details</h4>
								  				<table class="tbl-2">
								  					<thead>
								  						<tr>
								  							<th>Receive Month</th>
								  							<th>Receive Amount</th>
								  						</tr>
								  					</thead>
								  					<tbody>
								  						<tr>
								  							<td>Jan-2022</td>
								  							<td>20,000.00</td>
								  						</tr>
								  						<tr>
								  							<td>Feb-2022</td>
								  							<td>5,000.00</td>
								  						</tr>
								  					</tbody>
								  				</table>
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  	</form>
						  </div>
						</div>
						<input class="tv-radio" id="tv-tab-2" name="tv-group" type="radio"/>
						<div class="tv-content">
						  <h3>Sanghu Valley Cold Storage : Client Ledger (Dry Fish)</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
								  	<div class="col-3">
								  		<select name="client_id" id="" class="form-control">
								  			<option>Select Client</option>
								  			<option value="1">ABC</option>
								  			<option value="2">DEF</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<button class="save-btn">Search</button>
								  	</div>
						  		</div>
						  		<hr>
						  		<div class="row">
						  			<div class="col-3">
						  				<label class="control-label" for="">Client Name</label>
						  				<input type="text" class="form-control" value="Mr. XYZ" disabled>
						  			</div>
						  			<div class="col-3">
						  				<label class="control-label" for="">Client Contact</label>
						  				<input type="text" class="form-control" value="01812-345678" disabled>
						  			</div>
						  			<div class="col-2">
						  				<label class="control-label" for="">Total Receivables</label>
						  				<input type="text" class="form-control" value="1,20,000.00" disabled>
						  			</div>
						  			<div class="col-2">
						  				<label class="control-label" for="">Total Amount Received</label>
						  				<input type="text" class="form-control" value="50,000.00" disabled>
						  			</div>
						  			<div class="col-2">
						  				<label class="control-label" for="">Total Due Till Date</label>
						  				<input type="text" class="form-control" value="70,000.00" disabled>
						  			</div>
						  		</div>
						  		<br>
						  		<div class="row">
					  				<div class="col-12">
				  						<h6 class="bg-gray">Lot Entry VS Issue Details</h4>
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
								                    <th>Date</th>
								                    <th>Lot ID</th>
								                    <th>Unit Cost</th>
								                    <th>Total Qty (KG)</th>
								                    <th>Type</th>
								                    <th>Trx Note</th>
								                    <th>Store Stay (Days)</th>
								                    <th>Amount (Dr)</th>
								                    <th>Amount (Cr)</th>
								                    <th>Balance</th>
								                </tr>
								            </thead>
								            <tbody>
								                <tr>
								                    <td>27-Jan-22</td>
								                    <td>101920</td>
								                    <td>0.25</td>
								                    <td>5000</td>
								                    <td>Entry</td>
								                    <td>-</td>
								                    <td>1</td>
								                    <td>1250.00</td>
								                    <td>-</td>
								                    <td>1250.00</td>
								                </tr>
								                <tr>
								                    <td>27-Jan-22</td>
								                    <td>101920</td>
								                    <td>0.25</td>
								                    <td>5000</td>
								                    <td>Entry</td>
								                    <td>Booking</td>
								                    <td>1</td>
								                    <td>-</td>
								                    <td>1000.00</td>
								                    <td>250.00</td>
								                </tr>
								                <tr>
								                    <td>20-Feb-22</td>
								                    <td>101920</td>
								                    <td>0.25</td>
								                    <td>1000</td>
								                    <td>Issue</td>
								                    <td>Billed</td>
								                    <td>25</td>
								                    <td>6250.00</td>
								                    <td>-</td>
								                    <td>6500.00</td>
								                </tr>
								                <tr>
								                    <td>20-Feb-22</td>
								                    <td>101920</td>
								                    <td>0.25</td>
								                    <td>1000</td>
								                    <td>Issue</td>
								                    <td>Payment</td>
								                    <td>25</td>
								                    <td>-</td>
								                    <td>6000.00</td>
								                    <td>500.00</td>
								                </tr>
								            </tbody>
								        </table>
								        <br>
				  						<button class="save-btn">Print PDF</button>
				  					</div>
						  		</div>
						  	</form>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>