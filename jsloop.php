<html>
	<head>
		<title>Javascript Looping Code</title>
		<script type="text/javascript">
			function writefun() {
				document.write("Javascript Code");
				
				limit = prompt("Enter Loop Limit", "150");

				i=5; 						// Initiate varialbe with initial value from where to start
				if(limit>5 && limit<151) {
					for(;i<=limit;i++) {
						if(i%12==0)   			// IF value is multiple of both  3 * 4 = 12 
							document.write("zapzoo<br>");
						else if(i%3==0)		// IF value is multiple of only  3
							document.write("Zap<br>");
						else if( i%4==0) 		// IF value is multiple of only  4
							document.write("Zoo<br>");	
						else 					// else actual value
							document.write(i+"<br>");	
					}
				}
				else {
					document.write("<br><span style='color:red;'>Loop Limit Can't be less than 5 OR Can't Be Greater than 150<br>Please Refresh Page & Re-enter value</span>");		
				}
			}
		</script>
	</head>
	<body onload = "writefun();">
		
	</body>
</html>