<?php
//$to = "enquiry@ssi.bz";
$to = "enquiry@ssi.bz";
$subject = "Enquiry From website : Business Mail Solutions";
$headers = "From:<enquiry@ssi.bz\n";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=utf-8\r\n";
$message = "<html><body>";
$message .= "<table width='400'>
 
   
    <td width='122'>Name:".$_REQUEST['name']."</td>
  
  <tr>
    
    <td>Email</td> <td>".$_REQUEST['email']."</td>
  </tr>
  
  
  <tr>
   
    <td>Phone Number</td> <td>".$_REQUEST['phone']."</td>
  </tr>
  
  
  
  <tr>
  
    <td>Your Message </td> <td>".$_REQUEST['message']."</td>
  </tr>
  

 
</table>";

$message .= "</body></html>";

mail($to, $subject, $message, $headers);
if($mail)
{
?>
<script language="javascript">
alert("Thank you for inquiring with us.We will get back to you shortly!");
	document.location="index.php";
</script>

<?php
}
else
{
?>	
<script language="javascript">
alert("Thank you for inquiring with us.We will get back to you shortly!");
  document.location="index.php";
</script>
<?php }?>