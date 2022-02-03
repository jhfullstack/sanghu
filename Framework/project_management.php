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
						  <label class="tv-tab" for="tv-tab-1">Crate Project</label>
						  <label class="tv-tab" for="tv-tab-2">Project Costing</label>
						  <label class="tv-tab" for="tv-tab-3">Project Timeline</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Create Project</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="text" name="proj_id" id="" class="form-control" placeholder="Project ID">
								  		<input type="text" name="proj_title" id="" class="form-control" placeholder="Project Title">
								  		<textarea name="proj_desc" id="" cols="30" rows="10" placeholder="Project Description"></textarea>
								  	</div>
								  	<div class="col-3">
								  		<input type="text" name="proj_open_date" id="" class="form-control" placeholder="Project Open Date">
								  		<input type="text" name="proj_close_date" id="" class="form-control" placeholder="Project Close Date">
								  		<select name="proj_status" class="form-control" id="">
								  			<option>Project Status</option>
								  			<option value="1">Pending</option>
								  			<option value="2">Started</option>
								  			<option value="3">Running</option>
								  			<option value="3">Postponed</option>
								  			<option value="4">Accomplished</option>
								  			<option value="5">Cancelled</option>
								  		</select>
						  			</div>
								  	<div class="col-3">
								  		<label for="" class="control-label">Project Budgeting</label>
								  		<input type="text" name="proj_budget" id="" class="form-control" placeholder="Project Costing / Budget">
								  	</div>
						  		</div>
						  		<br>
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
						  <h3>Project Costing</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="proj_id" class="form-control" id="">
								  			<option>Select a Project</option>
								  			<option value="1">Project 1</option>
								  			<option value="2">Project 2</option>
								  			<option value="3">Project 3</option>
								  			<option value="3">Project 4</option>
								  			<option value="4">Project 5</option>
								  			<option value="5">Project 6</option>
								  		</select>
						  			</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-3">
								  		<input type="text" name="proj_budget" id="" class="form-control" placeholder="Project Budget">
						  			</div>
						  			<div class="col-3">
								  		<input type="text" name="proj_actual_costing" id="" class="form-control" placeholder="Actual Costing Till Today">
						  			</div>
						  			<div class="col-3">
								  		<input type="text" name="budget_used" id="" class="form-control" placeholder="Project Budget Used Percentage">
						  			</div>
						  			<div class="col-3">
								  		<input type="text" name="proj_accomplished_percent" id="" class="form-control" placeholder="Project Accomplished Percentage">
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
						  <h3>Project Timeline</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
								  		<select name="proj_id" class="form-control" id="">
								  			<option>Select a Project</option>
								  			<option value="1">Project 1</option>
								  			<option value="2">Project 2</option>
								  			<option value="3">Project 3</option>
								  			<option value="3">Project 4</option>
								  			<option value="4">Project 5</option>
								  			<option value="5">Project 6</option>
								  		</select>
						  			</div>
						  		</div>
						  		<br>
						  		<div class="row">
						  			<table class="tbl-2">
						  				<thead>
						  					<tr>
						  						<th width="50%">Task Title</th>
						  						<th>Task Costing</th>
						  						<th>Task Percentage</th>
						  						<th>Task Status</th>
						  					</tr>
						  				</thead>
						  				<tbody>
						  					<tr>
						  						<td>Task One</td>
						  						<td>5000.00</td>
						  						<td>20%</td>
						  						<td>Open / Close</td>
						  					</tr>
						  				</tbody>
						  			</table>
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