<?php
if(isset($_POST['email'])) {
  $email_to = "web@skynetiks.com";
  $email_subject = "Business Mail Solutions";

  function died($error) {
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error."<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    die();
  }

  if (!isset($_POST['website']) ||
    !isset($_POST['email']) ||
    !isset($_POST['phone']) ||
    !isset($_POST['name']) ||
    !isset($_POST['message'])) {
    died('We are sorry, but there appears to be a problem with the form you submitted.');       
  }

  $domain = $_POST['website'];
  $email_from = $_POST['email'];
  $telephone = $_POST['phone'];
  $name = $_POST['name'];
  $comments = $_POST['message'];

  $error_message = "";
  if(strlen($error_message) > 0) {
    died($error_message);
  }
  $email_message = "Form details below.\n\n";

  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }

  $email_message .= "Domain: ".clean_string($website)."\n";
  $email_message .= "Email: ".clean_string($email_from)."\n";
  $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Name: ".clean_string($name)."\n";
  $email_message .= "Message: ".clean_string($message)."\n";

  $headers = 'From: '.$email_from."\r\n" .
             'Reply-To: '.$email_from."\r\n" .
             'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);  
?>

Thank you for contacting us. We will be in touch with you soon. You will now be redirected back to Business Mail.
<META http-equiv="refresh" content="2;URL=https://businessmail.co.in/index.php">

<?php
}
die();
?>