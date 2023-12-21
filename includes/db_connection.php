<?php
	// Verwijder onderstaande 3 regels in productie
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    

	// --------------------
	$db_host = "dt5.ehb.be";
	$db_user = "2122ArnoLTrends2";
	$db_password = "Jnv2MeJ";
	$db_database = "2122ArnoLTrends2";

	$connection = mysqli_connect($db_host, $db_user, $db_password, $db_database);
    //Voor een achterlijke reden wilt het niet verder gaan als ik een foutmelding krijg ondanks het wel zo ging in mijn eerste project!

	if (!$connection) {
		echo "<div  class='container alert alert-danger'>ERROR: Connection Failed</div>";
	}

 ?>