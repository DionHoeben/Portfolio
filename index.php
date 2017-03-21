<?php

$pageName ="";
if (!empty($_GET)) {
 $pageName=$_GET["page"];
}

switch($pageName){
	case "media":
		$page="mediaLogboek.php";
		break;
	case "lste":
		// $page="LSTELogboek.php";
		// break;
	default: 
		$page="LSTELogboek.php";

}
?>

<!DOCTYPE html>
<html >
  <head>
   <meta charset="UTF-8">
   <title>Whutsapp</title>
   <link rel="stylesheet" type="text/css" href="css/whutsapp.css">
   <script src="js/whutsappInitialisatie.js"></script>
		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		    <link type="text/css"
				href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" rel="stylesheet" />
		    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
		     <script type="text/javascript" src="js/youtubePopUp.js"></script>
<body>
	<div id= "logboek">
		
		<div id="eigenGegevens">
			<img id= "eigenPf" src="images/DionPf.png"><div id= "profileName">Dion J.P Hoeben</div>
		</div>

		<!-- Contactlist -->
		<div id="contactList">
		    <div id="container1">
		        <div id="container2">

					<div class="contactBox">
						<a class="contactLink" href="index.php?page=lste" target="logboekChat">
							<img class= "contactPf" src="images/DionPf.png">
							<div class= "contactName">LSTE Logboek</div>
							<div class= "contactSubject"> Glow: The Source</div>
						</a>
					</div>

					<div class="contactBox">
						<a class="contactLink" href="index.php?page=media" target="logboekChat">
							<img class= "contactPf" src="images/DionPf.png">
							<div class= "contactName">Media Logboek</div>
							<div class= "contactSubject"> Het Gelders Orkest</div>
						</a>
					</div>

					<div class="contactBox">
						<a class="contactLink" href="LSTELogboek.html" target="logboekChat">
							<img class= "contactPf" src="images/DionPf.png">
							<div class= "contactName">LSTE Logboek</div>
							<div class= "contactSubject"> Glow: The Source</div>
						</a>
					</div>

					<div class="contactBox">
						<a class="contactLink" href="LSTELogboek.html" target="logboekChat">
							<img class= "contactPf" src="images/DionPf.png">
							<div class= "contactName">LSTE Logboek</div>
							<div class= "contactSubject"> Glow: The Source</div>
						</a>
					</div>

					<div class="contactBox">
						<a class="contactLink" href="LSTELogboek.html" target="logboekChat">
							<img class= "contactPf" src="images/DionPf.png">
							<div class= "contactName">LSTE Logboek</div>
							<div class= "contactSubject"> Glow: The Source</div>
						</a>
					</div>

					<div class="contactBox">
						<a class="contactLink" href="LSTELogboek.html" target="logboekChat">
							<img class= "contactPf" src="images/DionPf.png">
							<div class= "contactName">LSTE Logboek</div>
							<div class= "contactSubject"> Glow: The Source</div>
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div id="chatFrame">   
		<?php include $page;?>
	</div>

</body>

</html>