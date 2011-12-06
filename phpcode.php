<html>
	<head>
		<title>PHP Looping Code</title>
	</head>
	<body>
<?php
		$limit = 150;	
		if(isset($_POST['txt-loop-value'])) {
			$limit = $_POST['txt-loop-value'];
		}
?>
	<form name="loop-value" method="post" id="loop-value">
		<label>Enter Loop Limit <input type="text" value="<?php echo $limit;?>" name="txt-loop-value"/></label>
		<input type="submit" name="submit" value="Loop" />
	</form>
	<?php
		if(isset($_POST['txt-loop-value'])) {
			if(is_numeric($limit)) {
				if($limit>5 && $limit<151) {
					$i=5;                               // Initiate varialbe with initial value from where to start
					for(;$i<=$limit;$i++) {
						if($i%12==0)                    // IF value is multiple of both  3 * 4 = 12 
							echo "zapzoo<br/>";
						else if($i%3==0)                // IF value is multiple of only  3
							echo "Zap<br/>";
						else if( $i%4==0)               // IF value is multiple of only  4
							echo "Zoo<br/>";        
						else                            // else actual value
							echo $i."<br/>";        
					}
				}
				else {
					echo "<br><span style='color:red;'>Loop Limit Can't be less than 5 OR Can't Be Greater than 150<br>Please Refresh Page & Re-enter value</span>";	
				}
			}
			else {
					echo "<br><span style='color:red;'>Value You Entered Is not integer. Please Enter Valid Value</span>";				
			}
		}

	?>		
	</body>
</html>