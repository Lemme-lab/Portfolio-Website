
<?php 
if(!empty($_POST['website'])) die();
$email = $_POST['email'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$message = $_POST['message'];
$formcontent="From: $lname \n Message: $message";
$recipient = "Lucas.lenarcic@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>