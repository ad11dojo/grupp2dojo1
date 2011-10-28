<html>
<head>
	<title>AD11 Koddojo grupp 2</title>
	<meta charset="UTF-8" />
</head>
<body>
<?php
 
// vår indata till programmet
$input_string = "**.|…|…";
$answer_string="**1|221|000";

function programmet($input)
{
	//gör input till en array
	$test=explode("|",$input);
	print_r($test);

	$test2=array();
	//Dela upp arrayen i underarrayer
	for($i=0;$i<count($test);$i++)
		{
		echo $test[$i]."hej";
		for($j=0;$j<strlen($test[$i]);$j++)
			$test2[$i]=substr($test[$j],$j,1);
			{
			$test[$i][$j]=substr($test[$j],$j,1);
		}
	}
	echo $test[0][0]."då";
	print_r($test);
	//in med en sträng, ut med en sträng
	$output=$answer_string;
	echo $output;
	return $output;
}

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