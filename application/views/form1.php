<form>
<H4 align="center">
	Nama UKM <input id='fnama' value='<?php echo @ $row->nama?>' /> <br> <br>
	Ketua UKM <input id='fketua_ukm' value='<?php echo @ $row->ketua_ukm?>' /> <br> <br> 
	<?php if($insertMode) { ?>
		<input type='button' value='Insert' onclick='doIns()' />   
		<input type='button' value='Update' onclick='doUpd(<?php echo @ $row->id;?>);' />
		<input type='button' value='Delete' onclick='if (confirm("Delete?")) doDel(<?php echo @ $row->id;?>);' />
	<?php }?> 
	<br><br>
	<?php 
		if ($this->session->userdata('logged_in')) 
		{
			echo anchor('blog/logout', 'Logout');
		} 
		else 
		{
			echo anchor('blog/login', 'Login');
		} 
	?>
	<br> <br>
</form>
</H4>
