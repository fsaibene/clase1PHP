<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
echo "La hora es:".date("h:i:s"). "<br>";

if(date("G") >= 20 || date("G") <= 6 )
{
echo "Es de noche"."<br>";
}
if(date("G") >= 7 && date("G") <= 12 )
{
echo "Es de mañana"."<br>";
}
if(date("G") >= 13 && date("G") <= 19 )
{
echo "Es de noche"."<br>";
}
?>

</body>
</html>