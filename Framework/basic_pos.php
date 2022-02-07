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
						  <label class="tv-tab" for="tv-tab-1">Basic POS</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Basic POS</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">								
								<div class="row">
									<div class="col-4">
										<input type="text" class="form-control" placeholder="Type or Speak">
									</div>
									<div class="col-2">
										<button class="save-btn">Add</button>
									</div>
								</div>
						  		<br>
						  		<div class="row">
						  			<div class="col-12">
						  				<table class="tbl-3">
						  					<thead>
						  						<tr class="text-center">
						  							<th>SL</th>
						  							<th>Product Name</th>
						  							<th width="10%">Unit Cost</th>
						  							<th>Selling Price</th>
						  							<th>Qty</th>
						  							<th>SubTotal</th>
						  							<th width="8%">Action</th>
						  						</tr>
						  					</thead>
						  					<tbody>
						  						<tr>
						  							<td>1</td>
						  							<td>
						  								<input type="text" class="form-control" value="Item Name">
						  							</td>
						  							<td>20.00</td>
						  							<td><input type="text" class="form-control" value="26.00"></td>
						  							<td><input type="number" value="1"></td>
						  							<td><input type="text" value="26.00"></td>
						  							<td><button class="save-btn">delete</button></td>
						  						</tr>
						  						<tr>
						  							<td>2</td>
						  							<td>
						  								<input type="text" class="form-control" value="Item Name">
						  							</td>
						  							<td>7.00</td>
						  							<td><input type="text" class="form-control" value="8.50"></td>
						  							<td><input type="number" value="1"></td>
						  							<td><input type="text" value="8.50"></td>
						  							<td><button class="save-btn">delete</button></td>
						  						</tr>
						  						<tr>
						  							<td>3</td>
						  							<td>
						  								<input type="text" class="form-control" value="Item Name">
						  							</td>
						  							<td>12.00</td>
						  							<td><input type="text" class="form-control" value="14.00"></td>
						  							<td><input type="number" value="1"></td>
						  							<td><input type="text" value="14.00"></td>
						  							<td><button class="save-btn">delete</button></td>
						  						</tr>
						  					</tbody>
						  					<tfoot class="text-right">
						  						<tr>
						  							<th colspan="6">Total Amount</th>
						  							<th>11,600.00</th>
						  						</tr>
						  						<tr>
						  							<th colspan="6">(+) VAT</th>
						  							<th><input type="text" value="0.00"></th>
						  						</tr>
						  						<tr>
						  							<th colspan="6">(+) Other Charges</th>
						  							<th><input type="text" value="0.00"></th>
						  						</tr>
						  						<tr>
						  							<th class="bg-gray p10" colspan="6">Total Receivable</th>
						  							<th class="bg-gray p10 font20 text-center">11,600.00</th>
						  						</tr>
						  					</tfoot>
						  				</table>
						  			</div>
						  		</div>
						  		<br>
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
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>