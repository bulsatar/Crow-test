
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

require_once 'hwapi.php';
$config = require_once 'config.php';

$str = $_GET["str"];
$cleanstr = CleanString($str);


if ($config['PrintScreen'] == 'true'){
	echo "<div id=\"hellotext\">";
	echo CleanString($cleanstr);
	echo "</div>"; 
}

if ($config['SendToDB'] == 'true'){
	$link = mysqli_connect($config['dbIP'], $config['dbUserName'], $config['dbPassword'], $config['dbName']);
	mysqli_set_charset($link,'utf8');
	
	$sql = "insert into " .$config['InsertTable'] ."(" .$config['InsertCol1'] .") values ('" .$cleanstr ."');";
	$result = mysqli_query($link,$sql);
	
	if (!$result) {
  		http_response_code(404);
  		die(mysqli_error());
	}
}



?>


</body>
</html>
