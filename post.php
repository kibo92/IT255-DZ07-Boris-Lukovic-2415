<?php
header("Content-type: application/json");
if(isset($_POST['broj'])){

	$pomnozensa5 = $_POST['broj']*5;
	$result = array();

	$result['vrednost'] = $_POST['broj'];
	$result['puta5'] = $pomnozensa5;

	echo json_encode($result);

}


?>