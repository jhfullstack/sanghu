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
						  <label class="tv-tab" for="tv-tab-1">Tab Nav 1</label>
						  <label class="tv-tab" for="tv-tab-2">Tab Nav 2</label>
						  <label class="tv-tab" for="tv-tab-3">Tab Nav 3</label>
						</div>
						<input class="tv-radio" id="tv-tab-1" name="tv-group" type="radio" checked="checked"/>
						<div class="tv-content">
						  <h1>Tab Nav 1</h1>
						  <p>These are some awesome tabs!</p>
						</div>
						<input class="tv-radio" id="tv-tab-2" name="tv-group" type="radio"/>
						<div class="tv-content">
						  <h1>Tab Nav 2</h1>
						  <p>Kind of verbose, here is the Jade source. Most JS libraries still ask for similar markup that's hardly any better, though.</p>
						</div>
						<input class="tv-radio" id="tv-tab-3" name="tv-group" type="radio"/>
						<div class="tv-content">
						  <h1>Tab Nav 3</h1>
						  <p> Hey there!</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="bottom-report">
					    <div class="tbl-action-btn">
					        <div class="left-btn">
					        	<input class="form-control" placeholder="Search by order#, name...">
					        </div>
					        <div class="right-btn">
					        	<span class="filter-icon">Filters <i class="fa fa-angle-down"></i></span> <i class="fa fa-ellipsis-h ms-3"></i>
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