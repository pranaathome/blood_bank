<?php
	include 'connect.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$encryptPassword = md5($password);
	
	$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' and password='$encryptPassword'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row) {
		$_SESSION['id'] = $row['id_status'];
		$_SESSION['id2'] = $row['id_user'];

		$_SESSION['status'] = "user";
		if($_SESSION['id'] == '0'){
?>
			<script language="javascript">alert("Hello, Villagers!");</script>
			<script> document.location.href='/bloodbank/admin/dashboard.php';</script>
<?php
		}
		else {
?>
			<script language="javascript">alert("Hello, <?php echo $row['name']?>");</script>
			<script> document.location.href='/bloodbank/pendonor/dashboard_pendonor.php';</script>
<?php		
		}
	}	
	else { 
?>
		<script language="javascript">alert("Logging Failed");</script>
		<script>document.location.href='/bloodbank/index.php';</script>
<?php 
	}		
	mysqli_close($conn);
?>