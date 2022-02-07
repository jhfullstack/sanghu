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
						  <label class="tv-tab" for="tv-tab-1">Lotwise Cost Calculation : Fruits</label>
						  <label class="tv-tab" for="tv-tab-2">Lotwise Cost Calculation : Dry Fish</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Lotwise Cost Calculation (Fruits)</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-9"></div>
						  			<div class="col-3">
						  				<button class="comm-btn">Calculate Receivables</button>
						  			</div>
						  		</div>
						  		<br>
						  		<div class="row">
								  	<div class="col-3">
								  		<select name="client_id" id="" class="form-control">
								  			<option>Select Client</option>
								  			<option value="1">ABC</option>
								  			<option value="2">DEF</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<select name="lot_id" id="" class="form-control">
								  			<option>Select Lot ID</option>
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
						  		</div>
						  		<br>
						  		<div class="row">
						  			<div class="col-2">
						  				<label for="" class="control-label">Lot No</label>
						  				<input type="text" class="form-control" value="123456">
						  			</div>
						  			<div class="col-2">
						  				<label for="" class="control-label">Entry Date</label>
						  				<input type="text" class="form-control" value="02-Jan-2022">
						  			</div>
						  			<div class="col-2">
						  				<label for="" class="control-label">Total Qty (In KG)</label>
						  				<input type="text" class="form-control" value="2500 KG">
						  			</div>
						  			<div class="col-2">
						  				<label for="" class="control-label">Cost (Per KG)</label>
						  				<input type="text" class="form-control" value="0.7">
						  			</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-6">
						  				<table class="tbl-2">
						  					<thead>
						  						<tr>
						  							<th>Bag Size</th>
						  							<th>Entry Qty</th>
						  							<th>In KG</th>
						  							<th>Cost (Per Bag)</th>
						  							<th>Total Receivables</th>
						  						</tr>
						  					</thead>
						  					<tbody>
						  						<tr>
						  							<td>5 KG</td>
						  							<td>500</td>
						  							<td>2500 KG</td>
						  							<td>7</td>
						  							<td>17500</td>
						  						</tr>
						  					</tbody>
						  				</table>
						  			</div>
						  			<div class="col-2">
						  				<label for="" class="control-label">Bag Size</label>
						  				<input type="text" class="form-control" value="10 KG">
						  			</div>
						  			<div class="col-2">
						  				<label for="" class="control-label">Entry Qty</label>
						  				<input type="text" class="form-control" value="100">
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