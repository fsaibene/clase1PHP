<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

echo date("d"."/"."m"."/"."Y")."<br>";
if( date("z") <= 80 && date("z") >=355)
{

	echo "Es verano!!";
}
if( date("z") <= 171 && date("z") >=81)
{

	echo "Es otoño!!";
}
if( date("z") <= 264 && date("z") >=172)
{

	echo "Es Invierno!!";
}
if( date("z") <= 354 && date("z") >=265)
{

	echo "Es Primavera!!";
}

?>

</body>
</html>