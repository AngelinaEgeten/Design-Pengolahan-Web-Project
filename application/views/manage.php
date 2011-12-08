<html>
	<head>
		<title>Manage</title>
		<script type="text/javascript" src="/DPW/jquery.js"></script>	
		<script>
			var bu = '<?php echo base_url()?>index.php/blog/'
		    function doEdit(id) 
			{
				var data={};
				data['id'] = parseInt(id);
				$.post(bu+'viewUpd',data,function(res){$('form').html(res);})
			}
			function doIns() 
			{
				var data = {};
				data['nama'] = $('#fnama').val();
				data['ketua_ukm'] = $('#fketua_ukm').val();
				$.post(bu+'insert',data,function(res){$('#content').html(res);})
			}
			function doUpd(id) 
			{
				var data = {};
				data['id'] = parseInt(id);
				data['nama'] = $('#fnama').val();
				data['ketua_ukm'] = $('#fketua_ukm').val();
				$.post(bu+'update',data,function(res){$('#content').html(res);})
			}
			function doDel(id) 
			{
				var data = {};
				data['id'] = parseInt(id);
				$.post(bu+'delete',data,function(res){$('#content').html(res);})
			}
			
		</script>
	</head>
	<body bgcolor=lightblue>
	
	<div id='content'>
			<H1 align="center"> Daftar Nama UKM
			<br>
			<table border="1">
				<tr>
					<th bgcolor=red>No</th>
					<th bgcolor=yellow>UKM Name</th>
					<th bgcolor=blue>UKM Leader</th>
				</tr>
				<?php $no=0; foreach($rows as $row) { ++$no; ?>
					<tr>
						<td><input type='button' onclick='doEdit(<?php echo $row->id?>)' value='<?php  echo $no?>' /></td>
						<td bgcolor=violet><?php echo $row->nama?></td>
						<td bgcolor=pink><?php echo $row->ketua_ukm?></td>
					</tr>
				
				<?php } ?>
				
				</table> 
		
			
		</div>
		</h1>
	</body>
</html>	
	