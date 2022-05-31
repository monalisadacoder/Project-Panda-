<?php
	include('config.php');
	session_start();
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$myemail=mysqli_real_escape_string($link,check_input($_POST['email']));
		
		$password = mysqli_real_escape_string($link,check_input($_POST["pass"]));
		$fpassword=md5($password);
		
		$query=mysqli_query($link,"select * from `registration` where WorkEmail='$myemail' and Password='$fpassword'");
		
		if(mysqli_num_rows($query)==0){
			$_SESSION['msg'] = "Login Failed, Invalid Input!";
//		header('location: index.php');
echo "wrong things";
		}
		else{
		echo"logged in";	
			$row=mysqli_fetch_array($query);

				$_SESSION['id']=$row['id'];
				?>
				<script>
					window.alert('Login Success, Welcome Admin!');
					window.location.href='index.php';
				</script>
				<?php
			
			
		}
		
		
	}
?>