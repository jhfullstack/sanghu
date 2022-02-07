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
						  <label class="tv-tab" for="tv-tab-1">Cattle</label>
						  <label class="tv-tab" for="tv-tab-2">Hatchery</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h3>Cattle</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
						  				<input type="text" class="form-control" placeholder="Type Batch ID">	
						  			</div>
						  			<div class="col-2">
						  				<button class="save-btn">Search</button>
						  			</div>
						  			<div class="col-3">
						  				<input type="text" class="form-control" placeholder="Type Item ID">	
						  			</div>
						  			<div class="col-2">
						  				<button class="save-btn">Search</button>
						  			</div>
						  		</div>
						  	</form>
						  </div>
						</div>
						<input class="tv-radio" id="tv-tab-2" name="tv-group" type="radio"/>
						<div class="tv-content">
						  <h3>Hatchery</h3>
						  <p><i>Fill up. *marks are mandatory field!</i></p>
						  <div class="entry-form">
						  	<form action="">
						  		<div class="row">
						  			<div class="col-3">
						  				<input type="text" class="form-control" placeholder="Type Batch ID">	
						  			</div>
						  			<div class="col-2">
						  				<button class="save-btn">Search</button>
						  			</div>
						  			<div class="col-3">
						  				<input type="text" class="form-control" placeholder="Type Item ID">	
						  			</div>
						  			<div class="col-2">
						  				<button class="save-btn">Search</button>
						  			</div>
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