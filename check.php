<?php
session_start();
?>
<?php
include "connection.php";
$username=$_POST['uname'];
$password=$_POST['pwd'];
$query="select * from details where username='$username' && password='$password'";
$data=mysqli_query($connection,$query);
$total=mysqli_num_rows($data);
if($total==1){
	echo "login successful";	
}
else
{
	echo "User not found,if you don't have an account please create one";
}
$_SESSION["username"]=$username;
?>

<html>
		<body>
			<br><br>
			<h5>click here to redirect website"</h5>
			<a href="index.html">click here</a>
		</body>
	</html>	















