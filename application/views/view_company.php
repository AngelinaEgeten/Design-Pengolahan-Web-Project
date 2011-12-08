<html>
	<head>
		<title>Company Profile</title>
		<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
		<script type="text/javascript">
			$(function() {
				// Tabs
				$('#tabs').tabs();
				
				// Accordion
				$("#accordion").accordion({ header: "h3" });
			});
		</script>
	</head>
	<body>
		<h1>Company Profile</h1>
		<p>Welcome to our company!</p>
		<!-- Tabs -->
		<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Overview</a></li>
				<li><a href="#tabs-2">History</a></li>
				<li><a href="#tabs-3">Management</a></li>
			</ul>
			<div id="tabs-1">Overview of our Company</div>
			<div id="tabs-2">History of our Company</div>
			<div id="tabs-3">The Management team of our Company</div>
		</div>
		
		<h2>Frequently-Asked Questions</h2>
		
		<!-- Accordion -->
		<div id="accordion">
			<div>
				<h3><a href="#">Q: What....?</a></h3>
				<div>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>
			</div>
			<div>
				<h3><a href="#">Q: When....?</a></h3>
				<div>Phasellus mattis tincidunt nibh.</div>
			</div>
			<div>
				<h3><a href="#">Q: Where...?</a></h3>
				<div>Nam dui erat, auctor a, dignissim quis.</div>
			</div>
		</div>
	</body>
</html>