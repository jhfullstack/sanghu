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
							<div class="col-2">
								<button class="save-btn w100">Mark as Confirmed</button>
							</div>
							<div class="col-2">
								<button class="save-btn w100">Mark as Cancelled</button>
							</div>
							<div class="col-5">
							</div>
							<div class="col-3">
								<select name="company_id" id="">
									<option>Select Company Name</option>
									<option value="1">Jamuna Multi Farming Co-operative Society</option>
									<option value="2">Sanghu Valley Cold Storage</option>
									<option value="3">Sanghu Farm & Agro Vet</option>
								</select>
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
				                    <th>Company Name</th>
				                    <th>Particulars</th>
				                    <th>Trx. Amount</th>
				                    <th>Trx. Method</th>
				                    <th>Trx. End Point</th>
				                    <th>Area (if any)</th>
				                    <th>Trx. By</th>
				                    <th>Central Cash Status</th>
				                    <th>Action</th>
				                </tr>
				            </thead>
				            <tbody>
				                <tr>
				                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
				                    <td>1</td>
				                    <td>25-Jan-22</td>
				                    <td>Jamuna Multi Farming</td>
				                    <td>MCL-1234567</td>
				                    <td>20,000.00</td>
				                    <td>Cheque</td>
				                    <td>Central Cash / FSIBL-1234</td>
				                    <td>Area-07</td>
				                    <td>Mr. XYZ</td>
				                    <td>Confirmed / Pending / Cancelled</td>
				                    <td><button class="save-btn">Ledger Posting</button></td>
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