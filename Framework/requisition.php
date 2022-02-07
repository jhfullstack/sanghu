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
						  <label class="tv-tab" for="tv-tab-1">Requisition</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Requisition</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="company_id" class="form-control" id="">
								  			<option value="1">Sanghu Farm & Agro Vet</option>
								  		</select>
								  	</div>
						  		</div>

						  		<div class="row">
						  			<div class="col-12">
						  				<button style="float: right;" class="save-btn">Add Line</button>
						  			</div>
						  		</div>
						  		<br>
						  		<div class="row">
						  			<div class="col-12">
						  				<table class="tbl-3">
						  					<thead>
						  						<tr>
						  							<th>Item Name</th>
						  							<th>Bag Size</th>
						  							<th>Qty (In Bag)</th>
						  							<th>Qty (In KG)</th>
						  							<th>Last Pur Cost</th>
						  							<th>New Cost</th>
						  							<th>Subtotal</th>
						  							<th>Action</th>
						  						</tr>
						  					</thead>
						  					<tbody>
						  						<tr>
						  							<td width="25%">
						  								<select name="item_id" id="" class="form-control">
										  					<option value="">Select Item</option>
										  					<option value="1">ABC</option>
										  					<option value="2">XYZ</option>
										  				</select>
						  							</td>
						  							<td width="15%">
						  								<select name="bag_size" id="" class="form-control">
										  					<option value="">Select Bag Size</option>
										  					<option value="1">3 KG</option>
										  					<option value="2">5 KG</option>
										  					<option value="3">10 KG</option>
										  					<option value="4">30 KG</option>
										  					<option value="5">50 KG</option>
										  				</select>
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="20">
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="60">
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="550.00">
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="530.00">
						  							</td>
						  							<td>
						  								<input type="text" class="form-control" value="4,800.00">
						  							</td>
						  							<td>
						  								<button class="save-btn">delete</button>
						  							</td>
						  						</tr>
						  					</tbody>
						  					<tfoot>
						  						<tr>
						  							<td colspan="6"><b>(=) Probable Cost</b></td>
						  							<td>
						  								<span class="font20"><b>4,800.00</b></span>
						  							</td>
						  						</tr>
						  						<tr>
						  							<td colspan="7">
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
				                    <th scope="col" width="5%"><input class="form-check-input" type="checkbox"></th>
				                    <th>#</th>
				                    <th>Date of Req</th>
				                    <th>Client Name</th>
				                    <th>Business Type</th>
				                    <th>Area Name</th>
				                    <th>Requested Amount</th>
				                    <th>Loan Duration</th>
				                    <th>Priority</th>
				                    <th>Employee Name</th>
				                    <th>Area In-charge</th>
				                    <th>Loan Status</th>
				                    <th>Action</th>
				                </tr>
				            </thead>
				            <tbody>
				                <tr>
				                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
				                    <td>1</td>
				                    <td>11-Jan-22</td>
				                    <td>Mosstafa Kamal</td>
				                    <td>Grocery</td>
				                    <td>Area-07</td>
				                    <td>2,00,000.00</td>
				                    <td>6 Months</td>
				                    <td>Normal</td>
				                    <td>Mr. Kamal</td>
				                    <td>Mr. Tipu</td>
				                    <td>Pending</td>
				                    <td>Client Profile | Loan Status | View</td>
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