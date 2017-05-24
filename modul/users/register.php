<?php
	include "connect.php";
	$name = $_POST['name'];
	$status = $_POST['status'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$encryptPassword = md5($password);


	// Set path folder tempat menyimpan fotonya	
	

	$sql_buat = "INSERT INTO users(id_user, name, username, email, password, id_status) VALUE('','$name','$username','$email','$encryptPassword', '$status')";
	
		if(isset($_POST['username'])&&($_POST['email']))
			{
				$username=$_POST['username'];
				$email=$_POST['email'];
				$checkdata=" SELECT * FROM users WHERE email='$email' and username='$username' ";
				$query=mysqli_query($conn,$checkdata);
				if(mysqli_num_rows($query)>0)
					{?>
						<script language="javascript">alert("Username and Email Already Exist");</script>
						<script>document.location.href='/bloodbank/index.html';</script><?php
					}
			}
		if(isset($_POST['username']))
		{
			$name=$_POST['username'];
			$checkdata=" SELECT username FROM users WHERE username='$username' ";
			$query=mysqli_query($conn,$checkdata);
			if(mysqli_num_rows($query)>0)
				{?>
					<script language="javascript">alert("Username Already Exist");</script>
					<script>document.location.href='/bloodbank/index.html';</script><?php
				}
			/*else
				{
					echo "OK";
				}
			exit();
		}*/
		}

		if(isset($_POST['email']))
			{
				$email=$_POST['email'];
				$checkdata=" SELECT email FROM users WHERE email='$email' ";
				$query=mysqli_query($conn,$checkdata);
				if(mysqli_num_rows($query)>0)
					{?>
						<script language="javascript">alert("Email Already Exist");</script>
						<script>document.location.href='/bloodbank/index.html';</script><?php
					}
				/*else
					{
						echo "OK";
					}
					exit();
			
*/
			}
	if (mysqli_query($conn, $sql_buat)){
?>
		<script language="javascript">alert("Sign up Successful");</script>
		<script>document.location.href='/bloodbank/index.html';</script>
		<?php
	}
	else{
	?>
		<script language="javascript">alert("Sign up failed");</script>
		<script>document.location.href='/bloodbank/index.html';</script>
		<?php
	}
	mysqli_close($conn);
?>