<?php
//$to = "enquiry@businessmail.co.in";
$to = "enquiry@businessmail.co.in";
$subject = "Enquiry From website : www.businessmail.co.in";
$headers = "From:<enquiry@businessmail.co.in>\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\n";

$message = "<html><body>";
$message .= "<table width='400'>
  <tr>
    <td width='31'>&nbsp;</td>
    <td width='122'>Domain:</td>
    <td width='239'>".$_REQUEST['website']."</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Email:</td>
    <td>".$_REQUEST['email']."</td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td>Phone Number</td>
    <td>".$_REQUEST['phone']."</td>
  </tr>
  
   <tr>
    <td>&nbsp;</td>
    <td>Name:</td>
    <td>".$_REQUEST['name']."</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>Message</td>
    <td rowspan=''>".$_REQUEST['message']."</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>";

$message .= "</body></html>";

mail($to, $subject, $message, $headers);
if($mail)
{
?>
<script language="javascript">
alert("Thank You for signing up for free trial of Google for Workspace. Our Google Support Agent will call you shortly. Write to us at enquiry@ssi.bz, Whatsapp/Ph : +91 8800976977 for any further assistance. THANK YOU");
	document.location="index.php";
</script>

<?php
}
else
{
?>	
<script language="javascript">
alert("Thank You for signing up for free trial of Google for Workspace. Our Google Support Agent will call you shortly. Write to us at enquiry@ssi.bz, Whatsapp/Ph : +91 8800976977 for any further assistance. THANK YOU");
  document.location="index.php";
</script>
<?php }?>