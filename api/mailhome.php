<?php
    
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["hname"]));
                $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $mobile = trim($_POST["hmobile"]);
        $stcenter = trim($_POST["stcenter"]);
        $course = trim($_POST["hcourse"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($mobile) OR empty($stcenter) OR empty($course)) {
            // Set a 400 (bad request) response code and exit.
            // http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }
      
		
		
		
		$subject = 'BCC Website Enquiry';
    //    $to = 'sindhuja.bcc@gmail.com';
    $to = 'enquiry@buffcreativecollege.com';
    //  $headers .= 'Cc:buffcreativecollege@gmail.com';
 //Recipient's E-mail  
 //$to = 'shamalaveni.bcc@gmail.com'; 
$from =  $_POST['hname']; 
$fromName = $_POST['hname']; 
$headers = '';
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
// $headers .= 'Cc: karthik7wininfo@gmail.com' . "\r\n";
// $headers .= 'Cc: shamalaveni.bcc@gmail.com' . "\r\n";


$message = "<table class='bordered' width='600' align='center'><tbody><tr>
				  <td align='center' height='50' style='background:#086AD8;'>
				  <h1 style='color:#fff'>BCC Website Enquiry</h1></td></tr></tbody></table>
				  <table class='bordered' width='600' align='center'><tbody><tr align='center'>
				  <td bgcolor='#f9fafb' height='60'>Name</td><td align='center' bgcolor='#f9fafb' width='5'>:</td>
				  <td align='center' bgcolor='#f9fafb'>".$_POST['hname']."</td>
				  </tr>			   
				<tr align='center'><td bgcolor='#f9fafb' height='60'>Mobile No.</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['hmobile']."</td></tr>	
                
                <tr align='center'><td bgcolor='#f9fafb' height='60'>Preferred Branch</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stcenter']."</td></tr>
                
                <tr align='center'><td bgcolor='#f9fafb' height='60'>Preferred Course</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['hcourse']."</td></tr>
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
