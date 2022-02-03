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
						  <label class="tv-tab" for="tv-tab-1">Fund Requisition</label>
						  <label class="tv-tab" for="tv-tab-2">Requisition Category</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Fund Requisition</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-4">						  				
								  		<select name="req_by" class="form-control" id="">
								  			<option>Select Employee ID</option>
								  			<option value="1">101920</option>
								  			<option value="2">101247</option>
								  		</select>
						  			</div>
						  			<div class="col-4">
								  		<input type="text" name="req_amount" id="" class="form-control" placeholder="Requisition Amount">
						  			</div>
						  			<div class="col-4">
						  				<table class="tbl-3">
						  					<tbody>
						  						<tr>
						  							<td><input type="checkbox" name="" id="" checked=""></td>
						  							<td>Normal</td>
						  							<td><input type="checkbox" name="" id=""></td>
						  							<td>Urgent</td>
						  						</tr>
						  					</tbody>
						  				</table>
						  			</div>
					  			</div>
						  		<div class="row">
						  			<div class="col-12">
						  				<table class="tbl-3">
						  					<tbody>
						  						<tr>
						  							<td><input type="checkbox" name="" id="" checked=""></td>
						  							<td>Jamuna Micro Credit & Finance</td>
						  							<td><input type="checkbox" name="" id=""></td>
						  							<td>Sanghu Valley Cold Storage</td>
						  							<td><input type="checkbox" name="" id=""></td>
						  							<td>Sanghu Farm & Agro Vet</td>
						  						</tr>
						  					</tbody>
						  				</table>
						  			</div>
					  			</div>
						  		<div class="row">
						  			<div class="col-12">
						  				<table class="tbl-3">
						  					<thead>
						  						<tr>
						  							<th colspan="8">Fund Purpose</th>
						  						</tr>
						  					</thead>
						  					<tbody>
						  						<tr>
						  							<td><input type="checkbox" name="" id=""></td>
						  							<td>Category One</td>
						  							<td><input type="checkbox" name="" id=""></td>
						  							<td>Category Two</td>
						  							<td><input type="checkbox" name="" id=""></td>
						  							<td>Category Three</td>
						  							<td><input type="checkbox" name="" id=""></td>
						  							<td>Category Four</td>
						  						</tr>
						  						<tr>
						  							<td><input type="checkbox" name="" id=""></td>
						  							<td>Category Five</td>
						  							<td><input type="checkbox" name="" id=""></td>
						  							<td>Category Six</td>
						  							<td><input type="checkbox" name="" id=""></td>
						  							<td>Category Seven</td>
						  							<td><input type="checkbox" name="" id=""></td>
						  							<td>Category Eight</td>
						  						</tr>
						  					</tbody>
						  				</table>
						  			</div>
					  			</div>
					  			<br>
						  		<div class="row">
						  			<div class="col-12">
						  				<button class="save-btn">Save & Print</button>
						  			</div>
						  		</div>
						  	</form>
						  </div>
						</div>
						<input class="tv-radio" id="tv-tab-2" name="tv-group" type="radio"/>
						<div class="tv-content">
						  <h3>Requisition Category</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-6">
								  		<input type="text" name="req_cat_name" id="" class="form-control" placeholder="Requisition Category Name">
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