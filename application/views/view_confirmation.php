<html>
	<head>
	
		<title>Confirmation Page</title>
		
		<style>
				#text {

				margin: 50px auto;

				text-align: center;

				font-size: 4em;

				font-weight: bold;

				color: blue;

			

				text-shadow: 

				5px 5px 10px black, 

				-5px -5px 12px Green;

				

			}

		</style>
	</head>
	<body bgcolor=lightgreen>
			<br>
	<div id="text">
		Congratulations !!!
	</div>
	<h1 align="center">

	<p><font color="green">You have successfuly registered with this following data : </p></h1>
		<p><font color="green"><h2 align="center">UserName: <?php echo $nama ; ?><br/></p>
		<p><?php echo anchor('blog/', 'Back to Homepage'); ?></p>
		</h2>
	</body>
</html>
