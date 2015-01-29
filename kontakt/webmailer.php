<?php

function webmailer($vorname, $nachname, $strasse, $hausnummer, $plz, $ort, $telefon, $email, $message){

		$serverMail = "wwi13-07@test.dhbw-heidenheim.de"; //Webserver Mail
		$recipient = "svnschneidr@googlemail.com"; //Empfänger
		$subject = "Kundennachricht von gutwein-marmor.de"; //Betreff

		//Kunden-Absender-Informationen
		$kundenNachname = $nachname;
		$kundenVorname = $vorname;
		$kundenMail = $email;

		$header = "From: ".$kundenNachname. " <".$kundenMail.">\n"; //Kopfdaten
		$mail_body = "Sie haben eine Nachricht von ".$kundenVorname." ".$kundenNachname." erhalten.\n\n Anschrift:\n ".$strasse." ".$hausnummer."\n ".$plz." ".$ort."\n\n Kontakt:\n Telefon: ".$telefon."\n E-Mail: ".$email."\n\n Nachricht:\n ".$message; //Nachricht
		
		mail($recipient, $subject, $mail_body, $header); //Funktionsaufruf
		
		echo"<div style=padding:0 0 5% 0><h2>Ihre Nachricht wurde an gutwein-marmor.de gesendet.<br/>Eine Kopie der Nachricht wurde an Ihre E-Mail-Adresse gesendet.<h2></div>";
}

function webmailerToSender($vorname, $nachname, $strasse, $hausnummer, $plz, $ort, $telefon, $email, $message){

		$serverMail = "wwi13-07@test.dhbw-heidenheim.de"; //Webserver Mail
		$recipient = $email; //Empfänger
		$subject = "Ihre Nachricht an gutwein-marmor.de"; //Betreff

		//Kunden-Absender-Informationen
		$kundenNachname = $nachname;
		$kundenVorname = $vorname;
		$kundenMail = $email;		

		$header = "From: gutwein-marmor.de <".$kundenMail.">\n"; //Kopfdaten
		$mail_body = "Sie haben folgende Nachricht an die Firma Gutwein GmbH gesendet:\n".$kundenVorname." ".$kundenNachname."\n\n Anschrift:\n ".$strasse." ".$hausnummer."\n ".$plz." ".$ort."\n\n Kontakt:\n Telefon: ".$telefon."\n E-Mail: ".$email."\n\n Nachricht:\n ".$message; //Nachricht
		
		mail($recipient, $subject, $mail_body, $header); //Funktionsaufruf
}
?>
