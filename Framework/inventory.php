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
				                    <th>Particulars</th>
				                    <th>Transaction Amount</th>
				                    <th>Transaction Method</th>
				                    <th>Transaction End Point</th>
				                    <th>Area Code</th>
				                    <th>Collected By</th>
				                    <th>Central Cash Status</th>
				                    <th>Action</th>
				                </tr>
				            </thead>
				            <tbody>
				                <tr>
				                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
				                    <td>1</td>
				                    <td>25-Jan-22</td>
				                    <td>MCL-1234567</td>
				                    <td>20,000.00</td>
				                    <td>Cheque</td>
				                    <td>Central Cash / FSIBL-1234</td>
				                    <td>Area-07</td>
				                    <td>Mr. XYZ</td>
				                    <td>Received / Not Received</td>
				                    <td><button class="save-btn">Update Status</button></td>
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