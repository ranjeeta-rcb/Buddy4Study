<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<?php
	//session_syart();
	include 'connect.php';
	$e=$_POST['email'];
	$p=$_POST['password'];
	//die($e."hello".$p)
	$sql="SELECT * FROM `registration` WHERE email='$e' and password='$p'";
	$result=mysqli_query($con,$sql);

	if ($result)
	{
		$row=mysqli_fetch_assoc($result);
		if($row['email']=='$e' &&
			$row['password']=='$p')
		{
			//die(hello);
			//$_SESSION['id']=$u;
			header("location:home.php");
		}
		else
		{
			echo "<script> alert ('wrong user name or password,check your details');</script>";
			?>
			<meta http-equiv="refresh" content="o;url=buddy.html">
			<?php
		}
		}
	else{
		echo "<script> alert ('wrong username or password, check your details');</script>";
		?>
		<meta http-equiv="refresh" content="0;url=buddy.html">
		<?php
	}
	?>
</body>
</html>
