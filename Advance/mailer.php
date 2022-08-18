<?php
ini_set("sendmail_from","examplesender@gmail.com");
$to="examplereceiver@gmail.com";
$subject="This is subject";
$message ="This is simple text message.";
$header="From:examplesender@gmail.com\r\n";

$result= mail($to,$subject,$message,$header);
if($result==true){
	echo "Message sent successfully...";
}
else{
	echo "Sorry, unable to send mail...";
}
?>