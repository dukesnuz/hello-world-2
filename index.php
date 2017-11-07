<h1>Hello World</h1>
<img src='./images/cactus.jpg' width='250' height='250' alt='A
Ball Cactus'>

<p>A change</p>

<p>Checking to see if able to fax from Digital Ocean</p>
<?php
	$to = "17062536984@efaxsend.com";
    $subject = "Hello";
    $txt = "Sue, How are you?";
    $headers = "From: fax@ajaxtransport.com" . "\r\n" .
    "CC: david@ajaxtransport.com";

    mail($to,$subject,$txt,$headers);
?>
