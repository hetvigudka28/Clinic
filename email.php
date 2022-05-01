<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["fullName"]==""||$_POST["email"]==""||$_POST["query"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = "Query"+$_POST["fullName"];
$message = $_POST['query'];
$headers = 'From:'.$email  . "rn"; // Sender's Email
$headers .= 'Cc:'. $email . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("hetvi.gudka@somaiya.edu", $subject, $message, $headers);
echo "Your query has been sent successfuly ! Thank you ";
}
}
}
?>
