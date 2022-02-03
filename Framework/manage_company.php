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
						  <label class="tv-tab" for="tv-tab-1">Create Company</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Basic Data</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="corporate_id" class="form-control" id="">
								  			<option value="1" selected="selected">Sanghu Group</option>
								  		</select>
								  		<input type="text" name="comp_name" id="" class="form-control" placeholder="Company Name">
								  		<input type="text" name="address" id="" class="form-control" placeholder="Company Address">
								  		<input type="text" name="license_no" id="" class="form-control" placeholder="License No">
								  		<input type="text" name="details1" id="" class="form-control" placeholder="Details 1">
								  		<input type="text" name="details2" id="" class="form-control" placeholder="Details 2">
								  		<input type="text" name="details3" id="" class="form-control" placeholder="Details 3">
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