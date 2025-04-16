<?php
    
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
                $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $mobile = trim($_POST["mobile"]);
       

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($mobile)) {
            // Set a 400 (bad request) response code and exit.
            // http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }      		
		
		$subject = 'BCC Website Enquiry';
//$to = 'buffcreativecollege@gmail.com'; //Recipient's E-mail   
//$to = 'shamalaveni.bcc@gmail.com';
$to = 'sindhuja.bcc@gmail.com';
$headers .= 'Cc:buffcreativecollege@gmail.com';
$from =  $_POST['name']; 
$fromName = $_POST['name']; 
$headers = '';
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
// $headers .= 'Cc: karthik7wininfo@gmail.com' . "\r\n";
//$headers .= 'Cc: shamalaveni.bcc@gmail.com' . "\r\n";


$message = "<table class='bordered' width='600' align='center'><tbody><tr>
				  <td align='center' height='50' style='background:#086AD8;'>
				  <h1 style='color:#fff'>BCC Website Download Broucher Enquiry</h1></td></tr></tbody></table>
				  <table class='bordered' width='600' align='center'><tbody><tr align='center'>
				  <td bgcolor='#f9fafb' height='60'>Name</td><td align='center' bgcolor='#f9fafb' width='5'>:</td>
				  <td align='center' bgcolor='#f9fafb'>".$_POST['name']."</td>
				  </tr>			   
				<tr align='center'><td bgcolor='#f9fafb' height='60'>Mobile No.</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['mobile']."</td></tr>	                
                
				</tbody></table>";
		
		
if (@mail($to, $subject, $message, $headers))
{
    // Transfer the value 'sent' to ajax function for showing success message.
    echo 'sent';
}
else
{
    // Transfer the value 'failed' to ajax function for showing error message.
    echo 'failed';
}


    } 
?>
