<html>
	<head>
		<title>PHP Looping Code</title>
	</head>
	<body>
<?php
	$i=5;                               // Initiate varialbe with initial value from where to start
	for(;$i<=150;$i++) {
		if($i%12==0)                    // IF value is multiple of both  3 * 4 = 12 
			echo "zapzoo<br/>";
		else if($i%3==0)                // IF value is multiple of only  3
			echo "Zap<br/>";
		else if( $i%4==0)               // IF value is multiple of only  4
			echo "Zoo<br/>";        
		else                            // else actual value
			echo $i."<br/>";        
	}
?>		
	</body>
</html>
