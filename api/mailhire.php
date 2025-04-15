<?php
    //  var hrscompn = $('#hrscompname').val();
    //  var hrsurl = $('#hrscompurl').val();
    //  var hrsloc = $('#hrscomploc').val();
    //  var hrscompe = $('#hrscompemail').val();
    //  var hrsdes = $('#hrscompdes').val();
    //  var hrsexp = $('#hrscompexp').val();

    //  var hrscontn = $('#hrscontname').val();
    //  var hrscontp = $('#hrscontphone').val();
    //  var hrsconte = $('#hrscontemail').val();
    //  var hrsbtime = $('#hrsbesttime').val();

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $hrscompn = strip_tags(trim($_POST["hrscompname"]));
               $hrscompn = str_replace(array("\r","\n"),array(" "," "),$hrscompn);
        $hrsurl = trim($_POST["hrscompurl"]);
        $hrsloc = trim($_POST["hrscomploc"]);
        $hrscompe = trim($_POST["hrscompemail"]);       
        $hrsdes = trim($_POST["hrscompdes"]);
        $hrsexp = trim($_POST["hrscompexp"]);
        $hrscontn = trim($_POST["hrscontname"]);
        $hrscontp = trim($_POST["hrscontphone"]);
        $hrsconte = trim($_POST["hrscontemail"]);
        $hrsbtime = trim($_POST["hrsbesttime"]);

        // Check that data was sent to the mailer.
        if ( empty($hrscompn) OR empty($hrsurl) OR empty($hrsloc)OR empty($hrscompe) OR empty($hrsdes) OR empty($hrsexp)OR empty($hrscontn)OR empty($hrscontp)OR empty($hrsconte)OR empty($hrsbtime)) {
            // Set a 400 (bad request) response code and exit.
            // http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }
		
$subject = 'Hire Student Application';
$to = 'buffcreativecollege@gmail.com'; //Recipient's E-mail
//Recipient's E-mail
$from =  $_POST['hrscompname']; 
$fromName = $_POST['hrscompname']; 
$headers = '';
$headers .= "Reply-To: BCC<buffcreativecollege@gmail.com>\r\n"; 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= 'Cc: venkataraman.bcc@gmail.com' . "\r\n";
$headers .= 'Cc: shamalaveni.bcc@gmail.com' . "\r\n";


$message = "<table class='bordered' width='600' align='center'><tbody><tr>
				  <td align='center' height='50' style='background:#086AD8;'>
				  <h1 style='color:#fff'>Hire Student Application</h1></td></tr></tbody></table>
				  <table class='bordered' width='600' align='center'><tbody><tr align='center'>
				  <td bgcolor='#f9fafb' height='60'>Company Name</td><td align='center' bgcolor='#f9fafb' width='5'>:</td>
				  <td align='center' bgcolor='#f9fafb'>".$_POST['hrscompname']."</td></tr>
				  <tr align='center'><td bgcolor='#f9fafb' height='60'>Website URL</td>	<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['hrscompurl']."</td></tr>
				<tr align='center'><td bgcolor='#f9fafb' height='60'>Location</td>	<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['hrscomploc']."</td></tr>		
<tr align='center'><td bgcolor='#f9fafb' height='60'>Email</td><td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['hrscompemail']."</td></tr>				

<tr align='center'><td bgcolor='#f9fafb' height='60'>Designation</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['hrscompdes']."</td></tr>
				<tr align='center'><td bgcolor='#f9fafb' height='60'>Experience</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['hrscompexp']."</td></tr>	
                <tr align='center'><td bgcolor='#f9fafb' height='60'>Contact Name</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['hrscontname']."</td></tr>		
                <tr align='center'><td bgcolor='#f9fafb' height='60'>Contact Phone</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['hrscontphone']."</td></tr>
                <tr align='center'><td bgcolor='#f9fafb' height='60'>Contact Email</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['hrscontemail']."</td></tr>	
                <tr align='center'><td bgcolor='#f9fafb' height='60'>Best Time</td>
				<td align='center' bgcolor='#f9fafb'>:</td><td align='center' bgcolor='#f9fafb'>".$_POST['hrsbesttime']."</td></tr>			
				
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
