<?php
    
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["cname"]));
                $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $phone = trim($_POST["cphone"]);
		$email = trim($_POST["cemail"]);
        // $city = trim($_POST["city"]);
        $subject = trim($_POST["csubject"]);
        $nstcenter = trim($_POST["cstcenter"]);
        $commentcontent = trim($_POST["ccommentcontent"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($phone) OR empty($email)OR empty($subject) OR empty($nstcenter) OR empty($commentcontent)) {
            // Set a 400 (bad request) response code and exit.
            // http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }
		
$subject = 'BCC Website Enquiry Application';
//$to = 'buffcreativecollege@gmail.com'; //Recipient's E-mail
 $to = 'enquiry@buffcreativecollege.com'; //Recipient's E-mail
$from =  $_POST['name']; 
$fromName = $_POST['name']; 
$headers = '';
$headers .= "Reply-To: BCC<buffcreativecollege@gmail.com>\r\n"; 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
//$headers .= 'Cc: karthik7wininfo@gmail.com' . "\r\n";


$message = "<table class='bordered' width='600' align='center'><tbody><tr>
				  <td align='center' height='50' style='background:#086AD8;'>
				  <h1 style='color:#fff'>BCC Website Enquiry Application</h1></td></tr></tbody></table>
				  <table class='bordered' width='600' align='center'><tbody><tr align='center'>
				  <td bgcolor='#f9fafb' height='60'>Name</td><td align='center' bgcolor='#f9fafb' width='5'>:</td>
				  <td align='center' bgcolor='#f9fafb'>".$_POST['cname']."</td>
				  </tr>			   
				  
				  <tr align='center'><td bgcolor='#f9fafb' height='60'>Mobile No.</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['cphone']."</td></tr>				
				
				
				<tr align='center'><td bgcolor='#f9fafb' height='60'>Email.</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['cemail']."</td></tr>		

<tr align='center'><td bgcolor='#f9fafb' height='60'>Course</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['csubject']."</td></tr>				


<tr align='center'><td bgcolor='#f9fafb' height='60'>Study Center</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['cstcenter']."</td></tr>				
				
				
				<tr align='center'><td bgcolor='#f9fafb' height='60'>Messages.</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['ccommentcontent']."</td></tr>				
				
				
				
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
