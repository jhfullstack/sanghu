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
						  <label class="tv-tab" for="tv-tab-1">Purchase</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Purchase</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="vendor_id" class="form-control" id="">
								  			<option value="">Select Vendor</option>
								  			<option value="1">Vendor 1</option>
								  			<option value="2">Vendor 2</option>
								  		</select>
								  	</div>
								</div>
								<br>								
								<div class="row">
									<div class="col-10">
										<div class="bg-gray p10">
											<b>Add Product Area</b>
										</div>
									</div>
									<div class="col-2">
										<button class="save-btn pull-right">Add Line</button>
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
						  							<th>Description</th>
						  							<th>Last Purchase Cost</th>
						  							<th>New Cost</th>
						  							<th>Qty</th>
						  							<th>SubTotal</th>
						  							<th>Action</th>
						  						</tr>
						  					</thead>
						  					<tbody>
						  						<tr>
						  							<td>1</td>
						  							<td width="20%">
						  								<select name="item_id" id="" class="form-control mb0">
										  					<option value="">Select Item</option>
										  					<option value="1">ABC</option>
										  					<option value="2">XYZ</option>
										  				</select>
						  							</td>
						  							<td width="15%">534 KG, Fijian</td>
						  							<td>9,700.00</td>
						  							<td width="10%"><input type="text" value="10,000.00"></td>
						  							<td width="10%"><input type="text" value="1.00"></td>
						  							<td width="15%"><input type="text" value="10,000.00"></td>
						  							<td><button class="save-btn">delete</button></td>
						  						</tr>
						  						<tr>
						  							<td>2</td>
						  							<td width="20%">
						  								<select name="item_id" id="" class="form-control mb0">
										  					<option value="">Select Item</option>
										  					<option value="1">ABC</option>
										  					<option value="2">XYZ</option>
										  				</select>
						  							</td>
						  							<td width="15%">620 KG, Fijian</td>
						  							<td>1,700.00</td>
						  							<td width="10%"><input type="text" value="1,600.00"></td>
						  							<td width="10%"><input type="text" value="1.00"></td>
						  							<td width="15%"><input type="text" value="1,600.00"></td>
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
						  							<th colspan="7"><hr></th>
						  						</tr>
						  						<tr>
						  							<th class="bg-gray p10" colspan="6">Total Payable</th>
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