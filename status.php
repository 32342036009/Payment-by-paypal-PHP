<?php

global $wpdb;
    $amt =  $_GET['amt'];
    $cc =  $_GET['cc'];
    $st =  $_GET['st'];
    $tx =  $_GET['tx'];
    $type = $_GET['type']; 
    $ids= $_GET['id'];
    $results = $wpdb->get_results( "SELECT filed1,filed2 FROM tablename where id=$ids");
    $memberName = $results[0]->first_name;
		$userEmail = $results[0]->home_email;
	 $annual_amount = $results[0]->annual_membership_amount;
if($type == 'success') {
    $success =  $wpdb->insert('tablename', array(
                                                    'type' => $type,
                                                    'amt' => $amt,
                                                    'cc' =>   $cc,
                                                    'st'=>    $st,
                                                    'tx'=>    $tx
));
 $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'From: Admin <info@webdevelopers1.com>' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
$Feedback = "Thanks<br> Thanks";
  $message = "Hello Dear you have subscribed for  membership Plan and made the Payment Successfully . Please find the details of the member below or check your paypal account for the information.";
    $to = '8393yogeshkumar@gmail.com';
    $subject = 'Request';
    $html_mailer = "<p>$message</p>
      <table border='1' cellpadding='3'>
          <tbody>
            <tr><td><strong> Member Name: </strong></td><td>$memberName</td></tr>
      			<tr><td><strong>Membership Name:</strong></td><td>$ms_name</td></tr>
      			<tr><td><strong>Membership Amount:</strong></td><td>$amt</td></tr>
      			<tr><td><strong>Payment status:</strong></td><td>$st</td></tr>
      			<tr><td><strong>Paypal Txn number:</strong></td><td>$tx</td></tr>
	       	</tbody>
      </table>$Feedback";
$sent = mail( $to, $subject, $html_mailer,$headers); 
  if($sent){   ?>
   <div class="paymetok">
   <h5>Payment Successfully completed!....</h5>
       <?php echo "$message<br>
                <table border='1' cellpadding='3'>
                    <tbody>
                          <tr><td><strong> Member Name: </strong></td><td>$memberName</td></tr>
                    			<tr><td><strong>Membership Name:</strong></td><td>$ms_name</td></tr>
                    			<tr><td><strong>Membership Amount:</strong></td><td>$amt</td></tr>
                    			<tr><td><strong>Payment status:</strong></td><td>$st</td></tr>
                    			<tr><td><strong>Paypal Txn number:</strong></td><td>$tx</td></tr>
              	   	</tbody>
                </table>               
               $Feedback"; ?>                   
   </div>
   <?php $status = true; }
  if($status==true){
       $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'From: Admin <info@webdevelopers1.com>' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $message = "Hello<br><b>$memberName</b> You have been Successfully subscribed to this membership please find the details of your Payment below:";


$thanks= "Please contact to the administrator if you have any question related to membership and transaction or shoot an email to info@hyderabadassociation.com we would love to hear from you.";
  $to = $userEmail;
  $subject = 'Request';
    $html_mailer = "<p>$message</p><table border='1' cellpadding='3'>
	    <tbody>
		<tr><td><strong> Member Name: </strong></td><td>$memberName</td></tr>
			<tr><td><strong>Membership Name:</strong></td><td>$ms_name</td></tr>
			<tr><td><strong>Membership Amount:</strong></td><td>$amt</td></tr>
			<tr><td><strong>Payment status:</strong></td><td>$st</td></tr>
			<tr><td><strong>Paypal Txn number:</strong></td><td>$tx</td></tr>
		</tbody></table>$thanks<br> $Feedback";
		$sent = mail( $to, $subject, $html_mailer,$headers); 
              if($sent){
              //echo "Payment Successfully completed!...."; 
                $status = true;
                
              }
        }
    }
else if($type == 'cancle') {
 ?>

 <div class="paycancle">
 <aside>&#10007;</aside>
 <h5>Payment Canceled...</h5>
 <?php echo $html_mailer = "<p>$message</p><table border='1' cellpadding='3'>
	    <tbody>
          		<tr><td><strong> Member Name: </strong></td><td>$memberName</td></tr>
          			<tr><td><strong>Membership Name:</strong></td><td>$ms_name</td></tr>
          			<tr><td><strong>Membership Amount:</strong></td><td>$amt</td></tr>
          			<tr><td><strong>Payment status:</strong></td><td>$st</td></tr>
          			<tr><td><strong>Paypal Txn number:</strong></td><td>$tx</td></tr>
    </tbody></table>$thanks<br> $Feedback"; ?>
 </div>
<?php
}
?>