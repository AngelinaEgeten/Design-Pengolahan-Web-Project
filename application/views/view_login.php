<html>
	<head>
		<title>Login Page</title>
		<style>
			.error{color: violet;}
			
			#draw {
				border:1px solid Blue;
				Float:center;
			} 
			body {
				background: violet;
				
			}
			#container {
				width: 500px;
				height: 350px;
				Float:center;
				
				border: 1px solid white;
				-moz-border-top-colors: darkgrey grey;
				-moz-border-left-colors: darkgrey grey;
				-moz-border-right-colors: white grey;
				-moz-border-bottom-colors: white grey;
				
				
				margin: 50px auto;
				
				background: lightblue;
				
				
				background:-moz-radial-gradient(20% 20%, blue, lightblue 80%);
				
				
				
				-moz-border-radius-topleft:50px;
				-moz-border-radius-bottomright: 50px;
				
				
				border-top-left-radius: 50px;
				border-bottom-right-radius: 50px;
				
				
			}
			
			#text2 {
				font-size: 2em;
				font-weight: bold;
				text-align: center;
				color: #fff;
				/* Outlined text*/
				text-shadow: 1px 0 Green, -1px 0 Green, 0 1px Green, 0 -1px Green;
			}
		</style>
	</head>
	<body bgcolor=violet>
		<br>
			<div id="container">
				<div id="text2"> <br>
					Login Form
			<br> <br>
		
		<div><?php echo $this->session->flashdata('error'); ?></div>
		<?php echo form_open('blog/login'); ?>
		
			<div>
			
				<span><?php echo form_label('UserName :','nama'); ?></span>
				<span><?php echo form_input('nama', set_value('nama')); ?></span>
				<?php echo form_error('nama'); ?>
			
			</div>
			
			<div>
			
				<span><?php echo form_label('Password :','password'); ?></span>
				<span><?php echo form_password('password') ?></span>
				<?php echo form_error('password'); ?>
			
			</div>
			<div>
			<br>
				<?php echo form_submit('submit', 'Login'); ?> <br> <br>
				<?php echo anchor('blog/index', 'Back to Homepage'); ?>
			
			</div>
			</div>
			</div>
		<?php echo form_close(); ?>
	</body>
</html>
