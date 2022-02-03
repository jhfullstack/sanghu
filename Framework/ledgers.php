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
						  <label class="tv-tab" for="tv-tab-1">Chart of Accounts</label>
						  <label class="tv-tab" for="tv-tab-2">Level 3 Accounts</label>
						  <label class="tv-tab" for="tv-tab-3">Level 2 Accounts</label>
						  <label class="tv-tab" for="tv-tab-4">Main Accounts</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Chart of Accounts</h3>
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
							  					Balance Sheet
							  				</div>
							  			</div>
							  			<div class="row">
							  				<div class="col-2">
							  					<input type="checkbox" name="" id="">
							  				</div>
							  				<div class="col-10">
							  					Income Statement
							  				</div>
							  			</div>
						  				<select name="l1_acc_id" class="form-control" id="">
								  			<option>Select Level 1 Account</option>
								  			<option value="1">Asset</option>
								  			<option value="2">Liabilities</option>
								  		</select>
						  				<select name="l2_acc_id" class="form-control" id="">
								  			<option>Select Level 2 Account</option>
								  			<option value="1">Current Asset</option>
								  			<option value="2">Current Liabilities</option>
								  		</select>
								  		<input type="text" name="coa_acc_head" id="" class="form-control" placeholder="Chart of Accounts Head">
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
						  <h3>Level 3 Accounts</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">								  		
								  		<input type="text" name="l3_acc_head" id="" class="form-control" placeholder="Level 3 Account Head">
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
						  <h3>Level 2 Accounts</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">								  		
								  		<input type="text" name="l2_acc_head" id="" class="form-control" placeholder="Level 2 Account Head">
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
						<input class="tv-radio" id="tv-tab-4" name="tv-group" type="radio"/>						
						<div class="tv-content">
						  <h3>Main Accounts</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">								  		
								  		<input type="text" name="l1_acc_head" id="" class="form-control" placeholder="Main Account Head">
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