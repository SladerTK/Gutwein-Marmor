					
<?php
include 'kontakt/webmailer.php';

echo"

<!DOCTYPE html>
<html>
<head>

<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'/>

<!-- Styleseets -->
<link rel='stylesheet' href='css/style.css' media='all'>
<link rel='stylesheet' href='css/col.css' media='all'>
<link rel='stylesheet' href='css/2cols.css' media='all'>
<link rel='stylesheet' href='css/3cols.css' media='all'>
<link rel='stylesheet' href='css/4cols.css' media='all'>
<link rel='stylesheet' href='css/6cols.css' media='all'>
<link rel='stylesheet' href='css/8cols.css' media='all'>
<link rel='stylesheet' href='css/menu.css' media='all'>
<link rel='stylesheet' href='css/kontakt.css' media='all'>


<!-- JavaScript -->
<script src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/menu.js'></script>


<title> Kontakt | Gutwein GmbH</title>
<link href='images/icon.png' type='image/x-icon' rel='shortcut icon'>
</head>
<body>
	<div class='main'>
		
		<!-- Header -->
		<div class='section group header'>
			<div class = 'col span_2_of_8'>
				<a href='index.html'><img src='images/Logo.png' alt='logo' class='logo'></a>
			</div>
			<div class ='col span_6_of_8 banner'>
				<img src='images/bannerKontakt.jpg' alt='banner' class='bannerbild'>
			</div>
		</div>
		
		<!-- Horizontales Menue -->
		<div class='section group'> 
			<div class='col span_8_of_8'>
				<div class='leftmargin'>
					<div id='mobile'>
						<a href='index.html' id='Logo'></a>
						<button id='button' onclick='ausfahren();'></button>
					</div>
					<div class='menu'>
						<ul>
						<li><a title='Home' href='index.html'>Home</a></li>
						<li><a title='&Uuml;ber uns' href='about.html'>&Uuml;ber uns</a></li>								
						<li><a title='Leistungen' href='leistungen.html'>Leistungen</a></li>
						<li><a title='Referenzen' href='referenzen.html'>Referenzen</a></li>
						<li><a title='Kontakt' href='kontakt.php'>Kontakt</a></li>
						</ul>
					</div>
				</div>
			</div>	
		</div>
		
		<!-- Vertikales Menue & Inhalt-->
		<div class='section group'>
			
			<!-- Vertikales Menue -->
			<div class = 'col span_2_of_8 list'>
				<!-- Vertikales Menue -->
				<div class='vertikalesmenue'>
					<h2>
						<span class='product'>
							<a title='Badezimmer' href='referenzen.html#Badezimmer'>
								<span>Badezimmer</span>
							</a>
						</span>
						<span class='product'>
							<a title='Treppen' href='referenzen.html#Treppen'>
								<span>Treppen</span>
							</a>
						</span>
						<span class='product'>
							<a title='Arbeitsplatten' href='referenzen.html#Arbeitsplatten'>
								<span>Arbeitsplatten</span>
							</a>
						</span>
						<span class='product'>
							<a title='Fu&szlig;b&ouml;den' href='referenzen.html#Fussboeden'>
								<span>Fu&szlig;b&ouml;den</span>
							</a>
						</span>
						<span class='product'>
							<a title='Au&szlig;enbereich' href='referenzen.html#Aussenbereich'>
								<span>Au&szlig;enbereich</span>
							</a>
						</span>
						<span class='product'>
							<a title='Einzelst&uuml;cke' href='referenzen.html#Einzelstuecke'>
								<span>Einzelst&uuml;cke</span>
							</a>
						</span>
					</h2>
				</div>

				<!--Mobilbanner-->
				<div class ='mobilbanner'>
					<img src='images/mobilbannerKontakt.jpg' alt='mobilbanner' class='bannerbild'>
				</div>
			</div>
			
			<!-- Inhalt -->
			<div class ='col span_6_of_8'>
				<div class='Inhalt'>
					<div class='section group'>
						<div class = 'col span_4_of_4'>";							
								
					
							if(isset($_POST['senden'])){
								@$nachname = $_POST['nachname'];
								@$vorname = $_POST['vorname'];
								@$strasse = $_POST['strasse'];
								@$hausnummer = $_POST['hausnummer'];
								@$plz = $_POST['plz'];
								@$ort = $_POST['ort'];
								@$telefon = $_POST['tel'];
								@$email = $_POST['email'];
								@$message = $_POST['nachricht'];
								
								// Send Mail
								webmailer($vorname, $nachname, $strasse, $hausnummer, $plz, $ort, $telefon, $email, $message);
								webmailerToSender($vorname, $nachname, $strasse, $hausnummer, $plz, $ort, $telefon, $email, $message);
							}							
								
							echo"
							
							
							<h2 class='UeberschriftH2'>Kontakt</h2>
							<a>
								Sie m&ouml;chten gerne ein unverbindliches Angebot, haben W&uuml;nsche, Fragen oder Anregungen?<br/>
								Bitte nehmen Sie Kontakt mit uns auf, wir melden uns schnellstm&ouml;glich bei Ihnen!							
								<br/><br/>
								<br/>
							</a>
							<hr/>
							
							<div class='section group' style='padding:5% 0 5% 0'>
							
								<div class = 'col span_1_of_2'>
									<h3 class='UeberschriftH3 kontaktH3'>Anschrift:</h3>
									<table class='table'>
										<tr>
											<td>Gutwein GmbH</td>
										</tr>
										<tr>
											<td>Burscheider Str. 190</td>
										</tr>
										<tr>
											<td>51381 Leverkusen</td>
										</tr>									
									</table>
								</div>						
								
								<div class = 'col span_1_of_2'>
									<h3 class='UeberschriftH3 kontaktH3'>&Ouml;ffnungszeiten:</h3>
									<table class='table'>
										<tr>
											<td>Mo - Fr:</td>
											<td>08:30 - 12:00</td>
										</tr>
										<tr>
											<td></td>
											<td>13:30 - 17:30</td>
										</tr>									
										<tr>
											<td>Samstag:</td>
											<td>09:00 - 12:00</td>
										</tr>
									</table>
								</div>
							</div>
							
							<div class='section group' style='padding:5% 0 5% 0'>
								
								<div class = 'col span_2_of_2'>
									<h3 class='UeberschriftH3 kontaktH3'>Kontakt:</h3>
									<table class='table'>
										<tr>
											<td>Telefon:</td>
											<td>02171 73970</td>
										</tr>
										<tr>
											<td></td>
											<td>02171 31942</td>
										</tr>
										<tr>
											<td>Telefax:</td>
											<td>02171 30081</td>
										</tr>
										<tr>
											<td>E-Mail:</td>
											<td><a href='mailto:info@gutwein-marmor.de'>
											gutwein-gmbh@netcologne.de
											</a></td>
										</tr>									
									</table>
								</div>							
							
							</div>						
						</div>
					</div>
					
					<div class='section group' style='padding:5% 0 5% 0'>
						<div class = 'col span_4_of_4'>
						<h3 class='UeberschriftH3 kontaktH3'><a id='Termin'>Oder schreiben Sie uns doch einfach:</a></h3>		
						
						<script type='text/javascript'>
							function conf(){
								check = window.confirm('Nachricht absenden?');
								return check;
							}
						</script>		
				<form action='kontakt.php' method='post' onSubmit='return conf()'>";
					
							echo"<input type='hidden' name='FormularName' value='Kontakt-Formular' />
								
								<div class='section group' style='padding:5% 0 5% 0'>
									<div class = 'col span_2_of_4'>
										<table class='table'>
											<tr>
												<td>Name:</td>
											</tr>
											<tr>";
												echo'<td><input type=text name=nachname placeholder=* value="'.@$nachname.'" size=25 maxlength=25 required=required tabindex=1></td>';
											echo"</tr>
										</table>
									</div>
									<div class = 'col span_2_of_4'>
										<table class='table'>
											<tr>
												<td>Vorname:</td>
											</tr>
											<tr>";
												echo'<td><input type=text name=vorname placeholder=* value="'.@$vorname.'" size=25 maxlength=25 required=required tabindex=2></td>';
											echo"</tr>
										</table>
									</div>
								</div>
								
								<div class='section group' style='padding:0 0 5% 0'>
									<div class = 'col span_2_of_4'>
										<table class='table'>
											<tr>
												<td>Telefon:</td>
											</tr>
											<tr>";
												echo'<td><input type=tel name=tel value="'.@$telefon.'" size=15 maxlength=30 tabindex=3></td>';
											echo"</tr>
										</table>
									</div>								
									<div class = 'col span_2_of_4'>
										<table class='table'>
											<tr>
												<td>E-Mail:</td>
											</tr>
											<tr>";
												echo'<td><input type=email name=email placeholder=* value="'.@$email.'" size=30 maxlength=45 required=required tabindex=4></td>';
											echo"</tr>
										</table>
									</div>								
								</div>							
								
								<div class='section group' style='padding:0 0 5% 0'>
									<div class = 'col span_4_of_4'>
										<table class='table'>
											<tr>
												<td>Stra&szlig;e, Nr.:</td><td></td>
											</tr>
											<tr>";
												echo'<td><input type=text name=strasse value="'.@$strasse.'" size=25 maxlength=30 tabindex=5></td>
												<td><input type=text name=hausnummer value="'.@$hausnummer.'" size=4 maxlength=8 tabindex=6></td>';
											echo"</tr>
										</table>
										<table class='table'>
											<tr>
												<td>PLZ:</td>
											</tr>
											<tr>";
												echo'<td><input type=text name=plz value="'.@$plz.'" size=5 maxlength=6 tabindex=7></td>';
											echo"</tr>
											<tr>
												<td>Ort:</td>
											</tr>
											<tr>";
												echo'<td><input type=text name=ort value="'.@$ort.'" size=25 maxlength=25 tabindex=8></td>';
											echo"</tr>
										</table>
									</div>								
								</div>

								<div class='section group' style='padding:0 0 5% 0'>
									<div class = 'col span_4_of_4'>
										<table class='table'>
											<tr>
												<td>Bitte geben Sie hier Ihre W&uuml;nsche ein. Wir machen Ihnen ein Angebot!</td>
											</tr>
											<tr>";
												echo'<td><textarea name=nachricht rows=7 cols=38 maxlength=350 required tabindex=9></textarea></td>';
											echo"</tr>
											<tr>
												<td><input type='submit' name='senden' value='Senden' tabindex='10'></td>
											</tr>										
										</table>
									</div>															
								</div>
								
							</form>
							
						</div>
					</div>
					
				</div>
			</div>		
		</div>
		
			<!-- Footer -->
		<div class='section group'>
			<div class = 'col span_8_of_8'>
				<div class='fusszeile leftmargin'>
					<div class='section group'>
						<div class='col span_2_of_4'>
							<div class='section group'>
								<div class='col span_1_of_2'>
									<a title='Impressum' href='impressum.html'>
									Impressum
									</a>
								</div>
								<div class='col span_1_of_2'>
									<a title='Anfahrt' href='anfahrt.html'>
									Anfahrt
									</a>
								</div>
							</div>
						</div>
						<div class='col span_2_of_4'>
							<div class='section group'>
								<div class='col span_1_of_2'>
									<a title='Datenschutz' href='datenschutz.html'>
									Datenschutz
									</a>
								</div>
								<div class='col span_1_of_2'>
									<a title='Sitemap' href='sitemap.html'>
									Sitemap
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>";

?>