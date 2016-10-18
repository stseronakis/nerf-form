<?php

	if(isset($_POST['submit'])) {

		if(strlen($_POST['requestDate']) > 1) {
			$requestDate = $_POST['requestDate'];
			// echo $requestDate;
		}
		if(strlen($_POST['firstName']) > 1){
			$firstName = $_POST['firstName'];
			echo $firstName;
		}
		if(strlen($_POST['lastName']) > 1){
			$lastName = $_POST['lastName'];
			echo $lastName;
		}

	}//closes if(), keep this at the end.

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>N.E.R.F</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12 title">
					<h1>New Employee Request Form</h1>
				</div>
			</div>
			<div>
			</div>
			<section class="form">
				<form method="post" action="index.php">
					<div class="container">
						<!-- Request Date Section............................................... -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Request Date</label>
									<div class='form-group date' id='datetimepicker1'>
										<input type='date' class="form-control" name="requestDate"/>
<!-- 										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span> -->
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Approved By</label>
									<div class='form-group date' id='datetimepicker1'>
										<input type='text' placeholder="Full Name" class="form-control" name="approvedBy"/>
<!-- 										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span> -->
									</div>
								</div>
							</div>
						</div>
						<!-- Employee Details Section......................................... -->
						<div class="row">
							<div class="col-md-12">
								<h2>Employee Details</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Employee First Name</label>
									<input type="text" class="form-control" name="firstName">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Employee Last Name</label>
									<input type="text" class="form-control" name="lastName">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Job Title</label>
									<input type="text" class="form-control" name="JobTitle">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Department</label>
									<input type="text" class="form-control" name="Department">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Reports To</label>
									<input type="text" class="form-control" name="reportsTo">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="sel1">Employment Type:</label>
									<select class="form-control" id="sel1" name="employmentType">
										<option>Full Time, Permanent</option>
										<option>Part Time, Permanent</option>
										<option>Full Time, Temporary</option>
										<option>Part Time, Temporary</option>
										<option>Contract</option>
										<option>Intern</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Employee Start Date</label>
									<div class='form-group date' id='datetimepicker1'>
										<input type='date' class="form-control" name="startDate" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Employee End Date</label>
									<div class='form-group date' id='datetimepicker1'>
										<input type='date' class="form-control" name="endDate" />
									</div>
								</div>
							</div>
						</div>
						<!-- IT SECTION............................................................-->
						
						<div class="row">
							<div class="col-md-12 title">
								<h2>Information Technology</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="sel1">Computer Requirments:</label>
									<select class="form-control" id="sel1" name="computerRequirments">
										<option>No</option>
										<option>Yes (New)</option>
										<option>Yes (Existing Computer)</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="sel1">Computer Type</label>
									<select class="form-control" id="sel1" name="computerType">
										<option>Desktop</option>
										<option>Laptop</option>
										<option>Tablet</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="sel1">Computer Make</label>
									<select class="form-control" id="sel1" name="computerMake">
										<option>PC</option>
										<option>MAC</option>
										<option>LINUX</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>If you selected "Yes (Existing Computer)" above, please specify it's current location</label>
									<input type="text" class="form-control" placeholder="eg.. in Radio next to Johnny Utah's office" name="ComputerLocation">
								</div>
							</div>
						</div>s
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sel1">Phone Required</label>
									<select class="form-control" id="sel1" name="phoneRequired">
										<option>Employee requires phone</option>
										<option>Employee dosn't require a phone</option>
										<option>Employee using personal mobile device</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Phone Number</label>
									<input type="text" class="form-control bfh-phone" value="+1 (416) 666-6666" data-format="+1 (ddd) ddd-dddd" name="phoneNumber">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Extention</label>
									<input type="text" class="form-control"  name="extension" bfh-phone" data-format="dddd" placeholder="1234">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-4">
									<label>Email Distribution Groups</label>
									<input type="text" class="form-control" name="emailGroup" placeholder="e.g. distruction groups">
								</div>
								<div class="col-md-4">
									<label>Share Access</label>
									<input type="text" class="form-control" name="shareAccess" placeholder="e.g. Minerva">
								</div>
								<div class="col-md-4">
									<label>Requested Email Address</label>
									<input type="text" class="form-control" name="emailAddress" placeholder="e.g. ralamor@zoomermedia.ca">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label>Applications Required</label>
									<input type="text" class="form-control" name="applications" placeholder="e.g. Excel, MySQL, MySQL Server, Visio">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6">
									<label for="sel1">Website Content Management Access Required</label>
									<select class="form-control" id="sel1" name="webAccess">
										<option>No</option>
										<option>Yes I need upload/edit content</option>
										<option>Yes I need add/change/edit code</option>
									</select>
								</div>
								<div class="col-md-3">
									<label for="sel1">Role</label>
									<select class="form-control" id="sel1" name="webRole">
										<option>Developer</option>
										<option>Writter</option>
										<option>Designer</option>
										<option>Other</option>
									</select>
								</div>
								<div class="col-md-3">
									<label for="sel1">Access required to following sites</label>
									<textarea class="form-control" rows="1" id="comment" name="websites"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<div class="form-group">
										<label for="comment">Comments/Special Request</label>
										<textarea class="form-control" rows="5" id="comment" name="itComments"></textarea>
									</div>
								</div>
							</div>
						</div>
						<!-- Facilities Section..........................................................-->
						<div class="row">
							<div class="col-md-12 title">
								<h2>Facilities</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="sel1">Building</label>
									<select class="form-control" id="sel1" name="workLocation">
										<option>30 Jefferson Ave, Toronto</option>
										<option>64 Jefferson Ave, Toronto</option>
										<option>70 Jefferson Ave, Toronto</option>
										<option>171 East Liberty St,Toronto</option>
										<option>192nd st, Surrey</option>
									</select>
								</div>
							</div>
							<div class="col-md-9">
								<div class="form-group">
									<label>Desk Locations</label>
									<input type="text" class="form-control" name="deskLocation" placeholder="e.g. Desk next to Bill Murrays Office" name="desklocation">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="sel1">Parking Required</label>
									<select class="form-control" id="sel1" name="parkingRequired">
										<option>No</option>
										<option>Yes</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Vehicle Make</label>
									<input type="text" name="vehicleMake" placeholder="Ford" class="form-control">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Vehicle Model</label>
									<input type="text" name="vehicleModel" class="form-control" placeholder="F150">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Plate Number</label>
									<input type="text" name="Plate Number" class="form-control" placeholder="ZBMC 437">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<div class="form-group">
										<label for="comment">Comments/Special Requests</label>
										<textarea class="form-control" rows="5" id="comment" name="itComments"></textarea>
									</div>
								</div>
							</div>
						</div>
						<!-- Security Section....................................................... -->
						<div class="row">
							<div class="col-md-12 title">
								<h2>Security</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="sel1">Card Required</label>
									<select class="form-control" id="sel1" name="cardRequired">
										<option>No</option>
										<option>Yes</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="sel1">Training Required</label>
									<select class="form-control" id="sel1" name="trainingRequired">
										<option>No</option>
										<option>Yes</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="sel1">70 Jefferson</label>
									<select class="form-control" id="sel1" name="70JeffersonAccess">
										<option>No Access</option>
										<option>Day Access</option>
										<option>Full Access</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sel1">64 Jefferson</label>
									<select class="form-control" id="sel1" name="64JeffersonAccess">
										<option>No Access</option>
										<option>Day Access</option>
										<option>Full Access</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="sel1">30 Jefferson</label>
									<select class="form-control" id="sel1" name="30JeffersonAccess">
										<option>No Access</option>
										<option>Day Access</option>
										<option>Full Access</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" rows="4" id="comment" name="securityComments"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-4">
									<div class="form-group">
										<input type="submit" class="btn btn-default btn-large" name="submit">
									</div>
								</div>
							</div>
					</div>
				</form>
			</div>
		</section>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- <script src="js/jquery-ui.js"> -->
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
		<script src="js/bootstrap.min.js"></script>
<!-- 		<script type="text/javascript">
		$=jQuery;
		$(function () {
		$('#datetimepicker1').datetimepicker();
		});
		</script> -->
	</body>
</html>