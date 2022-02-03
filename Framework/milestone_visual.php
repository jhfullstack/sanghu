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
						  <label class="tv-tab" for="tv-tab-1">Milestone Visualization</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Select Milestone</h3>
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
						  			<div class="col-3">
								  		<select name="task_id" class="form-control" id="">
								  			<option>Select a Task</option>
								  			<option value="1">Task 1</option>
								  			<option value="2">Task 2</option>
								  			<option value="3">Task 3</option>
								  			<option value="3">Task 4</option>
								  			<option value="4">Task 5</option>
								  			<option value="5">Task 6</option>
								  		</select>
						  			</div>
						  			<div class="col-3">
								  		<select name="milestone_id" class="form-control" id="">
								  			<option>Select a Milestone</option>
								  			<option value="1">Milestone 1</option>
								  			<option value="2">Milestone 2</option>
								  			<option value="3">Milestone 3</option>
								  			<option value="3">Milestone 4</option>
								  			<option value="4">Milestone 5</option>
								  			<option value="5">Milestone 6</option>
								  		</select>
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
						Milestone Visual Data & Graphics
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>