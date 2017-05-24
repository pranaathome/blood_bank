<?php
	include "connect.php";
	if($_SESSION['status'] == 'user') {
		$id = $_SESSION['id2'];
		$nama = $_POST['newname'];
		$email = $_POST['newemail'];
		$address = $_POST['newaddress'];
		$phone = $_POST['newphone'];
		$sex = $_POST['newgender'];
		$rhesus = $_POST['newrhesus'];
		$blood = $_POST['newblood'];
		
		$result2 = mysqli_query($conn, "UPDATE users SET name = '$nama', email = '$email', address = '$address', phone_number = '$phone', sex = '$sex', rhesus = '$rhesus', blood_type = '$blood' WHERE id_user = '$id'");
	
		if ($result2) {
?>
			<script language="javascript">alert("Update Successful");</script>
			<script>document.location.href='/bloodbank/pendonor/settingprofile.php';</script>
<?php
		}
		else {
?>
			<!-- <script language="javascript">alert("Update Failed");</script> -->
			<!-- <script>document.location.href='/bloodbank/pendonor/settingprofile.php';</script> -->
<?php
		}
	}
?>