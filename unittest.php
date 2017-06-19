
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>


<?php

require_once 'hwapi.php';
$config = require_once 'config.php';

if ($config['PrintScreen'] == 'true'){
	$cleanstr = CleanString('Hello World');
	if ($cleanstr == 'Hello World'){echo '<div>CleanString returned \'Hello World\'</div>';}
	else {echo '<div>CleanString failed</div>';}	
}else {
	echo '<div>Current configuration not correct for unit testing. Please correct.</div>';
}


?>


</body>
</html>
