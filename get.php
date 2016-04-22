<?php
	header("Content-type: application/json");
	$osobe = array();

	$osoba = array();
	$osoba['ime'] = "Boris";
	$osoba['prezime'] = "Lukovic";
	$osoba['kontakt'] = "+381652323223";
	$osoba['zanimanje'] = "Pop";

	$osoba2 = array();
	$osoba2['ime'] = "Luka";
	$osoba2['prezime'] = "Lukovic";
	$osoba2['kontakt'] = "+38123712372";
	$osoba2['zanimanje'] = "programer";

	array_push($osobe, $osoba);
	array_push($osobe, $osoba2);

	echo json_encode($osobe);

?>

