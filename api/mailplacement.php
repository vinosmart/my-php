<?php
   
 
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

       
        // Get the form fields and remove whitespace.
        $plname = strip_tags(trim($_POST["stp_name"]));
                $plname = str_replace(array("\r","\n"),array(" "," "),$plname);
        $plphone = trim($_POST["stp_phone"]);
		$plemail = trim($_POST["stp_email"]);
        $plsrn = trim($_POST["stp_srn"]);
		$plcnum = trim($_POST["stp_cnum"]);
        $plinkedin= trim($_POST["stp_linkedin_link"]);
        $plbelink = trim($_POST["stp_belink"]);
		$pldate = trim($_POST["stp_date"]);
        $plcourse = trim($_POST["stp_course"]);
		$plstudy = trim($_POST["stp_study"]);
        $plmsg = trim($_POST["stp_message"]);   

        // $attachment=$_FILES["attach_file"]["tmp_name"];
        // Check that data was sent to the mailer.
        if (empty($plname) OR empty($plphone) OR empty($plemail)OR empty($plsrn) OR empty($plcnum) OR empty($plinkedin)OR empty($plbelink) OR empty($pldate)OR empty($plcourse) OR empty($plstudy) OR empty($plmsg)) {
        //     // Set a 400 (bad request) response code and exit.
        //     // http_response_code(400);
           echo "Oops! There was a problem with your submission. Please complete the form and try again.";
           exit;
        }
		
        $message = "<table class='bordered' width='600' align='center'><tbody><tr>
				  <td align='center' height='50' style='background:#086AD8;'>
				  <h1 style='color:#fff'>BCC Student Career Placement Support</h1></td></tr></tbody></table>
				  <table class='bordered' width='600' align='center'><tbody><tr align='center'>
				  <td bgcolor='#f9fafb' height='60'>Name</td><td align='center' bgcolor='#f9fafb' width='5'>:</td>
				  <td align='center' bgcolor='#f9fafb'>".$_POST['stp_name']."</td>
				  </tr>	
				  <tr align='center'><td bgcolor='#f9fafb' height='60'>Mobile No.</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_phone']."</td></tr>						
				<tr align='center'><td bgcolor='#f9fafb' height='60'>Email.</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_email']."</td></tr>		
<tr align='center'><td bgcolor='#f9fafb' height='60'>Student Roll Number</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_srn']."</td></tr>				
<tr align='center'><td bgcolor='#f9fafb' height='60'>Certificate Number</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_cnum']."</td></tr>				

				<tr align='center'><td bgcolor='#f9fafb' height='60'>Linked in Link</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_linkedin_link']."</td></tr>

                <tr align='center'><td bgcolor='#f9fafb' height='60'>Behance Link</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_belink']."</td></tr>						
				<tr align='center'><td bgcolor='#f9fafb' height='60'>Course Completed On</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_date']."</td></tr>		
<tr align='center'><td bgcolor='#f9fafb' height='60'>Course</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_course']."</td></tr>				
<tr align='center'><td bgcolor='#f9fafb' height='60'>Study Center</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_study']."</td></tr>				

				<tr align='center'><td bgcolor='#f9fafb' height='60'>Messages.</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_message']."</td></tr>
				
				</tbody></table>";
                
$subject = 'Student Career Placement Support';
//$to = 'buffcreativecollege@gmail.com'; //Recipient's E-mail
 $to = 'shamalaveni.bcc@gmail.com'; //Recipient's E-mail
$from =  $_POST['stp_name']; 
$fromName = $_POST['stp_name']; 
$headers = '';
$headers .= "Reply-To: BCC<buffcreativecollege@gmail.com>\r\n"; 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
//$headers .= 'Cc: karthik7wininfo@gmail.com' . "\r\n";

// $send_mail->AddAttachment($attachment);
 // Set up attachments
 $attachments = array();
 for ($i = 1; $i <= 5; $i++) {
     if (isset($_FILES["attachment$i"]) && $_FILES["attachment$i"]["error"] == UPLOAD_ERR_OK) {
         $attachments[] = array(
             "name" => $_FILES["attachment$i"]["name"],
             "tmp_name" => $_FILES["attachment$i"]["tmp_name"]
         );
        
     }
    
 }
 
 // Add attachments to email message
 foreach ($attachments as $attachment) {
     $file = $attachment["tmp_name"];
     $filename = $attachment["name"];
     $file_type = $_FILES["attachment"]["type"];
     $file_size = $_FILES["attachment"]["size"];
     
     if ($file && $filename && $file_type && $file_size) {
         $file_content = file_get_contents($file);
         $file_content = chunk_split(base64_encode($file_content));
         $boundary = md5(time());
         
         // Add attachment to message
         $message .= "--$boundary\n";
         $message .= "Content-Type: $file_type; name=\"$filename\"\n";
         $message .= "Content-Transfer-Encoding: base64\n";
         $message .= "Content-Disposition: attachment; filename=\"$filename\"\n\n";
         $message .= "$file_content\n";
     }
 }

		
                
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
