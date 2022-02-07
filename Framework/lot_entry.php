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
						  <label class="tv-tab" for="tv-tab-1">Lot Entry : Fruits</label>
						  <label class="tv-tab" for="tv-tab-2">Lot Entry : Dry Fish</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Lot Entry : Fruits</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
								  	<div class="col-3">
								  		<input type="text" class="form-control" value="LOT123456" disabled="">
								  	</div>
								  	<div class="col-3">
								  		<select name="client_id" id="" class="form-control">
								  			<option>Select Client</option>
								  			<option value="1">ABC</option>
								  			<option value="2">DEF</option>
								  		</select>
								  	</div>
						  		</div>
						  		<hr>
						  		<div class="row">
						  			<div class="col-12">
						  				<h6 class="bg-gray">Lot Entry (Fruits)</h6>
						  				<button style="float: right;" class="save-btn">Add Line</button>
						  			</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-11">
						  				<table class="tbl-3">
						  					<thead>
						  						<tr>
						  							<th width="15%">Bag Size</th>
						  							<th>Entry Qty</th>
						  							<th>Bag Rate</th>
						  							<th>In KG</th>
						  							<th>KG Rate</th>
						  							<th>Total Receivables</th>
						  							<th>Action</th>
						  						</tr>
						  					</thead>
						  					<tbody>
						  						<tr>
						  							<td>
						  								<select name="bag_size" id="" class="form-control">
						  									<option value="10">10 KG</option>
						  									<option value="5">5 KG</option>
						  									<option value="3">3 KG</option>
						  									<option value="30">30 KG</option>
						  									<option value="50">50 KG</option>
						  								</select>
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="1500">
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="7">
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="15000 KG">
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="0.7">
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="10,500.00">
						  							</td>
						  							<td><button class="save-btn">delete</button></td>
						  						</tr>
						  					</tbody>
						  					<tfoot>
						  						<tr>
						  							<td colspan="5">Subtotal</td>
						  							<td class="text-right pr10">10,500.00</td>
						  						</tr>
						  						<tr>
						  							<td colspan="5">(+) VAT</td>
						  							<td class="text-right pr10">0.00</td>
						  						</tr>
						  						<tr>
						  							<td colspan="5">(+) Service Charge</td>
						  							<td class="text-right pr10">500.00</td>
						  						</tr>
						  						<tr>
						  							<th colspan="5">(=) Total Amount</th>
						  							<th>11,000.00</th>
						  						</tr>
						  						<tr>
						  							<td colspan="5">(-) Booking Money</td>
						  							<td class="text-right pr10">1,000.00</td>
						  						</tr>
						  						<tr>
						  							<th colspan="5">(=) Net Receivables</th>
						  							<th class="font20">10,000.00</th>
						  						</tr>
						  						<tr>
						  							<td colspan="6">
						  								<textarea name="notes" id="" cols="30" rows="10" placeholder="notes"></textarea>
						  							</td>
						  						</tr>
						  					</tfoot>
						  				</table>
						  			</div>
						  		</div>
						  		<br>
						  		<div class="row">
						  			<div class="col-4"></div>
						  			<div class="col-3">
						  				<button class="save-btn">Save</button>
						  			</div>
						  		</div>
						  	</form>
						  </div>
						</div>
						<input class="tv-radio" id="tv-tab-2" name="tv-group" type="radio"/>
						<div class="tv-content">
						  <h3>Lot Entry : Dry Fish</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
								  	<div class="col-3">
								  		<input type="text" class="form-control" value="LOT123456" disabled="">
								  	</div>
								  	<div class="col-3">
								  		<select name="client_id" id="" class="form-control">
								  			<option>Select Client</option>
								  			<option value="1">ABC</option>
								  			<option value="2">DEF</option>
								  		</select>
								  	</div>
						  		</div>
						  		<hr>
						  		<div class="row">
						  			<div class="col-12">
						  				<h6 class="bg-gray">Lot Entry (Fruits)</h6>
						  				<button style="float: right;" class="save-btn">Add Line</button>
						  			</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-11">
						  				<table class="tbl-3">
						  					<thead>
						  						<tr>
						  							<th width="15%">Bag Size</th>
						  							<th>Entry Qty</th>
						  							<th>Bag Rate</th>
						  							<th>In KG</th>
						  							<th>KG Rate</th>
						  							<th>Total Receivables</th>
						  							<th>Action</th>
						  						</tr>
						  					</thead>
						  					<tbody>
						  						<tr>
						  							<td>
						  								<select name="bag_size" id="" class="form-control">
						  									<option value="10">10 KG</option>
						  									<option value="5">5 KG</option>
						  									<option value="3">3 KG</option>
						  									<option value="30">30 KG</option>
						  									<option value="50">50 KG</option>
						  								</select>
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="1500">
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="7">
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="15000 KG">
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="0.7">
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="10,500.00">
						  							</td>
						  							<td><button class="save-btn">delete</button></td>
						  						</tr>
						  					</tbody>
						  					<tfoot>
						  						<tr>
						  							<td colspan="5">Subtotal</td>
						  							<td class="text-right pr10">10,500.00</td>
						  						</tr>
						  						<tr>
						  							<td colspan="5">(+) VAT</td>
						  							<td class="text-right pr10">0.00</td>
						  						</tr>
						  						<tr>
						  							<td colspan="5">(+) Service Charge</td>
						  							<td class="text-right pr10">500.00</td>
						  						</tr>
						  						<tr>
						  							<th colspan="5">(=) Total Amount</th>
						  							<th>11,000.00</th>
						  						</tr>
						  						<tr>
						  							<td colspan="5">(-) Booking Money</td>
						  							<td class="text-right pr10">1,000.00</td>
						  						</tr>
						  						<tr>
						  							<th colspan="5">(=) Net Receivables</th>
						  							<th class="font20">10,000.00</th>
						  						</tr>
						  						<tr>
						  							<td colspan="6">
						  								<textarea name="notes" id="" cols="30" rows="10" placeholder="notes"></textarea>
						  							</td>
						  						</tr>
						  					</tfoot>
						  				</table>
						  			</div>
						  		</div>
						  		<br>
						  		<div class="row">
						  			<div class="col-4"></div>
						  			<div class="col-3">
						  				<button class="save-btn">Save</button>
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