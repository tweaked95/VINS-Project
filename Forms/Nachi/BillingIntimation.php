<!DOCTYPE html>
<html>
<head>
	<title>
		Billing Intimation
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
</head>

<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
				<h1>Billing Intimation</h1>
			</div>
		</div>
	</div>

	<form name="billing" class="form-horizontal">
		<div class="form-group">
			<div class="align-right">
				<label class="control-label col-md-10" for="no">No : </label>
				<div class="col-md-2">
					<input type="number" name="no" class="form-control" id="no">
				</div>
			</div>
		</div>
		<br>
		<div class="form-group">
			<label class="control-label col-md-1" for="ipdno">IPD No.:</label>
			<div class="col-md-1">
				<input type="number" class="form-control" name="ipdno" id="ipdno">
			</div>
		
			<label class="control-label col-md-2" for="doa">Date of Admission:</label>
			<div class="col-md-2">
				<input type="date" class="form-control" name="doa">
			</div>

			<label class="control-label col-md-1" for="consul-name">Consultant:</label>
			<div class="col-md-2">
				<input type="text" class="form-control" name="consul-name" id="consul-name">
			</div>

			<label class="control-label col-md-1" for="date">Date:</label>
			<div class="col-md-2">
				<input type="date" class="form-control" name="date" id="date">
			</div>
		</div>
		<br>
		<div class="form-group">
			<label class="control-label col-md-1" for="name">Name:</label>
			<div class="col-md-11">
				<input type="text" class="form-control" name="name" id="name">
			</div>
		</div>
		<br>
		<div class="form-group">
			<label class="control-label col-md-3" for="bill-amt">Interim Billing Amount Till Date:</label>
			<div class="col-md-9">
				<input type="number" class="form-control" name="bill-amt" id="bill-amt">
			</div>
		</div>
		<br>
		<div class="form-group">
			<label class="control-label col-md-2" for="deposit-received">Deposit Received:</label>
			<div class="col-md-10">
				<input type="number" class="form-control" name="deposit-received" id="deposit-received">
			</div>
		</div>
	</form>
	<form class="form-inline">
		<br>
		<div class="form-group">
			You are kindly requested to deposit the sum of Rs. <input type="text" class="col-mod-2 form-control" name="name" id="name"> at the Cashier desk latest by <input type="time" name="time-to-pay" class="form-control"> on <input type="date" name="date-to-pay" class="form-control">.
		</div>
	</form>
</div>
</html>	