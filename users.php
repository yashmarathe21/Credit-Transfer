<?php 
  require_once 'core/init.php';
  include 'includes/header.php'; 
?>
<br>
<br>
<table class="table table-bordered">
<thead>
	<th>User ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Address</th>
	<th>Credits</th>
</thead>
<tbody>
	<?php 
		$sql = "SELECT * FROM user";
		$result = $con->query($sql);
	?>

	<?php while($data = mysqli_fetch_assoc($result)): ?>
	<tr>
		<td><?= $data['user_id']; ?></td>
		<td><?= $data['name']; ?></td>
		<td><?= $data['email']; ?></td>
		<td><?= $data['phone']; ?></td>
		<td><?= $data['address']; ?></td>
		<td><?= $data['credits']; ?></td>
	</tr>
	<?php endwhile; ?>		
</tbody>
</table>
<br>

<center><button class="btn1 btn-lg"><a href="transfer.php">Transfer Link</a></button></center>

<br>
<?php 
  include 'includes/footer.php'; 
?>