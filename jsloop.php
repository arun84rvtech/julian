d>
		<title>Javascript Looping Code</title>
		<script type="text/javascript">
			function writefun() {
				document.write("Javascript Code");
				i=5; 						// Initiate varialbe with initial value from where to start
				for(;i<=150;i++) {
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
		</script>
	</head>
	<body onload = "writefun();">
		
	</body>
</html>
