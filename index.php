<html>
<head>
	<title>AD11 Koddojo grupp 2</title>
	<meta charset="UTF-8" />
</head>
<body>
<?php
 
// vår indata till programmet
$input_string = "**.|…|…";
$answer_string = "**1|221|000";

// kör "programmet"
$output_string = programmet( $input_string );

// om programmet funkar så är vår utdata densamma som det rätta svaret ovan
if( $output_string == $answer_string )
{
	echo "bra!";
}
else
{
	echo "öva mer!";
}

?>
</body>
</html>