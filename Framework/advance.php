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
						  <label class="tv-tab" for="tv-tab-1">Employee Advance / Loan</label>
						  <label class="tv-tab" for="tv-tab-2">Loan Deduction Installment</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Employee Advance / Loan</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="employee_id" class="form-control" id="">
								  			<option>Select Employee</option>
								  			<option value="1">XYZ</option>
								  			<option value="2">MNO</option>
								  			<option value="3">ABC</option>
								  		</select>
								  		<input type="text" name="loan_amount" id="" class="form-control" placeholder="Loan Amount">
								  		<input type="text" name="deduction_month" id="" class="form-control" placeholder="Deduction Month">
								  		<textarea name="loan_deduction_desc" id="" cols="30" rows="10" class="form-control" placeholder="Loan Deduction Description"></textarea>
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
						  <h3>Loan Deduction Installment</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="loan_id" class="form-control" id="">
								  			<option>Select Loan ID</option>
								  			<option value="1">2143242</option>
								  			<option value="2">4343545</option>
								  			<option value="3">AB45466</option>
								  		</select>
								  		<input type="text" name="loan_amount" id="" class="form-control" placeholder="Loan Amount">
								  		<select name="deduction_type" class="form-control" id="">
								  			<option>Loan Deduction Type</option>
								  			<option value="1">One Time Amount</option>
								  			<option value="2">Auto Installment Amount</option>
								  			<option value="3">Manual Installment Amount</option>
								  		</select>
								  		<input type="text" name="installment_no" id="" class="form-control" placeholder="Loan Installment No">
								  		<label for="">Deduction Process <button class="save-btn">Generate</button></label><br><br>
								  	</div>
								  	<div class="col-2">
								  		<input type="number" name="installment1" id="" class="form-control">
								  		<input type="number" name="installment2" id="" class="form-control">
								  		<input type="number" name="installment3" id="" class="form-control">
								  	</div>
								  	<div class="col-2">
								  		<input type="date" name="ins1_date" id="" class="form-control">
								  		<input type="date" name="ins2_date" id="" class="form-control">
								  		<input type="date" name="ins3_date" id="" class="form-control">
								  	</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-3"></div>
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