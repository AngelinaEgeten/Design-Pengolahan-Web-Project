<html>
	<head>
		<title>Signup Page</title>
		<style>
			.error{color: white;}
			
			
				#draw {
				border:1px solid red;
				Float:center;
			} 
			body {
				background: pink;
				
			}
			#container {
				width: 600px;
				height: 400px;
				Float:center;
				
				border: 1px solid white;
				-moz-border-top-colors: darkgrey grey;
				-moz-border-left-colors: darkgrey grey;
				-moz-border-right-colors: white grey;
				-moz-border-bottom-colors: white grey;
				
				
				margin: 50px auto;
				
				background: lightblue;
				
				
				background:-moz-radial-gradient(20% 20%, red, pink 80%);
				
				
				
				-moz-border-radius-topleft:50px;
				-moz-border-radius-bottomright: 50px;
				
				
				border-top-left-radius: 50px;
				border-bottom-right-radius: 50px;
				
				
			}
			
			#text1 {
				font-size: 2em;
				font-weight: bold;
				text-align: center;
				color: #fff;
				/* Outlined text*/
				text-shadow: 1px 0 Green, -1px 0 Green, 0 1px Green, 0 -1px Green;
			}
			#box {
				width: 600px;
				height: 60px;
				margin: 50px auto;
				background: -moz-linear-gradient(left, Red, Pink);
				border-radius: 20px;
				/*Firefox*/
				-moz-box-shadow: 10px 10px 10px black;
				/*Official*/
				box-shadow: 10px 10px 10px black;
			}
			#text2 {
				font-size: 3em;
				font-weight: bold;
				text-align: center;
				color: #fff;
				/* Outlined text*/
				text-shadow: 1px 0 black, -1px 0 black, 0 1px black, 0 -1px black;
			}
			
		</style>
	</head>
	<body bgcolor=pink>
	<div id="box">
	<div id="text2">
			SignUp
		</div>
	</div>
	<div id="container">
				<div id="text1"> 
				
		<?php echo form_open('blog/signup'); ?>
			<p align="center">
				<span>UserName : </span>
				<span><?php echo form_input('nama', set_value('nama')); ?></span>
				<?php echo form_error('nama', '<span class="error">', '</span>'); ?>
			</p>
			<p align="center">
				<span>Password : </span>
				<span><?php echo form_password('password') ?></span>
				<?php echo form_error('password', '<span class="error">', '</span>'); ?>
			</p>
			<p align="center">
				<span>Confirm Password : </span>
				<span><?php echo form_password('passconf') ?></span>
				<?php echo form_error('passconf', '<span class="error">', '</span>'); ?>
			</p>
			<p align="center">
				<?php echo form_submit('submit', 'Confirm'); ?> <br> <br>
				<?php echo anchor('blog/index', 'Back to Homepage'); ?>
			</p>
		<?php echo form_close(); ?>
			</div>
	</div>
	</body>
</html>
