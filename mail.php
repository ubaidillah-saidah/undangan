<?php

if(isset($_POST['recipient'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile_no = $_POST['mobile_no'];
	$no_of_member = $_POST['no_of_member'];
	$events = $_POST['events'];
	
	$to = $_POST['recipient'];
	$subject = $_POST['subject'];
	$message = "<p>Name: ".$name."</p><p> Email: ".$email."</p><p>Mobile Number: ".$mobile_no."</p><p> No. Of Members: ".$no_of_member."</p><p> Event Name: ".$events."</p>";
	$header = "From: $name@wedding.com\r\n"; 
	$header.= "MIME-Version: 1.0\r\n"; 
	$header.= "Content-Type: text/html; charset=utf-8\r\n"; 
	$header.= "X-Priority: 1\r\n"; 
	mail($to,$subject,$message,$header);
	//echo 'yeah..!!';
}

?>