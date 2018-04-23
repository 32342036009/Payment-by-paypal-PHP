<?php require_once('paydetails.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
		<div class="container">
<div class="col-sm-4">
	 <label class="col-form-label col-form-label-lg" for="inputLarge"><h4>Paypal Payment Gateway!..</h4></label>
	<form class="form-horizontal" role="form" id="paypalForm" method="post" action="<?php echo PAYPAL_URL; ?>">
		    
		    <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
		    <input type="hidden" name="cmd" value="_xclick">
		    <input type="hidden" name="credits" value="510">
		    <input type="hidden" name="userid" value="1">
		    <input type="hidden" name="cpp_header_image" value="">
		    <input type="hidden" name="no_shipping	" value="1">
		    <input type="hidden" name="handling" value="0">
		    <input type="hidden" name="cancel_return" value="http://localhost/mark/request.php?type=cancel">
		    <input type="hidden" name="return" value="http://localhost/mark/request.php?type=success">
			
			<div class="form-group">
			  <label class="col-form-label col-form-label-lg" for="inputLarge">Amount:</label>
			  <input class="form-control" type="text" placeholder="Amount" id="inputLarge">
			</div>

			<div class="form-group">
			  <label class="col-form-label col-form-label-lg" for="inputLarge">Quantity:</label>
			  <input class="form-control" type="text" placeholder="Quantity" id="inputLarge">
			</div>

			<div class="form-group">
			  <label class="col-form-label col-form-label-lg" for="inputLarge">Currency:</label>
			  <input class="form-control" type="text" placeholder="Currency" id="inputLarge">
			</div>

			<div class="form-group">
			  <label class="col-form-label col-form-label-lg" for="inputLarge">Description:</label>
			  <textarea class="form-control" type="text" placeholder="Description" id="inputLarge"></textarea>
			</div>
			<button type="submit" class="btn btn-info btn-block">Submit</button>

	</form>
</div>


</div>
</body>
</html>