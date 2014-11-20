<?php


    $tablet = $_POST["tablet"];
        //$match= $_POST["match"];
    $team = $_POST["team"];
        //$deadbot = $_POST["deadbot"];
        //$noshow = $_POST["noshow"];
        //$fataljam = $_POST["fataljam"];
    $startingposition = $_POST["startingposition"];
    $autoshort = $_POST["autoshort"];
	$automedium = $_POST["automedium"];
	$autolarge = $_POST["autolarge"];
	$autocenter = $_POST["autocenter"];
        //$autoparked = $_POST["autoparked"];
    $kickstand = $_POST["kickstand"];
        //$telestyle = $_POST["telestyle"];
    $teleshort = $_POST["teleshort"];
    $telemedium = $_POST["telemedium"];
    $telelarge = $_POST["telelarge"];
	$endsmall = $_POST["endsmall"];
	$endmedium = $_POST["endmedium"];
	$endlarge = $_POST["endlarge"];
    $endcenter = $_POST["endcenter"];
	    //$endparked = $_POST["endparked"];

    $db = pg_connect('host = postgresql://$OPENSHIFT_POSTGRESQL_DB_HOST:$OPENSHIFT_POSTGRESQL_DB_PORT user = adminabiaund password = aQQk148VkULG dbname = php');
    

    if($db->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
    $curQuery = pg_query("CREATE TABLE IF NOT EXISTS scouting(tablet INTEGER, team INTEGER, startingposition TEXT, autoshort INTEGER, automedium INTEGER, autolarge INTEGER, autocenter INTEGER, kickstand BOOL, teleballs INTEGER, teleshort INTEGER, telemedium INTEGER, telelarge INTEGER, endsmall INTEGER, endmedium INTEGER, endlarge INTEGER, endcenter INTEGER)");

$json = json_decode($data);


    $curQuery = pg_query("INSERT INTO scouting($tablet, $team, $startingposition, $autoshort, $automedium, $autolarge, $autocenter, $kickstand, $teleshort, $telemedium, $telelarge, $endsmall, $endmedium, $endlarge, $endcenter)");
	
	$data = pg_query("select * from scouting;");


    echo("<h1>Success pushing to database.</h1>");
	echo($data);
?>