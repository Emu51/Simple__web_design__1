<?php
	$title = "User List Page";
	include('header.php');
?>

	<a href="home.php">Back</a> |
	<a href="../controller/logout.php">logout</a>	
	<br>
	
	<h1>User list</h1>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>ACTION</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Emu51</td>
			<td>emu.emu750@gmail.com</td>
			<td>
				<a href="edit.php?id=1"> EDIT</a> |
				<a href="delete.php?id=1"> DELETE</a>
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Dip_98</td>
			<td>Dip_98@gmail.com</td>
			<td>
				<a href="edit.php?id=2"> EDIT</a> |
				<a href="delete.html"> DELETE</a>
			</td>
		</tr>
		<tr>
			<td>3</td>
			<td>salman_34</td>
			<td>salman_34@gmail.com</td>
			<td>
				<a href="edit.php?id=3"> EDIT</a> |
				<a href="delete.html"> DELETE</a>
			</td>
		</tr>
	</table>

<?php
	include('footer.php');
?>