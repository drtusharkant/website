<?php

if(isset($_POST['Send']))
{
	
	
	$target = "uploads/"; 
			$fileName = basename( $_FILES['uploaded_file']['name']) ;  
			$target = $target . basename( $_FILES['uploaded_file']['name']) ;			
			move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target);
				
			
$link  = 'http://demo.india-deals.com/demo/contact-form/uploads/'.$fileName;

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$message = $_POST['message'];


	        $to = 'docrahulsharma@gmail.com';/* Admin email id...*/			 
	        $subject = "Appointment";
			//$message = new Mail_mime(); 
			$message1 ="<body>";
	$message1 .="<div>
	<img src='http://www.india-deals.com/images/id5.jpg' style='width:200px;' >
	<p>	Enquiry from Indiadeals Online Solutions Pvt. Ltd. to Dr. Rahul Sharma.</p>";
    $message1 .="<table cellpadding='5' cellspacing='0' width='600px' border='1' bordercolor='#E3E3E3' style='border-collapse:collapse; font-family: Arial; font-size:11px;'>";
    $message1 .="<tr><td colspan='2' style='background-color:#E3E3E3; font-weight:bold'>Email received from ".$email."</td></tr>";
    $message1 .="<tr><td width='100px'><b>Full Name</b></td><td>".$name."</td></tr>";
    $message1 .="<tr><td><b>Phone No.</b></td><td>".$phone."</td></tr>";
    $message1 .="<tr><td><b>Email Address</b></td><td>".$email."</td></tr>";
	$message1 .="<tr><td><b>City</b></td><td>".$city."</td></tr>";
    $message1 .="<tr><td><b>Comment</b></td><td>".$message."</td></tr>";
	//$message .="<tr><td><b>Comment</b></td><td><img src='http://www.india-deals.com/upload_images/product_image/".$link."' style='width:200px'></td></tr>";
    $message1 .="<tr><td colspan='2'><a href='http://www.india-deals.com/'>Go To India Deals</a></td></tr>";
    $message1 .="</table>";
	$message1 .="<h4>Regards,<h4>
<h4>".$name."</h4>
<a href='http://www.india-deals.com'><img src='http://www.india-deals.com/images/indiadealslogo.png' style='width:200px;'></a>


</div>";
    $message1 .="</body>";
					
					 $from    = $name;					
					$headers  = "From: ".$from."\r\n";
                    $headers .= 'Bcc: sunilsharma2037@gmail.com' . "\r\n"; 
                	$headers .=  "Content-type: text/html; charset=iso-8859-1\r\n";
			    
			mail($to, $subject, $message1, $headers);
			?>
			<script>
           	alert("Your mail has been sent.");
			window.location.href = "thanks.html";
			 </script>
<?php                   
}


	?>
