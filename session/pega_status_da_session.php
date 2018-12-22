<?php 
require_once("config.php");


echo session_save_path();

echo "<br>";
var_dump(session_status());

echo "<br>";

switch (session_status()) {

	case PHP_SESSION_DISABLED:
		echo "sessões desabilitadas";
		break;
	case PHP_SESSION_NONE:
		echo "Sessão habilitada mas não iniciada";
	case PHP_SESSION_ACTIVE:
		echo "sessões habilitadas, já existe uma";
		break;
	default:
		# code...
		break;
}


 ?>