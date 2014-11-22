<?php


    $match = $_POST["match"];
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

    $db = pg_connect('host=frc.nelsonnwalaska.com port=5432 user=postgres password=FrcAviation444! dbname=scouting');
    
    if(!$db) die("Failed to connect to the DB!"); //if we don't have a DB conn, die


    $curQuery = pg_query("CREATE TABLE IF NOT EXISTS scouting(match INTEGER, team INTEGER, startingposition TEXT, autoshort INTEGER, automedium INTEGER, autolarge INTEGER, autocenter INTEGER, kickstand BOOL, teleshort INTEGER, telemedium INTEGER, telelarge INTEGER, endsmall INTEGER, endmedium INTEGER, endlarge INTEGER, endcenter INTEGER)");

    if(!$curQuery) die("Table check/create failed!"); //if query failed, die

    $curQuery = pg_query("INSERT INTO scouting (match, team, startingposition, autoshort, automedium, autolarge, autocenter, kickstand, teleshort, telemedium, telelarge, endsmall, endmedium, endlarge, endcenter) VALUES (${match}, ${team}, '${startingposition}', ${autoshort}, ${automedium}, ${autolarge}, ${autocenter}, ${kickstand}, ${teleshort}, ${telemedium}, ${telelarge}, ${endsmall}, ${endmedium}, ${endlarge}, ${endcenter})");
	
    if(!$curQuery) die("Data insert failed!"); //if query failed, die

	$data = pg_query("select * from scouting;");

    if(!$data) die("Data selection failed!"); //if query failed, die

    echo("<h1>Success pushing to database.</h1>");
	echo($data);
?>