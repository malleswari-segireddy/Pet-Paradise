
<?php
$connection=mysqli_connect("localhost","root","","swarna");
if($connection)
{
	echo "<h4>sign up successful</h4>";
}
else
{
	echo "error to create";
}
?>
<html>
		<body>
		
			<h5>click here to redirect website</h5>
			<a href="index.html">click here</a>
		</body>
	</html>	
<?php

$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpwd=$_POST['pwd'];
$mobile=$_POST['mobile'];

/*$query="create table signup(uname varchar(20) PRIMARY KEY,email varchar(40),pass varchar(10),cpwd varchar(10),mobile int);";
if(mysqli_query($connection,$query))
{
	echo "Table created";
}
else
{
	echo "error".mysqli_error($connection);
}*/

$query1="INSERT INTO signup VALUES(?,?,?,?,?);";
$initialize=mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize,$query1))
{
	mysqli_stmt_bind_param($initialize,"ssssi",$name,$email,$pass,$cpwd,$mobile);
	mysqli_stmt_execute($initialize);
}
else{
	echo "error".mysqli_error($connection);
}
$query2="SELECT *FROM signup;";
$check=mysqli_query($connection,$query2);
if(mysqli_num_rows($check))
{
	while ($row=mysqli_fetch_assoc($check))
	{
		echo $row['uname']." ".$row['email']." ".$row['pass']." ".$row['cpwd']." ".$row['mobile']."<br>";
	}
}
else
{
	echo "error".mysqli_error($connection);
}
?>

