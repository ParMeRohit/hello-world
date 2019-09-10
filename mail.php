<?php
	$to = "rohit.parmar@sakec.ac.in";
	$subject = "Response from website";
	$message = action="http://someserver/cgi-bin/formmail.pl" method="post";
 
 if (mail($to , $subject,$message)){
 echo "Response recorder";
 }else{
	 echo"Fill all fields";
 }
?>
