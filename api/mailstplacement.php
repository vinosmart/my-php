<?php    
    // Only process POST reqeusts.
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the form fields and remove whitespace.
            // $name = strip_tags(trim($_POST["cvname"]));
            // $name = str_replace(array("\r","\n"),array(" "," "),$name);
            // $mobile = trim($_POST["cvphone"]);
            // $email = trim($_POST["cvemail"]);




 // Get the form fields and remove whitespace.
 $plname = strip_tags(trim($_POST["stp_name"]));
 $plname = str_replace(array("\r","\n"),array(" "," "),$name);
$plphone = trim($_POST["stp_phone"]);
$plemail = trim($_POST["stp_email"]);
// $city = trim($_POST["city"]);
$subject = trim($_POST["stp_course"]);
$nstcenter = trim($_POST["stp_study"]);
$commentcontent = trim($_POST["stp_message"]);   
// $attachment=$_FILES["attach_file"]["tmp_name"];
// Check that data was sent to the mailer.
if ( empty($plname) OR empty($plphone) OR empty($plemail)OR empty($subject) OR empty($nstcenter) OR empty($commentcontent)) {
// Set a 400 (bad request) response code and exit.
// http_response_code(400);
echo "Oops! There was a problem with your submission. Please complete the form and try again.";
exit;
}









            // // Check that data was sent to the mailer.
            // if ( empty($name) OR empty($mobile) OR empty($email)) {
            //     // Set a 400 (bad request) response code and exit.
            //     // http_response_code(400);
            //     echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            //     exit;
            // }
                
            $subject = 'BCC Website Enquiry';
           // $to = 'buffcreativecollege@gmail.com'; //Recipient's E-mail  
           $to = 'shamalaveni.bcc@gmail.com'; 
            $from =  $_POST['stp_name']; 
            $fromName = $_POST['stp_name']; 
            $headers = ''; 
            // $headers .= 'Cc: karthik7wininfo@gmail.com' . "\r\n";
                   
            //$headers .= 'Cc: venkataraman.bcc@gmail.com' . "\r\n";
           $headers .= 'Cc: shamalaveni.bcc@gmail.com' . "\r\n";

            $message = "<table class='bordered' width='600' align='center'><tbody><tr>
                            <td align='center' height='50' style='background:#086AD8;'>
                            <h1 style='color:#fff'>BCC Website Student Placement Enquiry</h1></td></tr></tbody></table>
                            <table class='bordered' width='600' align='center'><tbody><tr align='center'>
                            <td bgcolor='#f9fafb' height='60'>Name</td><td align='center' bgcolor='#f9fafb' width='5'>:</td>
                            <td align='center' bgcolor='#f9fafb'>".$_POST['stp_name']."</td>
                            </tr>			   
                            <tr align='center'><td bgcolor='#f9fafb' height='60'>Mobile No.</td>
                            <td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_phone']."</td></tr>	
                            
                            <tr align='center'><td bgcolor='#f9fafb' height='60'>Course</td>
                            <td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_course']."</td></tr>

                            <tr align='center'><td bgcolor='#f9fafb' height='60'>Study Center</td>
                            <td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_study']."</td></tr>

                            <tr align='center'><td bgcolor='#f9fafb' height='60'>Course</td>
                            <td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_course']."</td></tr>

                            <tr align='center'><td bgcolor='#f9fafb' height='60'>Comments</td>
                            <td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['stp_message']."</td></tr>
                            </tbody></table>";
            
            $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
            $headers = "MIME-Version: 1.0" . "\r\n"; 
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $file = $_FILES['attachment'];
            $boundary = md5("random"); 

            $tmp_name = $_FILES['attachment']['tmp_name']; 
            $name     = $_FILES['attachment']['name']; 
            $size     = $_FILES['attachment']['size'];
            $type     = $_FILES['attachment']['type']; 
            $error     = $_FILES['attachment']['error'];     
            //validate form field for attaching the file
            if($error > 0)
            {
                die('Upload error or No files uploaded');
            }

            //read from the uploaded file & base64_encode content
            $handle = fopen($tmp_name, "r"); 
            $content = fread($handle, $size); 
            fclose($handle); 

            $encoded_content = chunk_split(base64_encode($content));
            $boundary = md5("random"); 

            //header
            $headers = "MIME-Version: 1.0\r\n"; 
            $headers .= "From:".$from."\r\n"; 
            $headers .= "Content-Type: multipart/mixed;"; 
            $headers .= "boundary = $boundary\r\n"; 

            //mail content
            $body = "--$boundary\r\n";
            $body .= "Content-type:text/html;charset=UTF-8\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
            $body .= chunk_split(base64_encode($message));
                    
            //attachment
            $body .= "--$boundary\r\n";
            $body .="Content-Type: $type; name=".$name."\r\n";
            $body .="Content-Disposition: attachment; filename=".$name."\r\n";
            $body .="Content-Transfer-Encoding: base64\r\n";
            $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
            $body .= $encoded_content;        
        
            if(mail($to, $subject, $body, $headers))      
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
