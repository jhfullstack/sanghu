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
						  <label class="tv-tab" for="tv-tab-1">Milk Sales Invoicing</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Milk Sales / Booking Invoice</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="product_type" class="form-control" id="">
								  			<option value="1">Milk</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<select name="order_type" class="form-control" id="">
								  			<option>Select Order Type</option>
								  			<option value="1">Booking Invoice</option>
								  			<option value="2">Sales Invoice</option>
								  			<option value="3">Draft Invoice</option>
								  		</select>
								  	</div>
								  	<div class="col-3">
								  		<select name="client_id" class="form-control" id="">
								  			<option>Select Client</option>
								  			<option value="1">XYZ</option>
								  			<option value="2">MNO</option>
								  			<option value="3">ABC</option>
								  		</select>
								  	</div>
								  </div>
								<br>
								  <div class="row">
								  	<div class="col-12">
								  		<label for=""><b>Add Product Area</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="save-btn">add</button></label>
						  			</div>
						  		  </div>
						  		<br>
						  		  <div class="row">
						  			<div class="col-12">
						  				<table class="tbl-2">
						  					<thead>
						  						<tr class="text-center">
						  							<th>SL</th>
						  							<th>Product Name</th>
						  							<th>Description</th>
						  							<th>Asking Price</th>
						  							<th>Customer's Price</th>
						  							<th>Minimum Price</th>
						  							<th>Settled Price</th>
						  							<th>Action</th>
						  						</tr>
						  					</thead>
						  					<tbody>
						  						<tr>
						  							<td>1</td>
						  							<td>COW123456</td>
						  							<td>534 KG, Fijian</td>
						  							<td><input type="text" value="2,10,000.00"></td>
						  							<td><input type="text" value="1,70,000.00"></td>
						  							<td>1,87,000.00</td>
						  							<td><input type="text" value="1,87,000.00"></td>
						  							<td><button class="save-btn">delete</button></td>
						  						</tr>
						  						<tr>
						  							<td>2</td>
						  							<td>BUL123456</td>
						  							<td>620 KG, Fijian</td>
						  							<td><input type="text" value="2,30,000.00"></td>
						  							<td><input type="text" value="1,85,000.00"></td>
						  							<td>2,05,000.00</td>
						  							<td><input type="text" value="2,05,000.00"></td>
						  							<td><button class="save-btn">delete</button></td>
						  						</tr>
						  					</tbody>
						  					<tfoot class="text-right">
						  						<tr>
						  							<th colspan="6">Receivable Amount</th>
						  							<th>3,92,000.00</th>
						  						</tr>
						  						<tr>
						  							<th colspan="6">(-) VAT</th>
						  							<th><input type="text" value="0.00"></th>
						  						</tr>
						  						<tr>
						  							<th colspan="6">(+) Other Charges</th>
						  							<th><input type="text" value="0.00"></th>
						  						</tr>
						  						<tr>
						  							<th colspan="6">(-) Agent's Commission</th>
						  							<th><input type="text" value="20,000.00"></th>
						  						</tr>
						  						<tr>
						  							<th colspan="7"><hr></th>
						  						</tr>
						  						<tr>
						  							<th colspan="6">Net Amount</th>
						  							<th>3,72,000.00</th>
						  						</tr>
						  					</tfoot>
						  				</table>
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