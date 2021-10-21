<?php

	$to = "biuro@grupa-alivio.pl";
	$name = $_REQUEST['name'];
    $from = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];	

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
 	
	$body = "<!DOCTYPE html><html lang='pl'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<h3><u>[PL] Wiadomosć ze strony wwww.grupa-alivio.pl </u></h3>";
	$body .= "<h4 >Imię: </h4><p>{$name}</p>";
	$body .= "<h4 >E-mail:</h4><p> {$from},/p>";
	$body .= "<h4 >Temat: </h4><p>{$subject}</p>";
	$body .= "<h4>Wiadomość: </h4>";
	$body .= "<p>{$message}</p>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);
	header("Location: index.html")
?>